<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/bundle.css')}}">
        <!-- Styles -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
      <link rel="manifest" href="/manifest.json">
    </head>
    <body>
       <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                    @if (Auth::check())
                        <a href="{{ url('/assets/create') }}">Enter  New Asset</a>                       
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
               @endif
                </div>
            @endif

            <div class="content">
                
                <div class="title m-b-md">
                   <h1> NAPITALAI ICTC </h1>
                   <div id="sp-links">
                       <a id="sp-facebook" href="https://www.facebook.com/alois.napitalai"><span class="fa fa-facebook"></span></a>
                       <a id="sp-twitter" href="#"><span class="fa fa-twitter"></span></a>
                    <a id="sp-google" href="#"><span class="fa fa-google-plus"></span></a>
                   </div>
                </div>
              
                   
                <div class="links">
                   <a href="#"><img src="images/ao.jpg" alt=""></a>
                   <a href="#"><img src="images/cj.jpg" alt=""></a>
                   <a href="#"><img src="images/Jesus.jpg" alt=""></a>
                   <a href="#"><img src="images/ao.jpg" alt=""></a>
                   <a href="#"><img src="images/cj.jpg" alt=""></a>
                   <a href="#"><img src="images/con.jpg" alt=""></a>
               </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>

</html>
