<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //factory('App\User')->create();
         User::create([
            'username' => "winners",
            'password' => bcrypt('winwin'),
            'remember_token' => str_random(10),
         ]);
    }
}
