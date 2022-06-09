@extends('layouts.default')
@section('content')
<h1 style = "padding-top: 5%;font-weight: bold;">
    <span class="">{{strtoupper('Tournament details')}}</pan>
    <span class="blue">&lt;</span>Management<span class="blue">&gt;</span> 
</h1>
<!-- 
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif -->
<table class="table table-bordered">
    <tr style = "color: white;">
        <th width="80px">Tournament ID</th>
        <th>form ID</th>
        <th>athlete ID</th>
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href=""><i class="glyphicon glyphicon-plus"></i></a>
        </th>
    </tr>
    @foreach($athleteFormTournaments as $athleteFormTournament)
    <tr>
        <td>{{$athleteFormTournament -> tournament_id}}</td>
        <td>{{$athleteFormTournament -> form_id}}</td>
        <td>{{$athleteFormTournament -> athlete_id}}</td>
        <td>
            <a class="btn btn-info btn-sm" href="#"><i class="glyphicon glyphicon-th-large"></i></a>
            <a class="btn btn-primary btn-sm" href="#"><i class="glyphicon glyphicon-pencil"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
