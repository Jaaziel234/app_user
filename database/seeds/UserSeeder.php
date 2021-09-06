<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel1@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '1'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaazie2@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '2'
        ]);

        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel3@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '3'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel4@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '4'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel5@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '5'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel6@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '6'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel7@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '7'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel8@gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '8'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel9gmail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '9'
        ]);
        DB::table('users')->insert([
            'title' => 'jaaziel',
            'email' => 'jaaziel10mail.com',
            'password' => bcrypt('jaaziel'),
            'profession_id' => '10'
        ]);
       
    }
}
