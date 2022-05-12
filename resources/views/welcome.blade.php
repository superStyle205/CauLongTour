<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <style type="text/css">
        .round {
        float: left;
        width: 160px;
        }

        .firstTeam,
        .secondTeam {
        border-bottom: 1px solid #ccc;
        position: relative;
        }

        .firstSpacer,
        .secondTeam {
        border-right: 1px solid #ccc;
        }

        .team {
        position: absolute;
        bottom: 1px;
        left: 1px;
        }
    </style>
</head>
<body>
    @php
    // total round play off
    $round = 5;

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
                    <div class="firstSpacer" style="height:{{ $heightBase }}px;">&nbsp;</div>
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
            <div class="firstTeam" style="height:{{ $heightBase + 21 }}px;">
                <div class="team">Winner</div>
            </div>
        </div>
        @endif
    </div>
    </div>
</body>
</html>