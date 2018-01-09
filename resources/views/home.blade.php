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
                    <img src={{asset("avatar.png")}} title="avatar" width="256" height="256"/>
                </div>
                <div class="title m-b-md">
                    Trev Zone
                </div>
                <div class="header flex-center">
                    <div class="navigation flex-center">
                        <ul>
                            <li class="per"><a href="#">Personal<img src={{asset("controller.png")}} title="controller" height="48" width="48" /></a>
                                <ul>
                                    <li><a href="discord" target="_blank">Discord<img src={{asset("discord.png")}} title="discord" height="32" width="32" /></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCFSJsYcAUnlRIsceaXacrxg" target="_blank">Youtube<img src={{asset("youtube.png")}} title="youtube" height="32" width="32" /></a></li>
                                    <li><a href="https://www.twitch.tv/trevxor" target="_blank">Twitch<img src={{asset("twitch.png")}} title="twitch" height="32" width="32" /></a></li>
                                        <li>
                                            <ul>
                                                <li><a href="https://fb.com/trevxor" target="_blank"><img src={{asset("facebook.png")}} title="facebook" height="32" width="32" />Facebook</a></li>
                                                <li><a href="https://twitter.com/trevxor" target="_blank"><img src={{asset("twitter.png")}} title="twitter" height="32" width="32" />Twitter</a></li>
                                                <li><a href="https://www.snapchat.com/add/trevxor" target="_blank"><img src={{asset("ghost.png")}} title="ghost" height="32" width="32" />Snapchat</a></li>
                                                <li><a href="https://www.instagram.com/trevxor/" target="_blank"><img src={{asset("instagram.png")}} title="instagram" height="32" width="32" />Insta</a></li>
                                            </ul>
                                            <a href="#">Social<img src={{asset("social.png")}} title="social" height="32" width="32" /></a>
                                        </li>
                                </ul>
                            </li>
                            <li class="pro"><a href="#"><img src={{asset("tie.png")}} title="tie" height="48" width="48" />Professional</a>
                                <ul>
                                    <li class="pro" style="width: 370px"><a href="https://github.com/trevorrl" target="_blank"><img src={{asset("github.png")}} title="github" height="32" width="32" />Github</a></li>
                                    <li class="pro" style="width: 370px"><a href="https://www.linkedin.com/in/trevorrl/" target="_blank"><img src={{asset("linkedin.png")}} title="linkedin" height="32" width="32" />LinkedIn</a></li>
                                    <li class="pro" style="width: 370px"><a href="https://stackoverflow.com/users/1442714/trevor-lemeron" target="_blank"><img src={{asset("stackoverflow.png")}} title="stackoverflow" height="32" width="32" />Stackoverflow</a></li>
                                    <li class="pro" style="width: 370px"><a href="https://itunes.apple.com/us/developer/trevor-lemeron/id1272739328" target="_blank"><img src={{asset("iphone.png")}} title="iphone" height="32" width="32" />App Store</a></li>
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