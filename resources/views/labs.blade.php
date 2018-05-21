<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Good 'nuff</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Trocchi" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('css/common.css')}}" rel="stylesheet">
</head>
<body class="per">
<div class="flex-center position-ref full-height">

    <div class="chroma">
        <div class="sliding">
            <div class="rotation">
                <div class="textalert">
                    <h1>Hello there!</h1>
                </div>
                <div class="logo">
                    <img src="{{asset('logo.png')}}" title="logo" width="200" height="200"/>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>