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
            ['id' => 5, 'name' => 'America Chavez', 'age' => Carbon::parse('1999-03-05'), 'gender' => 1, 'unit' => 'Cadillacs and Dinosaurs', 'address' => 'USA', 'note' => 'no comment'],
            ['id' => 6, 'name' => 'Jannara', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Korea', 'address' => 'KR', 'note' => 'no comment'],
            ['id' => 7, 'name' => 'Ronadol', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'MU', 'address' => 'Bo Dao Nha', 'note' => 'no comment'],
            ['id' => 8, 'name' => 'Luu Diec Phi', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 9, 'name' => 'Dan Truong', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],

            ['id' => 10, 'name' => 'Player 10', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 11, 'name' => 'Player 11', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 12, 'name' => 'Player 12', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 13, 'name' => 'Player 13', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 14, 'name' => 'Player 14', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 15, 'name' => 'Player 15', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 16, 'name' => 'Player 16', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 17, 'name' => 'Player 17', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 18, 'name' => 'Player 18', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 19, 'name' => 'Player 19', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 20, 'name' => 'Player 20', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 21, 'name' => 'Player 21', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 22, 'name' => 'Player 22', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 23, 'name' => 'Player 23', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 24, 'name' => 'Player 24', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 25, 'name' => 'Player 25', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 26, 'name' => 'Player 26', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 27, 'name' => 'Player 27', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 28, 'name' => 'Player 28', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 29, 'name' => 'Player 29', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 30, 'name' => 'Player 30', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 31, 'name' => 'Player 31', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 32, 'name' => 'Player 32', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 33, 'name' => 'Player 33', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 34, 'name' => 'Player 34', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 35, 'name' => 'Player 35', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],
            ['id' => 36, 'name' => 'Player 36', 'age' => Carbon::parse('1995-06-14'), 'gender' => 1, 'unit' => 'Kim Dung', 'address' => 'China', 'note' => 'no comment'],
            ['id' => 37, 'name' => 'Player 37', 'age' => Carbon::parse('1985-02-10'), 'gender' => 0, 'unit' => 'VPOP', 'address' => 'Viet Nam', 'note' => 'no comment'],

        ]);
    }
}
