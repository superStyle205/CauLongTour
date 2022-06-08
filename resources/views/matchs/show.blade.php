@extends('layouts.default')
@section('content')
<h1 style = "padding-top: 5%;font-weight: bold;">
    <span class="blue">&lt;</span>Graph of MATCHES<span class="blue">&gt;</span> 
    <span class="">MATCHES</pan>
</h1>
@php
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
    //print_r($matchSize);
    @endphp

    @for ($j = 0; $j < $matchSize; $j++)
        @php
            $matchDetails = $matchTree[$i][$j]['match_details'];
            $matchDetailsSize = count($matchDetails);
        @endphp
        @if ($matchDetailsSize == 2)
            @php
                $objTeam1 = $matchDetails[0];
                $objTeam2 = $matchDetails[1];
                $team1 = $objTeam1['athlete']['name'].' ('.$objTeam1['finalResult'].')';
                $team2 = $objTeam2['athlete']['name'].' ('.$objTeam2['finalResult'].')';
            @endphp
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
        @else
            @if ($i > 0)
                @php
                    $team1 = 'view detail';
                    $team2 = 'view detail';
                @endphp
            @else
                @php
                    $team1 = 'setup';
                    $team2 = 'setup';
                @endphp
            @endif
        @endif
        <div class="matchup">
            <div class="firstTeam" style="height:{{ $heightBase - 1 }}px;">
                <div class="team">
                @if ($i == 0 and $matchDetailsSize == 0)
                    <a href="{{ route('matchDetailsCreate', $matchTree[$i][$j]['id']) }}">{!! $team1 !!}</a>
                @else
                    <a href="{{ route('matchDetailsEdit', $matchTree[$i][$j]['id']) }}">{!! $team1 !!}</a>
                @endif
                </div>
            </div>
            <div class="firstSpacer" style="height:{{ $heightBase + 2 }}px;">&nbsp;</div>
            <div class="secondTeam" style="height:{{ $heightBase - 1 }}px;">
                <div class="team">
                @if ($i == 0 and $matchDetailsSize == 0)
                    <a href="{{ route('matchDetailsCreate', $matchTree[$i][$j]['id']) }}">{!! $team2 !!}</a>
                @else
                    <a href="{{ route('matchDetailsEdit', $matchTree[$i][$j]['id']) }}">{!! $team2 !!}</a>
                @endif
                </div>
            </div>
            <div class="secondSpacer" style="height:{{ $heightBase }}px;">&nbsp;</div>
        </div>
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
    @endfor
</div>
@endfor

<!-- 1st and 3th -->
@php
$heightBase *= 2;
@endphp
<div class="round">
    <div class="matchup">
        <div class="firstTeam" style="height:{{ $heightBase - 1 }}px;">
            <div class="team"><strong>Winner</strong></div>
        </div>
    </div>
    @if ($totalRound > 1)
    <div class="matchup">
        <div class="firstTeam" style="height:{{ $heightBase + $heightBase3rd }}px;">
            <div class="team"><strong>Winner</strong></div>
        </div>
    </div>
    @endif
</div>
@endsection
