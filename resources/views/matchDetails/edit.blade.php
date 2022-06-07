@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit match detail</h2>
        </div>

        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('athletes.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>
@if (count($matchDetails) > 0)
{!! Form::open(['method' => 'POST', 'route' => ['matchDetailsUpdate', $matchDetails[0]->match_id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <table class="table table-bordered">
                <tr style = "color: white;">
                    <th width="80px"></th>
                    <th>Team 1</th>
                    <th>Team 2</th>
                </tr>
                <tr>
                    <td><strong>Athlete</strong></td>
                    @if (count($matchDetails) == 2)
                    <td>
                        {!! Form::select('team1athlete1', $athletes, $matchDetails[0]->athlete->id, array('placeholder' => '-','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {!! Form::select('team2athlete1', $athletes, $matchDetails[1]->athlete->id, array('placeholder' => '-','class' => 'form-control')) !!}
                    </td>
                    @endif
                    @if (count($matchDetails) == 4)
                    <td>
                        {!! Form::select('team1athlete1', $athletes, $matchDetails[0]->athlete->id, array('placeholder' => '-','class' => 'form-control')) !!}
                        {!! Form::select('team1athlete2', $athletes, $matchDetails[1]->athlete->id, array('placeholder' => '-','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {!! Form::select('team2athlete1', $athletes, $matchDetails[2]->athlete->id, array('placeholder' => '-','class' => 'form-control')) !!}
                        {!! Form::select('team2athlete2', $athletes, $matchDetails[3]->athlete->id, array('placeholder' => '-','class' => 'form-control')) !!}
                    </td>
                    @endif
                </tr>
                @if (count($matchDetails) == 2 or count($matchDetails) == 4)
                <tr>
                    <td><strong>Set 1</strong></td>
                    <td>
                        {!! Form::text('team1set1', $matchDetails[0]->result_set_1, array('placeholder' => 'set 1','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {!! Form::text('team2set1', $matchDetails[1]->result_set_1, array('placeholder' => 'set 1','class' => 'form-control')) !!}
                    </td>
                </tr>
                <tr>
                    <td><strong>Set 2</strong></td>
                    <td>
                        {!! Form::text('team1set2', $matchDetails[0]->result_set_2, array('placeholder' => 'set 2','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {!! Form::text('team2set2', $matchDetails[1]->result_set_2, array('placeholder' => 'set 2','class' => 'form-control')) !!}
                    </td>
                </tr>
                <tr>
                    <td><strong>Set 3</strong></td>
                    <td>
                        {!! Form::text('team1set3', $matchDetails[0]->result_set_3, array('placeholder' => 'set 3','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {!! Form::text('team2set3', $matchDetails[1]->result_set_3, array('placeholder' => 'set 3','class' => 'form-control')) !!}
                    </td>
                </tr>
                @endif
            </table>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
@else
// todo
@endif
@php
    // echo '<pre>';
    // print_r($matchDetails);
@endphp

@endsection