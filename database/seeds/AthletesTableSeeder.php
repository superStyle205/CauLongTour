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
            ['name' => 'Jack', 'age' => Carbon::parse('1990-04-22'), 'gender' => 0, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'USA', 'note' => 'no comment'],
            ['name' => 'Hannah', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'JP', 'note' => 'no comment'],
            ['name' => 'Mustapha', 'age' => Carbon::parse('1989-07-09'), 'gender' => 0, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'CN', 'note' => 'no comment'],
            ['name' => 'Mess', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'SG', 'note' => 'no comment'],
            ['name' => 'America Chavez', 'age' => Carbon::parse('1999-03-05'), 'gender' => 1, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'USA', 'note' => 'no comment'],
            ['name' => 'Jannara', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Korea', 'address' => 'KR', 'note' => 'no comment'],
            ['name' => 'Ronadol', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'MU', 'address' => 'Bo Dao Nha', 'note' => 'no comment'],
            ['name' => 'Luu Diec Phi', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Dan Truong', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],

            ['name' => 'Player 10', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 11', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 12', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 13', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 14', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 15', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 16', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 17', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 18', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 19', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 20', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 21', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 22', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 23', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 24', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 25', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 26', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 27', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 28', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 29', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 30', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 31', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 32', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 33', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 34', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 35', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['name' => 'Player 36', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['name' => 'Player 37', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],

        ]);
    }
}
