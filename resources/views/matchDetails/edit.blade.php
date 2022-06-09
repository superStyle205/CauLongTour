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
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['method' => 'POST', 'route' => ['matchDetailsUpdate', $matchDetails[0]->match_id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <table class="table table-bordered">
                <tr style = "color: white;">
                    <th width="80px"></th>
                    <th>[Team1]&nbsp;{{ $matchDetails[0]->athlete->unit }}</th>
                    @if (count($matchDetails) == 2)
                        <th>[Team2]&nbsp;{{ $matchDetails[1]->athlete->unit }}</th>
                    @endif
                    @if (count($matchDetails) == 4)
                        <th>[Team2]&nbsp;{{ $matchDetails[2]->athlete->unit }}</th>
                    @endif
                </tr>
                <tr>
                    <td><strong>Athlete</strong></td>
                    @if (count($matchDetails) == 2)
                        <td>
                            {{ $matchDetails[0]->athlete->name }}
                        </td>
                        <td>
                            {{ $matchDetails[1]->athlete->name }}
                        </td>
                    @endif
                    @if (count($matchDetails) == 4)
                        <td>
                            -&nbsp;{{ $matchDetails[0]->athlete->name }}<br/>
                            -&nbsp;{{ $matchDetails[1]->athlete->name }}
                        </td>
                        <td>
                            -&nbsp;{{ $matchDetails[2]->athlete->name }}<br/>
                            -&nbsp;{{ $matchDetails[3]->athlete->name }}
                        </td>
                    @endif
                </tr>
                <tr>
                    <td><strong>Set 1</strong></td>
                    <td>
                        {!! Form::text('team1set1', $matchDetails[0]->result_set_1, array('placeholder' => 'set 1','class' => 'form-control')) !!}
                    </td>
                    <td>
                        @if (count($matchDetails) == 2)
                        {!! Form::text('team2set1', $matchDetails[1]->result_set_1, array('placeholder' => 'set 1','class' => 'form-control')) !!}
                        @endif
                        @if (count($matchDetails) == 4)
                        {!! Form::text('team2set1', $matchDetails[2]->result_set_1, array('placeholder' => 'set 1','class' => 'form-control')) !!}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Set 2</strong></td>
                    <td>
                        {!! Form::text('team1set2', $matchDetails[0]->result_set_2, array('placeholder' => 'set 2','class' => 'form-control')) !!}
                    </td>
                    <td>
                        @if (count($matchDetails) == 2)
                        {!! Form::text('team2set2', $matchDetails[1]->result_set_2, array('placeholder' => 'set 2','class' => 'form-control')) !!}
                        @endif
                        @if (count($matchDetails) == 4)
                        {!! Form::text('team2set2', $matchDetails[2]->result_set_2, array('placeholder' => 'set 2','class' => 'form-control')) !!}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Set 3</strong></td>
                    <td>
                        {!! Form::text('team1set3', $matchDetails[0]->result_set_3, array('placeholder' => 'set 3','class' => 'form-control')) !!}
                    </td>
                    <td>
                        @if (count($matchDetails) == 2)
                        {!! Form::text('team2set3', $matchDetails[1]->result_set_3, array('placeholder' => 'set 3','class' => 'form-control')) !!}
                        @endif
                        @if (count($matchDetails) == 4)
                        {!! Form::text('team2set3', $matchDetails[2]->result_set_3, array('placeholder' => 'set 3','class' => 'form-control')) !!}
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
@php
echo "<pre>";
print_r($matchDetails->toArray());
@endphp
@endsection