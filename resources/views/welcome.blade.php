<<<<<<< HEAD
@extends ('layouts.master')

@section ('content')
<header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to Kiyoshi's Sushis Restaurant</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        </div>
      </div>
    </header>
=======
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kiyoshi Sushi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
>>>>>>> 6a04866b724e56604cb6180ffe19a13ce45a1e72

    

   <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
   <h1 class="display-4">About Kiyoshi</h1><br/>
      <p>
        Kiyoshi is a very passionate chef. He loves making sushi and is determined every order that you <br/>
        have will be delicious and fresh.
      </p>
    </div>

@endsection