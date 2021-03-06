<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WTTSSADS</title>

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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background: url('images/welcome1.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="dropdown-item" href="{{ route('task') }}" style="color: white; background-color: rgba(24,24,24,0.8);">
                            Profile
                        </a>
                        </br>
                        <a class="dropdown-item" href="{{ route('logout') }}" style="color: white; background-color: rgba(24,24,24,0.8);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                    @else
                        <a href="{{ route('login') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Login</a>
                        <a href="{{ route('register') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   
                    
                    
                    <h1 style="font-size: 36px; color: #4B9CFE; background-color: rgba(24,24,24,0.3); padding-left: 5px; padding-right: 5px;">Welcome To The Simplon Super Awesome Digital Sheet !</h1>

                    <!-- <h3 style="font-size: 20px; color: white; background-color: rgba(24,24,24,0.8);">Please log-in or register in the top right corner of this page, it's easy and free, with no adds and a lot of cookies ! </h3> -->

                    </br>
                    <div class="flex-center">
                    <h3 style="font-size: 20px; color: white; background-color: rgba(24,24,24,0.3); width: 15%;"> <a href="{{ route('register') }}" style="color: #78D1F4; text-decoration: none;">Join us now !</a> </h3>
                    </div>
                    

                    <!-- <h4 style="font-size: 16px; color: aqua; background-color: rgba(24,24,24,0.8);">... What are you waiting for ! Login or register and get a *reward : a developper plush !</h4> 

                    <h6 style="font-size: 8px; color: white; background-color: rgba(24,24,24,0.8); align-self: center;">*Reward is only available with a premium account, 99.99$/per day. Paypal, ticket restaurant, monopoly's ticket, visa gold and any other card are accepted ... especially visa gold. #givememoney</h6> -->
                </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
