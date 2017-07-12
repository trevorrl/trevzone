<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Good 'nuff</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/common.css')}}" rel="stylesheet">
    </head>
    <body>
    <div class="flex-center position-ref full-height">

    <div class="content">
        <div class="links">
            <a href="welcome">Go Back</a>
        </div>
        <div class="title-image">
            <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
        </div>
        <div class="title m-b-md">
            Trev Zone
        </div>

        <div class="links">
            <a href="http://www.facebook.com/1708024242546113" target="_blank">Facebook</a>
            <a href="https://twitter.com/trevxor" target="_blank">Twitter</a>
            <a href="http://www.snapchat.com/add/trevxor" target="_blank">Snapchat</a>
            <a href="http://instagram.com/trevxor" target="_blank">Instagram</a>
        </div>
    </div>
</div>
</body>
</html>
