<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tournaments')->insert([
            ['name' => 'Galaxy Cup'],
            ['name' => 'TOTTRI Cup'],
            ['name' => 'Jupyter Happy']
        ]);
    }
}
