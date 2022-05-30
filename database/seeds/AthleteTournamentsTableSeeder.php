<?php

use Illuminate\Database\Seeder;

class AthleteTournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('athlete_tournaments')->insert([
            ['id' => 1, 'tournament_id' => 1, 'athlete_id' => 1],
            ['id' => 2, 'tournament_id' => 1, 'athlete_id' => 2],
            ['id' => 3, 'tournament_id' => 1, 'athlete_id' => 3],
            ['id' => 4, 'tournament_id' => 1, 'athlete_id' => 4],
            ['id' => 5, 'tournament_id' => 2, 'athlete_id' => 1],
            ['id' => 6, 'tournament_id' => 2, 'athlete_id' => 2],
            ['id' => 7, 'tournament_id' => 2, 'athlete_id' => 3],
            ['id' => 8, 'tournament_id' => 2, 'athlete_id' => 4],

            ['id' => 9, 'tournament_id' => 1, 'athlete_id' => 5],
            ['id' => 10, 'tournament_id' => 2, 'athlete_id' => 5]
        ]);
    }
}
