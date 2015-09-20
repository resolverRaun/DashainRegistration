<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    protected $fillable = ['name','cost_amt','received_amt','return_amt','is_member'];
    public  function  participant_type(){
        return $this->hasOne('App\Participators_type','participant_id');
    }
}
