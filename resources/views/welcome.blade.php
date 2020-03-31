<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">[Home]</a>
                        <p>you are loggedin!!!</p>
                    @else
                        <p><a href="{{ route('login') }}" class="start-btn">[Login]</a></p>

                        @if (Route::has('register'))
                        <p><a href="{{ route('register') }}" class="start-btn">[Register]</a></p>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
