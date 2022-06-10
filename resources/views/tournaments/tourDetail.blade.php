@extends('layouts.default')
@section('content')

<h1 style = "padding-top: 5%;font-weight: bold;">
    <span class="">{{strtoupper('Tournament config details')}}</pan>
    <span class="blue">&lt;</span>Management<span class="blue">&gt;</span> 
</h1>

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
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <td width="180px">Add form tournament</td>
        <td>
            {!! Form::open(['method' => 'POST', 'route' => ['addFormToTour', $tournament_id]]) !!}

                Form : {!! Form::select('formId', $formsArr, null, array('placeholder' => '-','class' => 'form-control')) !!}

                Total athlete : {!! Form::select('totalAthlete', [8 => '8', 16 => '16', 32 => '32', 64 => '64'], null, array('placeholder' => '-','class' => 'form-control')) !!}

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Add Form</button>
                </div>

            {!! Form::close() !!}
        </td>
    </tr>
    <tr>
        <td>Add athlete to form</td>
        <td>
            {!! Form::open(['method' => 'POST', 'route' => ['addAthleteToTour', $tournament_id]]) !!}

                Form : {!! Form::select('formId', $currentFormWithTour, null, array('placeholder' => '-','class' => 'form-control')) !!}
                Athlete : {!! Form::select('athleteId', $athletesArr, null, array('placeholder' => '-','class' => 'form-control')) !!}

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Add Athlete</button>
                </div>

            {!! Form::close() !!}
        </td>
    </tr>
    <tr>
        <td>Build match play off</td>
        <td>
            {!! Form::open(['method' => 'POST', 'route' => ['buildMatchToTour', $tournament_id]]) !!}

                Form : {!! Form::select('formId', $currentFormWithTour, null, array('placeholder' => '-','class' => 'form-control')) !!}

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Build</button>
                </div>

            {!! Form::close() !!}
        </td>
    </tr>
</table>
@php
//echo '<pre>';
@endphp
@endsection