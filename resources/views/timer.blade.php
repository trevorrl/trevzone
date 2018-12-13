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
        <script type="text/javascript" src="{{asset('js/bundle.js')}}"></script>

    </head>

    <body>
    <div id="chronoExample">
    <div class="values">00:00:00</div>
    <div>
        <button class="startButton">Start</button>
        <button class="pauseButton" >Pause</button>
        <button class="stopButton">Stop</button>
        <button class="resetButton">Reset</button>
    </div>
    </div>
    </body>

</html>