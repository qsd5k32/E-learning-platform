<?php

use Illuminate\Database\Seeder;
use App\Course;
class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 50;$i++)
        {
            Course::insert([

            ]);
        }
    }
}
