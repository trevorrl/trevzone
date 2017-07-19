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
                <div class="title-image">
                    <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>

                <div class="links">
                    <a href="setup">My Setup</a>
                    <a href="http://twitch.tv/trevxor" target="_blank">My Channel</a>
                    <a href="social">Social Media</a>
                    <a href="http://discord.gg/JwdKW7K" target="_blank">Discord</a>
                </div>
            </div>
        </div>
    </body>
</html>
