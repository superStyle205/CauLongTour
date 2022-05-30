<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FormsTableSeeder::class,
            RoundsTableSeeder::class,
            TournamentsTableSeeder::class,
            AthletesTableSeeder::class,
            AthleteTournamentsTableSeeder::class,
            FormTournamentsTableSeeder::class,
            MatchsTableSeeder::class
        ]);
    }
}
