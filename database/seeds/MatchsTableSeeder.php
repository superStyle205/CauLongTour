<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Match;
use App\Models\MatchDetail;

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
                $matchTmp = new Match;
                $matchTmp->form_id = 1;
                $matchTmp->round_id = $i;
                $matchTmp->match_parent_id = null;
                $matchTmp->plan_start = Carbon::parse('2022-12-12')->toDate();
                $matchTmp->plant_actual = Carbon::parse('2022-12-12')->toDate();
                $matchTmp->save();
                array_push($parentMatchs, $matchTmp->id);
            } else {
                foreach ($parentMatchsTmp as $parentMatchID) {
                    for ($j = 0; $j < 2; $j++) {
                        $matchTmp = new Match;
                        $matchTmp->form_id = 1;
                        $matchTmp->round_id = $i;
                        $matchTmp->match_parent_id = $parentMatchID;
                        $matchTmp->plan_start = Carbon::parse('2022-12-12')->toDate();
                        $matchTmp->plant_actual = Carbon::parse('2022-12-12')->toDate();
                        $matchTmp->save();
                        array_push($parentMatchs, $matchTmp->id);
                    }
                }
            }
        }

        // Tmp data for 1 match
        $matchDetailTmp1 = new MatchDetail;
        $matchDetailTmp1->id = 1;
        $matchDetailTmp1->match_id = 18;
        $matchDetailTmp1->athlete_id = 1;
        $matchDetailTmp1->save();

        $matchDetailTmp2 = new MatchDetail;
        $matchDetailTmp2->id = 2;
        $matchDetailTmp2->match_id = 18;
        $matchDetailTmp2->athlete_id = 3;
        $matchDetailTmp2->save();

        // Template match for round-robin group stage
        $teamNumber = 4;
        
        
    }
}
