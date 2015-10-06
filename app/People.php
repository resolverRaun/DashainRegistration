<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';
    protected $fillable = ['first_name','last_name','address','email','phone'];
}
