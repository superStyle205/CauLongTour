@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Athlete</h2>
        </div>

        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('athletes.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>

{!! Form::model($athlete, [
        'method' => 'PATCH',
        'route' => [
            'athletes.update',
            $athlete->id
        ]
]) !!}

    @include('athletes.form')

{!! Form::close() !!}

@endsection