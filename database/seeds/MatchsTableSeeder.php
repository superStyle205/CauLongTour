<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Match;

class MatchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Template match for play off
        $round = 5;
        $parentMatchs = [];
        for ($i = 1; $i <= $round; $i++) {
            $parentMatchsTmp = $parentMatchs;
            $parentMatchs = [];
            if ($i == 1) {
                $mathTmp = new Match;
                $mathTmp->form_id = 1;
                $mathTmp->round_id = $i;
                $mathTmp->match_parent_id = null;
                $mathTmp->plan_start = Carbon::parse('2022-12-12')->toDate();
                $mathTmp->plant_actual = Carbon::parse('2022-12-12')->toDate();
                $mathTmp->save();
                array_push($parentMatchs, $mathTmp->id);
            } else {
                foreach ($parentMatchsTmp as $parentMatchID) {
                    for ($j = 0; $j < 2; $j++) {
                        $mathTmp = new Match;
                        $mathTmp->form_id = 1;
                        $mathTmp->round_id = $i;
                        $mathTmp->match_parent_id = $parentMatchID;
                        $mathTmp->plan_start = Carbon::parse('2022-12-12')->toDate();
                        $mathTmp->plant_actual = Carbon::parse('2022-12-12')->toDate();
                        $mathTmp->save();
                        array_push($parentMatchs, $mathTmp->id);
                    }
                }
            }
        }

        // Template match for round-robin group stage
        $teamNumber = 4;
        
    }
}
