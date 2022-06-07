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
                $matchTmp->tournament_id = 1;
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
                        $matchTmp->tournament_id = 1;
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
        $matchDetailTmp1->id = 4;
        $matchDetailTmp1->match_id = 18;
        $matchDetailTmp1->athlete_id = 1;
        $matchDetailTmp1->team = 1;
        $matchDetailTmp1->result_set_1 = 21;
        $matchDetailTmp1->result_set_2 = 3;
        $matchDetailTmp1->result_set_3 = 4;
        $matchDetailTmp1->save();

        $matchDetailTmp3 = new MatchDetail;
        $matchDetailTmp3->id = 2;
        $matchDetailTmp3->match_id = 18;
        $matchDetailTmp3->athlete_id = 4;
        $matchDetailTmp3->team = 2;
        $matchDetailTmp3->result_set_1 = 5;
        $matchDetailTmp3->result_set_2 = 21;
        $matchDetailTmp3->result_set_3 = 21;
        $matchDetailTmp3->save();

        $matchDetailTmp2 = new MatchDetail;
        $matchDetailTmp2->id = 1;
        $matchDetailTmp2->match_id = 18;
        $matchDetailTmp2->athlete_id = 5;
        $matchDetailTmp2->team = 2;
        $matchDetailTmp2->result_set_1 = 5;
        $matchDetailTmp2->result_set_2 = 21;
        $matchDetailTmp2->result_set_3 = 21;
        $matchDetailTmp2->save();

        $matchDetailTmp4 = new MatchDetail;
        $matchDetailTmp4->id = 3;
        $matchDetailTmp4->match_id = 18;
        $matchDetailTmp4->athlete_id = 2;
        $matchDetailTmp4->team = 1;
        $matchDetailTmp4->result_set_1 = 21;
        $matchDetailTmp4->result_set_2 = 3;
        $matchDetailTmp4->result_set_3 = 4;
        $matchDetailTmp4->save();

        // Template match for round-robin group stage
        $teamNumber = 4;
    }
}
