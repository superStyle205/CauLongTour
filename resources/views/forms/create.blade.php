@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Form</h2>
        </div>
        <div class="pull-right">
        	<br/>
            <a class="btn btn-primary" href="{{ route('forms.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>
{!! Form::open(array('route' => 'forms.store','method'=>'POST')) !!}
     @include('forms.form')
{!! Form::close() !!}

@endsection