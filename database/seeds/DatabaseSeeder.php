<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'email' => 'bittu1028@gmail.com',
            'password' => Hash::make('hello'),
            'firstName' => 'bittu',
            'lastName' => 'Rauniyar',
            'gender' => 1,
            'telephone' => '1234'
        ));
    }
}
