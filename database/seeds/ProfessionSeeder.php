<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('profession')->insert([
            'title' => 'Front-end developer 1'
        ]);

        DB::table('profession')->insert([
            'title' => 'Back-end developer 2'
        ]);

        DB::table('profession')->insert([
            'title' => 'Back-end developer 3'
        ]);

         DB::table('profession')->insert([
            'title' => 'Back-end developer 4'
        ]);

          DB::table('profession')->insert([
            'title' => 'Back-end developer 5'
        ]);

           DB::table('profession')->insert([
            'title' => 'Back-end developer 6'
        ]);

            DB::table('profession')->insert([
            'title' => 'Back-end developer 7'
        ]);

             DB::table('profession')->insert([
            'title' => 'Back-end developer 8'
        ]);

              DB::table('profession')->insert([
            'title' => 'Back-end developer 9'
        ]);
               DB::table('profession')->insert([
            'title' => 'Back-end developer 10'
        ]);
        
    }
}