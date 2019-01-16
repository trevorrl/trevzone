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

        <div class="flex-center position-ref">
            <div class="content">
                <div class="title-image">
                    <img src={{asset("logo-black.png")}} title="logo-black" height="256" width="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>
                <div class="header flex-center">
                    <div class="navigation flex-center">
                        <ul>
                            <li class="per"><a href="#">Follow Me!</a>
                                <ul>
                                    <li><a href="https://fb.com/trevxor" target="_blank"><img src={{asset("facebook.png")}} title="facebook" height="32" width="32" />Facebook</a></li>
                                    <li><a href="https://twitter.com/trevxor" target="_blank"><img src={{asset("twitter.png")}} title="twitter" height="32" width="32" />Twitter</a></li>
                                    <li><a href="https://www.snapchat.com/add/trevxor" target="_blank"><img src={{asset("ghost.png")}} title="ghost" height="32" width="32" />Snapchat</a></li>
                                    <li><a href="https://www.instagram.com/trevxor/" target="_blank"><img src={{asset("instagram.png")}} title="instagram" height="32" width="32" />Insta</a></li>
                                </ul>
                            </li>
                            <li class="per"><a href="#">Watch Me!</a>
                                <ul>
                                    <li><a href="https://www.twitch.tv/trevxor" target="_blank"><img src={{asset("twitch.png")}} title="twitch" height="32" width="32" />Twitch</a></li>
                                    <li><a href="https://www.youtube.com/channel/UCWehsqV0hK82hS53DGH_icg" target="_blank"><img src={{asset("youtube.png")}} title="youtube" height="32" width="32" />Youtube</a></li>
                                </ul>
                            </li>
                            <li class="per"><a href="#">Support Me!</a>
                                <ul>
                                    <li><a href="https://streamlabs.com/trevxor#/merch" target="_blank"><img src={{asset("tie.png")}} title="tie" height="32" width="32" />Merch</a></li>
                                    <li><a href="https://streamlabs.com/trevxor" target="_blank"><img src={{asset("dollar.png")}} title="dollar" height="32" width="32" />Tips</a></li>
                                    <li><a href="https://www.twitch.tv/products/trevxor" target="_blank"><img src={{asset("twitch.png")}} title="twitch" height="32" width="32" />Subscribe</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <a href="/about"><img src={{asset("copyright.png")}} id="copyright" title="copyright"></a>
        <a href="/contact"><img src={{asset("contact.png")}} id="contact" title="contact"></a>
        <a href="/tips"><img src={{asset("dollar.png")}} id="tips" title="tips"></a>
    </body>
</html>