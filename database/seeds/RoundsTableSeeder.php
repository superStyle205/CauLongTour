<?php

use Illuminate\Database\Seeder;

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
            ['id' => 1, 'name' => 'Final'],
            ['id' => 2, 'name' => 'Third place'],
            ['id' => 3, 'name' => 'Semi-final'],
            ['id' => 4, 'name' => 'Quarter-final'],
            ['id' => 5, 'name' => 'Round of 16'],
            ['id' => 6, 'name' => 'Round of 32']
        ]);
    }
}
