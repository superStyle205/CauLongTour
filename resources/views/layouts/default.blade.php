<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tournament management</title>
    <link rel="stylesheet" href="{{url('css/summary-table.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
        <style type="text/css">
        .round {
        float: left;
        width: 160px;
        }

        .firstTeam,
        .secondTeam {
        border-bottom: 1px solid #ccc;
        position: relative;
        }

        .firstSpacer,
        .secondTeam {
        border-right: 1px solid #ccc;
        }

        .team {
        position: absolute;
        bottom: 1px;
        left: 1px;
        }
    </style>

</head>

<body style ="background-color:#EEEEEE;">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{URL::to('/')}}">ournament management</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{URL::to('summary')}}">Summary</a></li>
                    <li><a href="{{ route('athletes.index') }}">Athletes</a></li>
                    <li><a href="{{ route('tournaments.index') }}">Tournaments</a></li>
                    <li><a href="{{ route('forms.index') }}">Forms</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>