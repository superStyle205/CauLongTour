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
            ['id' => 5, 'name' => 'Mixed doubles', 'range_old' => 'U15'],

            ['id' => 6, 'name' => 'Men\'s doubles', 'range_old' => '16 - 20'],
            ['id' => 7, 'name' => 'Women\'s doubles', 'range_old' => '16 - 20'],
            ['id' => 8, 'name' => 'Mixed doubles', 'range_old' => '16 - 20'],

            ['id' => 9, 'name' => 'Men\'s doubles', 'range_old' => '21 - 30'],
            ['id' => 10, 'name' => 'Women\'s doubles', 'range_old' => '21 - 30'],
            ['id' => 11, 'name' => 'Mixed doubles', 'range_old' => '21 - 30'],

            ['id' => 12, 'name' => 'Men\'s doubles', 'range_old' => '31 - 35'],
            ['id' => 13, 'name' => 'Women\'s doubles', 'range_old' => '31 - 35'],
            ['id' => 14, 'name' => 'Mixed doubles', 'range_old' => '31 - 35'],

            ['id' => 15, 'name' => 'Men\'s doubles', 'range_old' => '36 - 40'],
            ['id' => 16, 'name' => 'Women\'s doubles', 'range_old' => '36 - 40'],
            ['id' => 17, 'name' => 'Mixed doubles', 'range_old' => '36 - 40'],

            ['id' => 18, 'name' => 'Men\'s doubles', 'range_old' => '41 - 45'],
            ['id' => 19, 'name' => 'Women\'s doubles', 'range_old' => '41 - 45'],
            ['id' => 20, 'name' => 'Mixed doubles', 'range_old' => '41 - 45'],

            ['id' => 21, 'name' => 'Men\'s doubles', 'range_old' => '46 - 50'],
            ['id' => 22, 'name' => 'Women\'s doubles', 'range_old' => '46 - 50'],
            ['id' => 23, 'name' => 'Mixed doubles', 'range_old' => '46 - 50'],

            ['id' => 24, 'name' => 'Men\'s doubles', 'range_old' => '51 - 55'],
            ['id' => 25, 'name' => 'Women\'s doubles', 'range_old' => '51 - 55'],
            ['id' => 26, 'name' => 'Mixed doubles', 'range_old' => '51 - 55'],

            ['id' => 27, 'name' => 'Men\'s doubles', 'range_old' => '56 - 60'],
            ['id' => 28, 'name' => 'Women\'s doubles', 'range_old' => '56 - 60'],
            ['id' => 29, 'name' => 'Mixed doubles', 'range_old' => '56 - 60'],

            ['id' => 30, 'name' => 'Men\'s doubles', 'range_old' => '60 ->'],
            ['id' => 31, 'name' => 'Women\'s doubles', 'range_old' => '60 ->'],
            ['id' => 32, 'name' => 'Mixed doubles', 'range_old' => '60 ->']
        ]);
    }
}
