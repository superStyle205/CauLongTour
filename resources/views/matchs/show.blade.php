@extends('layouts.default')
@section('content')
<h1 style = "padding-top: 5%;font-weight: bold;">
    <span class="blue">&lt;</span>Graph of MATCHES<span class="blue">&gt;</span> 
    <span class="">MATCHES</pan>
</h1>
@if (count($matchTree) == 0)
    <h2 style="color: red">
        !! Matchs of form in tournament is empty !!<br/>
        Please config matchs in tournament
    </h2>
@else

@php
    //echo '<pre>';
    //print_r($matchTree);
    //return;
    // heignt between rows in collumn
    $heightBase=15;
    $heightBase3rd = $heightBase*2;
@endphp

<!-- play off -->
@for ($i = 0; $i < $totalRound; $i++)
<div class="round">
    @php
    $heightBase *= 2;
    $matchSize = count($matchTree[$i]);
    @endphp

    @for ($j = 0; $j < $matchSize; $j++)
        @php
            $matchDetails = $matchTree[$i][$j]['match_details'];
            $matchDetailsSize = count($matchDetails);
        @endphp
        @if ($matchDetailsSize == 2)
            @if ($matchDetails[0]['team'] != $matchDetails[1]['team'])
                @php
                    $objTeam1 = $matchDetails[0];
                    $objTeam2 = $matchDetails[1];
                    $team1 = $objTeam1['athlete']['name'].' ('.$objTeam1['finalResult'].')';
                    $team2 = $objTeam2['athlete']['name'].' ('.$objTeam2['finalResult'].')';
                @endphp
            @else
                @php
                    if ($matchDetails[0]['team'] == 1) {
                        $objTeam11 = $matchDetails[0];
                        $objTeam12 = $matchDetails[1];
                        $team1 = '- '.$objTeam11['athlete']['name'];
                        $team1 .= '<br/>- '.$objTeam12['athlete']['name'].' ('.$objTeam11['finalResult'].')';
                        $team2 = 'undetermined';
                    } else {
                        $objTeam21 = $matchDetails[0];
                        $objTeam22 = $matchDetails[1];
                        $team1 = 'undetermined';
                        $team2 = '- '.$objTeam21['athlete']['name'];
                        $team2 .= '<br/>- '.$objTeam22['athlete']['name'].' ('.$objTeam21['finalResult'].')';
                    }
                @endphp
            @endif
        @elseif ($matchDetailsSize == 4)
            @php
                $objTeam11 = $matchDetails[0];
                $objTeam12 = $matchDetails[1];
                $objTeam21 = $matchDetails[2];
                $objTeam22 = $matchDetails[3];
                $team1 = '- '.$objTeam11['athlete']['name'];
                $team1 .= '<br/>- '.$objTeam12['athlete']['name'].' ('.$objTeam11['finalResult'].')';
                $team2 = '- '.$objTeam21['athlete']['name'];
                $team2 .= '<br/>- '.$objTeam22['athlete']['name'].' ('.$objTeam21['finalResult'].')';
            @endphp
        @elseif ($matchDetailsSize == 1)
            @php
                if ($matchDetails[0]['team'] == 1) {
                    $objTeam1 = $matchDetails[0];
                    $team1 = $objTeam1['athlete']['name'];
                    $team2 = 'undetermined';
                } else {
                    $team1 = 'undetermined';
                    $objTeam2 = $matchDetails[0];
                    $team2 = $objTeam2['athlete']['name'];
                }
            @endphp
        @else
            @php
                $team1 = 'undetermined';
                $team2 = 'undetermined';
            @endphp
        @endif
        <div class="matchup">
            <div class="firstTeam" style="height:{{ $heightBase - 1 }}px;">
                <div class="team">
                @if ($team1 == "undetermined")
                    {!! $team1 !!}
                @else
                    <a href="{{ route('matchDetailsEdit', $matchTree[$i][$j]['id']) }}">{!! $team1 !!}</a>
                @endif
                </div>
            </div>
            <div class="firstSpacer" style="height:{{ $heightBase + 2 }}px;">&nbsp;</div>
            <div class="secondTeam" style="height:{{ $heightBase - 1 }}px;">
                <div class="team">
                @if ($team2 == "undetermined")
                    {!! $team2 !!}
                @else
                    <a href="{{ route('matchDetailsEdit', $matchTree[$i][$j]['id']) }}">{!! $team2 !!}</a>
                @endif
                </div>
            </div>
            <div class="secondSpacer" style="height:{{ $heightBase }}px;">&nbsp;</div>
        </div>
        {{--
        @if ($i === ($totalRound - 1) and $totalRound > 1)
        <div class="matchup">
            <div class="firstTeam" style="height:0px;">
                <div class="team">Team 3rd</div>
            </div>
            <div class="firstSpacer" style="height:{{ $heightBase3rd }}px;">&nbsp;</div>
            <div class="secondTeam" style="height:{{ $heightBase3rd }}px;">
                <div class="team">Team 3rd</div>
            </div>
            <div class="secondSpacer" style="height:{{ $heightBase3rd }}px;">&nbsp;</div>
        </div>
        @endif
        --}}
    @endfor
