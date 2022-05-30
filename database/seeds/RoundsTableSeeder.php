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
            ['id' => 6, 'name' => 'Third place'],
            ['id' => 1, 'name' => 'Final'],
            ['id' => 2, 'name' => 'Semi-final'],
            ['id' => 3, 'name' => 'Quarter-final'],
            ['id' => 4, 'name' => 'Round of 16'],
            ['id' => 5, 'name' => 'Round of 32']
        ]);
    }
}
