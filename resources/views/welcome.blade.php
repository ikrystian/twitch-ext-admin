<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '232979139', 'auto');
    ga('send', 'pageview');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Twitch ext - lovely gifs</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

        @if (Route::has('register'))
          <a href="{{ route('register') }}">Register</a>
        @endif
      @endauth
    </div>
  @endif

  <div class="content">
    <ul class="images">
      @foreach ($images as $image)
        <li>
          <button>
            <span> {{ $image->code }}</span>
            <img src=" {{ $image->url }}" alt="">
          </button>
        </li>
      @endforeach
    </ul>

  </div>
</div>
</body>
</html>