</div>
@endfor

<!-- 1st and 3th -->
@php
$heightBase *= 2;

$finalMatch = $matchTree[count($matchTree) -1];
@endphp
@for ($i = 0; $i < count($finalMatch); $i++)
    @php
        $finalMatchDetails = $finalMatch[$i]['match_details'];
        $finalMatchDetailsSize = count($finalMatchDetails);
        if ($finalMatchDetailsSize == 1) {
            $winner = "?? Winer ??";
        } elseif ($finalMatchDetailsSize == 2) {
            if ($finalMatchDetails[0]['team'] != $finalMatchDetails[1]['team']
                && ($finalMatchDetails[0]['finalResult'] != 0
                    || $finalMatchDetails[1]['finalResult'] != 0)) {
                $objTeam1 = $finalMatchDetails[0];
                $objTeam2 = $finalMatchDetails[1];
                $winner = $objTeam1['finalResult'] > $objTeam2['finalResult'] 
                        ? $objTeam1['athlete']['name'] : $objTeam2['athlete']['name'];
            } else {
                $winner = "?? Winer ??";
            }
        } elseif ($finalMatchDetailsSize == 4) {
            $objTeam11 = $finalMatchDetails[0];
            $objTeam12 = $finalMatchDetails[1];
            $objTeam21 = $finalMatchDetails[2];
            $objTeam22 = $finalMatchDetails[3];
            if ($objTeam11['finalResult'] == 0 && $objTeam21['finalResult'] == 0) {
                $winner = "?? Winer ??";
            } else {
                $winner = ($objTeam11['finalResult'] > $objTeam21['finalResult']
                        && ($objTeam11['finalResult'] != 0 || $objTeam21['finalResult'] !=0)) 
                    ? '- '.$objTeam11['athlete']['name'].'<br/>- '.$objTeam12['athlete']['name']
                    : '- '.$objTeam21['athlete']['name'].'<br/>- '.$objTeam22['athlete']['name'];
            }
        } else {
            $winner = "?? Winer ??";
        }
    @endphp
@endfor
<div class="round">
    <div class="matchup">
        <div class="firstTeam" style="height:{{ $heightBase - 1 }}px;">
            <div class="team"><h4 style="color: yellow" >{!! $winner !!}</h4></div>
        </div>
    </div>
    {{--
    @if ($totalRound > 1)
    <div class="matchup">
        <div class="firstTeam" style="height:{{ $heightBase + $heightBase3rd }}px;">
            <div class="team"><strong>Winner</strong></div>
        </div>
    </div>
    @endif
    --}}
</div>


@endif
@endsection
