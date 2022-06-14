<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rounds')->insert([
            ['name' => 'Third place'],
            ['name' => 'Final'],
            ['name' => 'Semi-final'],
            ['name' => 'Quarter-final'],
            ['name' => 'Round of 16'],
            ['name' => 'Round of 32']
        ]);
    }
}
