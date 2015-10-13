<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoneyArrange extends Model
{
    protected $table = 'money_arrange';
    protected $fillable = ['hundred','fifty','twenty','ten','one'];
}
