<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
            ['id' => 1, 'name' => 'Men\'s singles', 'range_old' => 'U15'],
            ['id' => 2, 'name' => 'Women\'s singles', 'range_old' => 'U15'],
            ['id' => 3, 'name' => 'Men\'s doubles', 'range_old' => 'U15'],
            ['id' => 4, 'name' => 'Women\'s doubles', 'range_old' => 'U15'],
            ['id' => 5, 'name' => 'Mixed doubles', 'range_old' => 'U15']
        ]);
    }
}
