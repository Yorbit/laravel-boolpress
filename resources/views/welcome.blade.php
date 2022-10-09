<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                height: 100vh;
                color: #6aacb0;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                top: 30px;
                right: 30px;
                position: absolute;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
                font-weight: 600;
            }

            .links > a {
                color: #1f54db;
                padding: 20px 25px;
                font-size: 18px;
                font-weight: 600;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">HOME</a>
                    @else
                        <a href="{{ route('login') }}">ACCEDI</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">REGISTRATI</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    My Laravel DB
                </div>
            </div>
        </div>
    </body>
</html>
