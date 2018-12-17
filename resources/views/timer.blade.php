<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stream Timers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Trocchi" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/common.css')}}" rel="stylesheet">
        <link href="{{asset('css/timer.css')}}" rel="stylesheet">

        <!-- Scripts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type="text/javascript" src="{{asset('js/bundle.js')}}"></script>

    </head>

    <body>
    
    <ul class="nav nav-tabs" id="timers" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="stopwatch-tab" data-toggle="tab" href="#stopwatch" role="tab" aria-controls="stopwatch" aria-selected="true">Stopwatch</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="countdown-tab" data-toggle="tab" href="#countdown" role="tab" aria-controls="countdown" aria-selected="false">Countdown</a>
        </li>
    </ul>

    <div class="tab-content" id="timersTabContent">
        <div class="tab-pane fade show active" id="stopwatch" role="tabpanel" aria-labelledby="stopwatch-tab">
            <div id="chronoExample">
                <div class="values h1">
                    00:00:00
                </div>
                <div>
                    <button type="button" class="startButton btn btn-success">Start</button>
                    <button type="button" class="pauseButton btn btn-secondary" >Pause</button>
                    <button type="button" class="stopButton btn btn-danger">Stop</button>
                    <button type="button" class="resetButton btn btn-warning">Reset</button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="countdown" role="tabpanel" aria-labelledby="countdown-tab">
            <h1>This is empty!</h1>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>

</html>