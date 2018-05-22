<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trevzone Labs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Trocchi" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('css/common.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.socketToken = "{{env('SOCKET_TOKEN')}}";
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
    <script type="text/javascript" src="{{asset('js/trigger.js')}}"></script>

</head>
<body class="per">
<div class="flex-center position-ref full-height">

        <div id="click" class="click">
            <div id="sliding" class="sliding">
                <div id="rotation" class="rotation">
                    <div id="textalert" class="textalert">
                        <h1 id="msg1"></h1>
                        <h2 id="msg2"></h2>
                    </div>
                    <div id="logo" class="logo">
                        <img src="{{asset('logo.png')}}" title="logo" width="200" height="200"/>
                    </div>
                </div>
            </div>
        </div>

</div>
</body>
</html>