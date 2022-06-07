<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AthletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('athletes')->insert([
            ['id' => 1, 'name' => 'Jack', 'age' => Carbon::parse('1990-04-22'), 'gender' => 0, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'USA', 'note' => 'no comment'],
            ['id' => 2, 'name' => 'Hannah', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'JP', 'note' => 'no comment'],
            ['id' => 3, 'name' => 'Mustapha', 'age' => Carbon::parse('1989-07-09'), 'gender' => 0, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'CN', 'note' => 'no comment'],
            ['id' => 4, 'name' => 'Mess', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'SG', 'note' => 'no comment'],
            ['id' => 5, 'name' => 'America Chavez', 'age' => Carbon::parse('1999-03-05'), 'gender' => 1, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'USA', 'note' => 'no comment']
        ]);
    }
}
