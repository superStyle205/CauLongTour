@extends('layouts.default')
@section('content')
<h1 style = "padding-top: 5%;font-weight: bold;"><span class="blue">&lt;</span>Graph of MATCHES<span class="blue">&gt;</span> <span class="yellow">MATCHES</pan></h1>
    @php
    // total round play off
    $round = isset($_GET['round']) ? $_GET['round'] : 6;

    // heignt between rows in collumn
    $heightBase=10;
    @endphp

    <!-- play off -->
    @for ($i = $round-1; $i >= 0; $i--)
        <div class="round">
            @php
            $match = pow(2, $i);
            $heightBase *= 2;
            $heightBase3rd = 30;
            @endphp
            @for ($j = 1; $j <= $match; $j++)
                <div class="matchup">
                    <div class="firstTeam" style="height:{{ $heightBase - 1 }}px;">
                        <div class="team">Team 1-->{{ $i }}-{{ $j }}</div>
                    </div>
                    <div class="firstSpacer" style="height:{{ $heightBase + 2 }}px;">&nbsp;</div>
                    <div class="secondTeam" style="height:{{ $heightBase - 1 }}px;">
                        <div class="team">Team 2->-{{ $i }}-{{ $j }}</div>
                    </div>
                    <div class="secondSpacer" style="height:{{ $heightBase }}px;">&nbsp;</div>
                </div>
            @endfor
            @if ($i === 0 and $round > 1)
                <div class="matchup">
                    <div class="firstTeam" style="height:0px;">
                        <div class="team">Team 3rd</div>
                    </div>
                    <div class="firstSpacer" style="height:{{ $heightBase3rd }}px;">&nbsp;</div>
                    <div class="secondTeam" style="height:{{ $heightBase3rd - 15 }}px;">
                        <div class="team">Team 3rd</div>
                    </div>
                    <div class="secondSpacer" style="height:{{ $heightBase3rd }}px;">&nbsp;</div>
                </div>
            @endif
        </div>
    @endfor

    <!-- 1st and 3th -->
    @php
    $heightBase *= 2;
    @endphp
    <div class="round">
        <div class="matchup">
            <div class="firstTeam" style="height:{{ $heightBase - 1 }}px;">
                <div class="team">Winner</div>
            </div>
        </div>
        @if ($round > 1)
        <div class="matchup">
            <div class="firstTeam" style="height:{{ $heightBase + 25 }}px;">
                <div class="team">Winner</div>
            </div>
        </div>
        @endif
    </div>
    </div>
@endsection