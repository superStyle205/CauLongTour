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
            ['name' => 'Men\'s singles', 'range_old' => 'U15'],
            ['name' => 'Women\'s singles', 'range_old' => 'U15'],
            ['name' => 'Men\'s doubles', 'range_old' => 'U15'],
            ['name' => 'Women\'s doubles', 'range_old' => 'U15'],
            ['name' => 'Mixed doubles', 'range_old' => 'U15'],

            ['name' => 'Men\'s doubles', 'range_old' => '16 - 20'],
            ['name' => 'Women\'s doubles', 'range_old' => '16 - 20'],
            ['name' => 'Mixed doubles', 'range_old' => '16 - 20'],

            ['name' => 'Men\'s doubles', 'range_old' => '21 - 30'],
            ['name' => 'Women\'s doubles', 'range_old' => '21 - 30'],
            ['name' => 'Mixed doubles', 'range_old' => '21 - 30'],

            ['name' => 'Men\'s doubles', 'range_old' => '31 - 35'],
            ['name' => 'Women\'s doubles', 'range_old' => '31 - 35'],
            ['name' => 'Mixed doubles', 'range_old' => '31 - 35'],

            ['name' => 'Men\'s doubles', 'range_old' => '36 - 40'],
            ['name' => 'Women\'s doubles', 'range_old' => '36 - 40'],
            ['name' => 'Mixed doubles', 'range_old' => '36 - 40'],

            ['name' => 'Men\'s doubles', 'range_old' => '41 - 45'],
            ['name' => 'Women\'s doubles', 'range_old' => '41 - 45'],
            ['name' => 'Mixed doubles', 'range_old' => '41 - 45'],

            ['name' => 'Men\'s doubles', 'range_old' => '46 - 50'],
            ['name' => 'Women\'s doubles', 'range_old' => '46 - 50'],
            ['name' => 'Mixed doubles', 'range_old' => '46 - 50'],

            ['name' => 'Men\'s doubles', 'range_old' => '51 - 55'],
            ['name' => 'Women\'s doubles', 'range_old' => '51 - 55'],
            ['name' => 'Mixed doubles', 'range_old' => '51 - 55'],

            ['name' => 'Men\'s doubles', 'range_old' => '56 - 60'],
            ['name' => 'Women\'s doubles', 'range_old' => '56 - 60'],
            ['name' => 'Mixed doubles', 'range_old' => '56 - 60'],

            ['name' => 'Men\'s doubles', 'range_old' => '60 ->'],
            ['name' => 'Women\'s doubles', 'range_old' => '60 ->'],
            ['name' => 'Mixed doubles', 'range_old' => '60 ->']
        ]);
    }
}
