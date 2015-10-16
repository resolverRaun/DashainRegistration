<?php namespace App\Http\Controllers;

use App\Inventory;
use App\MoneyArrange;
use App\Participant;
use App\Participators_type;
use App\People;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */
    protected $rules = ['name' => 'required', 'is_member' => 'required', 'cost_amt' => 'required|numeric', 'received_amt' => 'required|numeric', 'return_amt' => 'required|numeric', 'adult' => 'required|numeric', 'children' => 'required|numeric', 'senior' => 'required|numeric'];
    private $money_arrange_id = 1;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $sum_cost = $this->getTotalCost();
        $total_members = $this->getTotalMember();
        $participants = Participant::with('participant_type')->get()->toArray();
        return view('home', compact('participants'))->with('sum_cost', $sum_cost)->with('total_members', $total_members);
    }

//    get total cost
    private function  getTotalCost()
    {
        $arr_total_money = DB::table('participants')->select(DB::raw('sum(cost_amt) as total_cost_amt'))->first();
        $arr_expended_money = DB::table('inventory')->select(DB::raw('sum(price) as total_expended_amt'))->first();
        if (empty($arr_total_money->total_cost_amt))
            $arr_total_money->total_cost_amt = 0;
        if (empty($arr_expended_money->total_expended_amt))
            $arr_expended_money->total_expended_amt = 0;
        $petty_cash = $arr_total_money->total_cost_amt - $arr_expended_money->total_expended_amt;
        return $petty_cash;
    }

//    get total member
    private function  getTotalMember()
    {
        $total_members = DB::table('participant_type')->select(DB::raw('sum(adult) as total_adult,sum(children) as total_children,sum(senior) as total_senior'))->first();
        return $total_members;
    }

    public function uploadCsv()
    {
        $file = Input::file('csv');
        Excel::load($file, function ($reader) {
            // Getting all results
            $results = $reader->get()->toArray();
            foreach ($results as $result) {
                $oldData = People::where('id', '=', $result['id'])->first();
                if (!is_null($oldData)) {
                    $oldData->fill($result)->save();
                } else {
                    $data = People::create($result);
                }

            }
            return redirect()->action('HomeController@viewPeople');
        });
    }

    public function  addParticipants()
    {
        $sum_cost = $this->getTotalCost();
        $total_members = $this->getTotalMember();
        return view('participant')->with('sum_cost', $sum_cost)->with('total_members', $total_members);
    }

    public function  saveParticipants()
    {
        $attributes = Input::all();
        $validator = Validator::make(Input::all(), $this->rules);
        $participant['name'] = $attributes['name'];
        $participant['cost_amt'] = $attributes['cost_amt'];
        $participant['received_amt'] = $attributes['received_amt'];
        $participant['return_amt'] = $attributes['return_amt'];
        $participant['is_member'] = $attributes['is_member'];
        $result = Participant::create($participant);
        $participant_type['participant_id'] = $result['id'];
        $participant_type['adult'] = $attributes['adult'];
        $participant_type['children'] = $attributes['children'];
        $participant_type['senior'] = $attributes['senior'];
        $result_participant = Participators_type::create($participant_type);
        if ($result_participant) {
            return redirect()->action('HomeController@addParticipants');
        }
    }

    public function editParticipants($id)
    {
        $participant_info = Participant::with('participant_type')->find($id)->toArray();
        return view('edit_participant', compact('participant_info'));
    }

    public function  updateParticipants($id)
    {
        $participant_info = Participant::find($id);
        $attributes = Input::all();
        $participant['name'] = $attributes['name'];
        $participant['cost_amt'] = $attributes['cost_amt'];
        $participant['received_amt'] = $attributes['received_amt'];
        $participant['return_amt'] = $attributes['return_amt'];
        $participant['is_member'] = $attributes['is_member'];
        $result = $participant_info->fill($participant)->save();
        $participantTypeall=Participators_type::where('participant_id','=',$participant_info->id)->first();
        $participantType=Participators_type::find($participantTypeall->id);
        $participant_type['adult'] = $attributes['adult'];
        $participant_type['children'] = $attributes['children'];
        $participant_type['senior'] = $attributes['senior'];
        $result_participant = $participantType->fill($participant_type)->save();
        if ($result) {
            return redirect()->action('HomeController@index');
        }
    }

    public function  viewPeople()
    {
        $sum_cost = $this->getTotalCost();
        $total_members = $this->getTotalMember();
        $people = People::get()->toArray();
        return view('people', compact('people'))->with('sum_cost', $sum_cost)->with('total_members', $total_members);
    }

    public function autocomplete()
    {
        $term = Input::get('term');

        $results = array();

        $queries = DB::table('people')
            ->where('first_name', 'ilIKE', '%' . $term . '%')
            ->orWhere('last_name', 'ilIKE', '%' . $term . '%')
            ->take(5)->get();

        foreach ($queries as $query) {
            $results[] = ['id' => $query->id, 'value' => $query->first_name . ' ' . $query->last_name];
        }
        return response()->json($results);
    }

    public function getInventory()
    {
        $sum_cost = $this->getTotalCost();
        $total_members = $this->getTotalMember();
        $inventory = Inventory::get()->toArray();
        return view('inventory', compact('inventory'))->with('sum_cost', $sum_cost)->with('total_members', $total_members);
    }

    public function addInventory()
    {
        return view('add_inventory');
    }

    public function saveInventory()
    {
        $attributes = Input::all();
        $result = Inventory::create($attributes);
        if ($result) {
            return redirect()->action('HomeController@getInventory');
        }
    }

    public function  getMiscellaneous()
    {
        $data = MoneyArrange::find($this->money_arrange_id);
        return view('miscellaneous', compact('data'));
    }

    public function  updateMiscellaneous()
    {
        $attribute = Input::all();
        $model = MoneyArrange::find($this->money_arrange_id);
        $result_participant = $model->fill($attribute)->save();
        if ($result_participant) {
            return redirect()->action('HomeController@getMiscellaneous');
        }
    }

    public function deleteParticipants($id)
    {
        $participant=Participant::find($id);
        $participantTypeall=Participators_type::where('participant_id','=',$participant->id)->first();
        $participantType=Participators_type::find($participantTypeall->id);
        $participant->delete();
        $participantType->delete();
        if($participant && $participantType){
            return redirect()->action('HomeController@index');
        }
    }

    public function deleteInventory($id)
    {
        $inventory=Inventory::find($id);
        $result=$inventory->delete();
        if($result){
            return redirect()->action('HomeController@getInventory');
        }
    }
    public function editInventory($id)
    {
        $inventory=Inventory::find($id);
        return view('edit_inventory', compact('inventory'));
    }
    public function updateInventory($id)
    {
        $attributes=Input::all();
        $inventory=Inventory::find($id);
        $result=$inventory->fill($attributes)->save();
        if($result)
            return redirect()->action('HomeController@getInventory');
    }
}
