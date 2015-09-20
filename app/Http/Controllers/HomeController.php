<?php namespace App\Http\Controllers;

use App\Participant;
use App\Participators_type;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

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
        $sum_cost = DB::table('participants')->select(DB::raw('sum(cost_amt) as total_cost_amt'))->first();
        $total_members = DB::table('participant_type')->select(DB::raw('sum(adult) as total_adult,sum(children) as total_children,sum(senior) as total_senior'))->first();
        $participants = Participant::with('participant_type')->get()->toArray();
        return view('home', compact('participants'))->with('sum_cost',$sum_cost)->with('total_members',$total_members);
    }

    public function uploadCsv()
    {
        $file = Input::file('report');
        Excel::load($file, function ($reader) {
            // Getting all results
            $results = $reader->get()->toArray();
            foreach ($results as $result) {
                $oldUser = User::find($result['id']);
            }
        });
    }

    public  function  addParticipants(){
       return view('participant');
    }

    public  function  saveParticipants(){
        $attributes=Input::all();
        $participant['name']=$attributes['name'];
        $participant['cost_amt']=$attributes['cost_amt'];
        $participant['received_amt']=$attributes['received_amt'];
        $participant['return_amt']=$attributes['return_amt'];
        $participant['is_member']=$attributes['is_member'];
        $result=Participant::create($participant);
        $participant_type['participant_id']=$result['id'];
        $participant_type['adult']=$attributes['adult'];
        $participant_type['children']=$attributes['children'];
        $participant_type['senior']=$attributes['senior'];
        $result_participant=Participators_type::create($participant_type);
        if($result_participant){
            return redirect()->action('HomeController@index');
        }
    }

    public function editParticipants($id){
        $participant_info = Participant::with('participant_type')->find($id)->toArray();
        return view('edit_participant', compact('participant_info'));
    }
}
