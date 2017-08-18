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
                    <a href="home">Go Back</a>
                </div>
                <div class="title-image">
                    <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>

                <div class="links">
                    <a href="http://www.facebook.com/1708024242546113" target="_blank"><span>Facebook</span><img src={{asset("facebook.png")}} title="facebook" height="48" width="48" /></a>
                    <a href="https://twitter.com/trevxor" target="_blank"><span>Twitter</span><img src={{asset("twitter.png")}} title="twitter" height="48" width="48" /></a>
                    <a href="http://www.snapchat.com/add/trevxor" target="_blank"><span>Snapchat</span><img src={{asset("ghost.png")}} title="ghost" height="48" width="48" /></a>
                    <a href="http://instagram.com/trevxor" target="_blank"><span>Instagram</span><img src={{asset("instagram.png")}} title="instagram" height="48" width="48" /></a>
                </div>
            </div>
        </div>
        <a href="/about"><img src={{asset("copyright.png")}} id="copyright" title="copyright"></a>
        <a href="/contact"><img src={{asset("contact.png")}} id="contact" title="contact"></a>
    </body>
</html>