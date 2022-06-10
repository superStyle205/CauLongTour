@extends('layouts.default')
@section('content')
<h1 style = "padding-top: 5%;font-weight: bold;">
    <span class="">{{strtoupper(request() -> path())}}</pan>
    <span class="blue">&lt;</span>Management<span class="blue">&gt;</span> 
</h1>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr style = "color: white;">
        <th width="80px">No</th>
        <th>Name</th>
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ route('tournaments.create') }}"><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>
    @foreach($tournaments as $tournament)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{$tournament->name}}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('tourDetails',$tournament->id) }}"><i class="glyphicon glyphicon-th-large"></i></a>
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
{!! $tournaments->render() !!}

@endsection