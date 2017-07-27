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

            <div class="content">
                <div class="links">
                    <a href="/">Go Back</a>
                </div>
                <div class="title-image">
                    <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>

                <div class="links">
                    {{--TODO re-activate Setup section once I have professional photographs of my setup--}}
                    {{--<a href="setup">My Setup <img src={{asset("computer.png")}} title="computer" width="32" height="32" /></a>--}}
                    <a href="http://twitch.tv/trevxor" target="_blank"><img src={{asset("twitch.png")}} title="twitch" height="48" width="48"/></a>
                    <a href="social"><img src={{asset("social.png")}} title="social" height="48" width="48" /></a>
                    <a href="http://discord.gg/JwdKW7K" target="_blank"><img src={{asset("discord.png")}} title="discord" height="48" width="48" /></a>
                </div>
            </div>
        </div>
        <a href="/about"><img src={{asset("copyright.png")}} id="copyright" title="copyright"></a>
    </body>
</html>
