<?php

use App\User;
use App\MoneyArrange;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MoneyArrange::create(array(
            'hundred' => 0,
            'fifty' => 0,
            'twenty' => 0,
            'ten' => 0,
            'one' => 0
        ));
    }
}
