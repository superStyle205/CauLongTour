@extends('layouts.default')
@section('content')
<h1 style = "padding-top: 5%;font-weight: bold;">
    <span class="">Tournament</pan>
    <span class="blue">&lt;</span>List of Tournament<span class="blue">&gt;</span> 
</h1>

<table class="table table-bordered">
    <tr style = "color: white;">
        <th width="80px">No</th>
        <th>Tournament name</th>
        <th>Form</th>
        <th>Range age</th>
        <th width="" class="text-center">
        </th>
    </tr>

    @foreach ($listTourForm as $tourForm)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $tourForm->tournament->name }}</td>
        <td>{{ $tourForm->form->name }}</td>
        <td>{{ $tourForm->form->range_old }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('showMatchs',[$tourForm->tournament_id, $tourForm->form_id]) }}">
                <i class="glyphicon glyphicon-th-large"></i>
            </a>
        </td>
    </tr>
    @endforeach
</table>
{!! $listTourForm->render() !!}

@php
    //echo '<pre>';
    //print_r($listTourForm->toArray());
@endphp
@endsection