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
            'email' => 'admin@kcnepali.com',
            'password' => Hash::make('Dashain2015'),
            'firstName' => 'admin',
            'lastName' => 'nepal',
            'gender' => 1,
            'telephone' => '12345'
        ));
    }
}
