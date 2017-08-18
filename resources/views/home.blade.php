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
                <div class="title-image">
                    <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>

                <div class="flex-center links">
                    <a href="personal/home" class="per">Personal <img src={{asset("controller.png")}} title="controller" width="48" height="48" /></a>
                    <a href="professional/home" class="pro">Professional <img src={{asset("tie.png")}} title="tie" width="48" height="48" /></a>
                </div>
            </div>
        </div>
        <a href="/about"><img src={{asset("copyright.png")}} id="copyright" title="copyright"></a>
        <a href="/contact"><img src={{asset("contact.png")}} id="contact" title="contact"></a>
    </body>
</html>