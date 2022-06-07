@extends('layouts.default')
@section('content')
    <h1 style = "padding-top: 5%;font-weight: bold;"><span class="blue">&lt;</span>Summary of MATCHES<span class="blue">&gt;</span> <span class="yellow">MATCHES</pan></h1>
    <h4 style = "">result of matches for today: {{date('d-m-y')}}</h4>

    <table class="container">
        <thead>
            <tr>
                <th>
                    <h1>No</h1>
                </th>
                <th>
                    <h1>Form name</h1>
                </th>
                <th>
                    <h1>first Athlete</h1>
                </th>
                <th>
                    <h1>second Athlete</h1>
                </th>
                <th>
                    <h1>Result 1</h1>
                </th>
                <th>
                    <h1>Result 2</h1>
                </th>
                <th>
                    <h1>Result 3</h1>
                </th>
                <th>
                    <h1>Plan Start</h1>
                </th>
                <th>
                    <h1>Actual</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Google</td>
                <td>9518</td>
                <td>6369</td>
                <td>01:32:50</td>
                <td>7326</td>
                <td>10437</td>
                <td>00:51:22</td>
                <td>10437</td>
                <td>00:51:22</td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>7326</td>
                <td>10437</td>
                <td>00:51:22</td>
                <td>7326</td>
                <td>10437</td>
                <td>00:51:22</td>
                <td>10437</td>
                <td>00:51:22</td>
            </tr>
            <tr>
                <td>Amazon</td>
                <td>4162</td>
                <td>5327</td>
                <td>00:24:34</td>
                <td>7326</td>
                <td>10437</td>
                <td>00:51:22</td>
                <td>10437</td>
                <td>00:51:22</td>
            </tr>
            <tr>
                <td>LinkedIn</td>
                <td>3654</td>
                <td>2961</td>
                <td>00:12:10</td>
                <td>7326</td>
                <td>10437</td>
                <td>00:51:22</td>
                <td>10437</td>
                <td>00:51:22</td>
            </tr>
        </tbody>
    </table>
@endsection