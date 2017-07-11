<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Good 'nuff</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 350%;
        }

        .links > a {
            color: #636b6f;
            padding: 0 15px;
            font-size: 120%;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .title-image {
            min-width: 100%;
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
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
