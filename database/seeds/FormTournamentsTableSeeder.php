<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormTournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form_tournaments')->insert([
            ['id' => 1, 'form_id' => 1, 'tournament_id' => 1],
            ['id' => 2, 'form_id' => 1, 'tournament_id' => 2],
            ['id' => 3, 'form_id' => 1, 'tournament_id' => 3],
            ['id' => 4, 'form_id' => 2, 'tournament_id' => 1],
            ['id' => 5, 'form_id' => 2, 'tournament_id' => 2],
            ['id' => 6, 'form_id' => 2, 'tournament_id' => 3],
        ]);
    }
}
