<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>bibbibbiShop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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

            .top-center {
                display: inline-block;
                position: absolute;
                right: 10px;
                top: 18px;
                text-decoration:jdtojewish;
	color: #fff;
	padding: 4px 20px;
	border: 1px solid;
	transition: 0.7s;
	margin-top: 10px;
            }
            .top-center :hover{
	background-color: #fff;
	color: #000;
}
}
.top-center.active a{
background-color: #fff;
color: #000;
font-size: 184px;

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
                font-size: 13px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" color= "pink">
            @if (Route::has('login'))
                <div class="top-center links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{ url('images/1.png') }}" class="rounded mx-auto d-block" width="1300" alt="">
                </div>

               
            </div>
        </div>
    </body>
</html>
