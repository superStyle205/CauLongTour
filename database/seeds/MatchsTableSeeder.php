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
        $round = 3;
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

        /*
        // Tmp data for 1 match
        $matchDetailTmp1 = new MatchDetail;
        $matchDetailTmp1->match_id = 18;
        $matchDetailTmp1->athlete_id = 1;
        $matchDetailTmp1->team = 1;
        $matchDetailTmp1->save();

        $matchDetailTmp3 = new MatchDetail;
        $matchDetailTmp3->match_id = 18;
        $matchDetailTmp3->athlete_id = 4;
        $matchDetailTmp3->team = 2;
        $matchDetailTmp3->save();

        $matchDetailTmp2 = new MatchDetail;
        $matchDetailTmp2->match_id = 18;
        $matchDetailTmp2->athlete_id = 5;
        $matchDetailTmp2->team = 2;
        $matchDetailTmp2->save();

        $matchDetailTmp4 = new MatchDetail;
        $matchDetailTmp4->match_id = 18;
        $matchDetailTmp4->athlete_id = 2;
        $matchDetailTmp4->team = 1;
        $matchDetailTmp4->save();

        // -------------------------------
        $matchDetailTmp5 = new MatchDetail;
        $matchDetailTmp5->match_id = 19;
        $matchDetailTmp5->athlete_id = 7;
        $matchDetailTmp5->team = 1;
        $matchDetailTmp5->save();

        $matchDetailTmp6 = new MatchDetail;
        $matchDetailTmp6->match_id = 19;
        $matchDetailTmp6->athlete_id = 8;
        $matchDetailTmp6->team = 2;
        $matchDetailTmp6->save();

        $matchDetailTmp7 = new MatchDetail;
        $matchDetailTmp7->match_id = 19;
        $matchDetailTmp7->athlete_id = 9;
        $matchDetailTmp7->team = 2;
        $matchDetailTmp7->save();

        $matchDetailTmp8 = new MatchDetail;
        $matchDetailTmp8->match_id = 19;
        $matchDetailTmp8->athlete_id = 6;
        $matchDetailTmp8->team = 1;
        $matchDetailTmp8->save();
        */

        $teamNumber = 4;
        $matchDetailTmp1 = new MatchDetail;
        $matchDetailTmp1->match_id = 7;
        $matchDetailTmp1->athlete_id = 1;
        $matchDetailTmp1->team = 1;
        $matchDetailTmp1->save();

        $matchDetailTmp3 = new MatchDetail;
        $matchDetailTmp3->match_id = 7;
        $matchDetailTmp3->athlete_id = 4;
        $matchDetailTmp3->team = 2;
        $matchDetailTmp3->save();

        $matchDetailTmp2 = new MatchDetail;
        $matchDetailTmp2->match_id = 5;
        $matchDetailTmp2->athlete_id = 5;
        $matchDetailTmp2->team = 2;
        $matchDetailTmp2->save();

        $matchDetailTmp4 = new MatchDetail;
        $matchDetailTmp4->match_id = 5;
        $matchDetailTmp4->athlete_id = 2;
        $matchDetailTmp4->team = 1;
        $matchDetailTmp4->save();

        // -------------------------------
        $matchDetailTmp5 = new MatchDetail;
        $matchDetailTmp5->match_id = 4;
        $matchDetailTmp5->athlete_id = 7;
        $matchDetailTmp5->team = 1;
        $matchDetailTmp5->save();

        $matchDetailTmp6 = new MatchDetail;
        $matchDetailTmp6->match_id = 4;
        $matchDetailTmp6->athlete_id = 8;
        $matchDetailTmp6->team = 2;
        $matchDetailTmp6->save();

        $matchDetailTmp7 = new MatchDetail;
        $matchDetailTmp7->match_id = 6;
        $matchDetailTmp7->athlete_id = 9;
        $matchDetailTmp7->team = 2;
        $matchDetailTmp7->save();

        $matchDetailTmp8 = new MatchDetail;
        $matchDetailTmp8->match_id = 6;
        $matchDetailTmp8->athlete_id = 6;
        $matchDetailTmp8->team = 1;
        $matchDetailTmp8->save();

        // aaaa
        $teamNumber = 4;
        $matchDetailTmp1 = new MatchDetail;
        $matchDetailTmp1->match_id = 7;
        $matchDetailTmp1->athlete_id = 10;
        $matchDetailTmp1->team = 1;
        $matchDetailTmp1->save();

        $matchDetailTmp3 = new MatchDetail;
        $matchDetailTmp3->match_id = 7;
        $matchDetailTmp3->athlete_id = 11;
        $matchDetailTmp3->team = 2;
        $matchDetailTmp3->save();

        $matchDetailTmp2 = new MatchDetail;
        $matchDetailTmp2->match_id = 5;
        $matchDetailTmp2->athlete_id = 12;
        $matchDetailTmp2->team = 2;
        $matchDetailTmp2->save();

        $matchDetailTmp4 = new MatchDetail;
        $matchDetailTmp4->match_id = 5;
        $matchDetailTmp4->athlete_id = 13;
        $matchDetailTmp4->team = 1;
        $matchDetailTmp4->save();

        // -------------------------------
        $matchDetailTmp5 = new MatchDetail;
        $matchDetailTmp5->match_id = 4;
        $matchDetailTmp5->athlete_id = 14;
        $matchDetailTmp5->team = 1;
        $matchDetailTmp5->save();

        $matchDetailTmp6 = new MatchDetail;
        $matchDetailTmp6->match_id = 4;
        $matchDetailTmp6->athlete_id = 15;
        $matchDetailTmp6->team = 2;
        $matchDetailTmp6->save();

        $matchDetailTmp7 = new MatchDetail;
        $matchDetailTmp7->match_id = 6;
        $matchDetailTmp7->athlete_id = 16;
        $matchDetailTmp7->team = 2;
        $matchDetailTmp7->save();

        $matchDetailTmp8 = new MatchDetail;
        $matchDetailTmp8->match_id = 6;
        $matchDetailTmp8->athlete_id = 17;
        $matchDetailTmp8->team = 1;
        $matchDetailTmp8->save();
        
    }
}
