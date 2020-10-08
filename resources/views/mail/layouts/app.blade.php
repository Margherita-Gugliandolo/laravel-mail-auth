<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style media="screen">
      body{
        width: 100%;
        height:100vh;
        background-color: #4a9a81;
        color: #fff;
        text-align:center;
      }

      h3, h4{
        text-align: center;
      }

      li{
        list-style: none;
      }
    </style>

</head>
<body>
     <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
