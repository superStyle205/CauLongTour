@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>tournaments management</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th width="80px">No</th>
        <th>Name</th>
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ route('tournaments.create') }}"><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>
    @foreach($tournaments as $tournament)
    <tr>
        <td>{{$tournament -> id}}</td>
        <td>{{$tournament -> round_name}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ route('tournaments.edit',$tournament->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open([
                'method' => 'DELETE',
                'route' => [
                    'tournaments.destroy',
                    $tournament->id
                ],
                'style'=>'display:inline'
            ]) !!}
            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>

@endsection