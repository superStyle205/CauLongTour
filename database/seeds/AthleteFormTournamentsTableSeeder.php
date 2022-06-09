<?php

use Illuminate\Database\Seeder;

class AthleteFormTournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('athlete_form_tournaments')->insert([
            ['form_id' => 1, 'tournament_id' => 1, 'athlete_id' => 1],
            ['form_id' => 1, 'tournament_id' => 1, 'athlete_id' => 2],
            ['form_id' => 1, 'tournament_id' => 1, 'athlete_id' => 3],
            ['form_id' => 1, 'tournament_id' => 1, 'athlete_id' => 4],
            ['form_id' => 1, 'tournament_id' => 2, 'athlete_id' => 1],
            ['form_id' => 1, 'tournament_id' => 2, 'athlete_id' => 2],
            ['form_id' => 1, 'tournament_id' => 2, 'athlete_id' => 3],
            ['form_id' => 1, 'tournament_id' => 2, 'athlete_id' => 4],

            ['form_id' => 1, 'tournament_id' => 1, 'athlete_id' => 5],
            ['form_id' => 1, 'tournament_id' => 2, 'athlete_id' => 5],

            ['form_id' => 2, 'tournament_id' => 1, 'athlete_id' => 1],
            ['form_id' => 2, 'tournament_id' => 1, 'athlete_id' => 2],
            ['form_id' => 2, 'tournament_id' => 1, 'athlete_id' => 3],
            ['form_id' => 2, 'tournament_id' => 1, 'athlete_id' => 4],
            ['form_id' => 2, 'tournament_id' => 2, 'athlete_id' => 1],
            ['form_id' => 2, 'tournament_id' => 2, 'athlete_id' => 2],
            ['form_id' => 2, 'tournament_id' => 2, 'athlete_id' => 3],
            ['form_id' => 2, 'tournament_id' => 2, 'athlete_id' => 4],

            ['form_id' => 2, 'tournament_id' => 1, 'athlete_id' => 5],
            ['form_id' => 2, 'tournament_id' => 2, 'athlete_id' => 5]
        ]);
    }
}
