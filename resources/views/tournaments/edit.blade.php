@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Tournament</h2>
        </div>

        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('tournaments.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>

{!! Form::model($tournament, [
        'method' => 'PATCH',
        'route' => [
            'tournaments.update',
            $tournament->id
        ]
]) !!}

    @include('tournaments.form')

{!! Form::close() !!}

@endsection