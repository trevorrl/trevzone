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
    <body class="pro">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="links">
                    <a href="/" class="per">Go Back</a>
                </div>
                <div class="title-image">
                    <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>

                <div class="links">
                    <a href="https://www.github.com/trevorrl" target="_blank"><span>Github</span><img src={{asset("github.png")}} title="github" height="48" width="48" /></a>
                    <a href="https://www.linkedin.com/in/trevorrl" target="_blank"><span>LinkedIn</span><img src={{asset("linkedin.png")}} title="linkedin" height="48" width="48" /></a>
                    <a href="https://stackoverflow.com/users/1442714/trevor-lemeron" target="_blank"><span>StackOverflow</span><img src={{asset("stackoverflow.png")}} title="stackoverflow" height="48" width="48" /></a>
                    <a href="https://itunes.apple.com/us/developer/trevor-lemeron/id1272739328" target="blank"><span>App Store</span><img src={{asset("iphone.png")}} title="fidget" width="48" height="48" /></a>
                </div>
            </div>
        </div>
        <a href="/about"><img src={{asset("copyright.png")}} id="copyright" title="copyright"></a>
        <a href="/contact"><img src={{asset("contact.png")}} id="contact" title="contact"></a>
        <a href="/tips"><img src={{asset("dollar.png")}} id="tips" title="tips"></a>
    </body>
</html>