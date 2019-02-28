<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i <= 100 ; $i++)
        {
           User::insert([
               'username' => Str::random(6) . rand(1,3),
               'name' => Str::random(5) . ' ' . Str::random(6),
               'email' => Str::random(6).rand(1,3) . 'gmail.com',
               'password' => bcrypt('seddik97'),
               'level' => 1
           ]);
        }
    }
}
