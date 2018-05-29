<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alerts Overlay</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Trocchi" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('css/common.css')}}" rel="stylesheet">
    <link href="{{asset('css/ticker.css')}}" rel="stylesheet">

    <!-- Scripts -->


</head>
<body class="per">
<div class="flex-center position-ref full-height" id="chroma-key">

    <div id="pointer" class="pointer"></div>
    <div id="tickerBody" class="tickerBody">
        <div id="socialText" class="socialText">
            <h1 id="twitter" class="socialText"><img src="{{asset('twitter.png')}}" height="60px" width="60px"> <span>@trevxor</span> </h1>
        </div>
    </div>

</div>
</body>
</html>