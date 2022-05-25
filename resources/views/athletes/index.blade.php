@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Athletes management</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr style = "color: white;">
        <th width="80px">No</th>
        <th>Name</th>
        <th>Brithday</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Unit</th>
        <th>Note</th>
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ route('athletes.create') }}"><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>

    @foreach ($athletes as $athlete)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $athlete->name }}</td>
        <td>{{ $athlete->age }}</td>
        <td>{{ $athlete->gender }}</td>
        <td>{{ $athlete->address }}</td>
        <td>{{ $athlete->unit }}</td>
        <td>{{ $athlete->note }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('athletes.show',$athlete->id) }}"><i class="glyphicon glyphicon-th-large"></i></a>
            <a class="btn btn-primary btn-sm" href="{{ route('athletes.edit',$athlete->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open([
                'method' => 'DELETE',
                'route' => [
                    'athletes.destroy',
                    $athlete->id
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

{!! $athletes->render() !!}

@endsection