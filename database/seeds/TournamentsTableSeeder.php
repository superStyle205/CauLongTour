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
            ['id' => 1, 'name' => 'Galaxy Cup'],
            ['id' => 2, 'name' => 'TOTTRI Cup'],
            ['id' => 3, 'name' => 'Jupyter Happy']
        ]);
    }
}
