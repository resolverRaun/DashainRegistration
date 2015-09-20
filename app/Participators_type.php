<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participators_type extends Model
{
    protected $table = 'participant_type';
    protected $fillable = ['participant_id', 'adult', 'children','senior'];
    public $timestamps = false;

    public  function  participant(){
        return $this->belongsTo('App\Participant','participant_id');
    }
}
