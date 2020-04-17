<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('tasks')->insert([
            'title' => 'IP QUIZ',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'EM QUIZ',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'CAL HW5',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'CAL HW6',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'History HW',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'SP 140 questions!',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Dr. Naseer, please stop!',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'We are overwhelmed by SPPPPPPP!!!!!!!!',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => '10-hour video lectures are too much!!!!!!',
            'ticked' => 0,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Weekly 100-question exercises are driving us crazy!!!!!',
            'ticked' => 1,
        ]);

        DB::table('tasks')->insert([
            'title' => 'Have mercy on us',
            'ticked' => 0,
        ]);
    }
}
