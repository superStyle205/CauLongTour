@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Athlete</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('athletes.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id:</strong>
            {{ $athlete->id}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $athlete->name}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Birthday:</strong>
            {{ $athlete->old}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gender:</strong>
            {{ $athlete->gender}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:</strong>
            {{ $athlete->address}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Unit:</strong>
            {{ $athlete->unit}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Note:</strong>
            {{ $athlete->note}}
        </div>
    </div>
</div>

@endsection