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
        DB::table('athlete_tournament')->insert([
            ['tournament_id' => 1, 'athlete_id' => 1],
            ['tournament_id' => 1, 'athlete_id' => 2],
            ['tournament_id' => 1, 'athlete_id' => 3],
            ['tournament_id' => 1, 'athlete_id' => 4],
            ['tournament_id' => 2, 'athlete_id' => 1],
            ['tournament_id' => 2, 'athlete_id' => 2],
            ['tournament_id' => 2, 'athlete_id' => 3],
            ['tournament_id' => 2, 'athlete_id' => 4],

            ['tournament_id' => 1, 'athlete_id' => 5],
            ['tournament_id' => 2, 'athlete_id' => 5]
        ]);
    }
}
