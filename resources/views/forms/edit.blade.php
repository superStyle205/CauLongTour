@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Form</h2>
        </div>

        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('forms.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>

{!! Form::model($editForm, [
        'method' => 'PATCH',
        'route' => [
            'forms.update',
            $editForm->id
        ]
]) !!}

    @include('forms.form')

{!! Form::close() !!}

@endsection