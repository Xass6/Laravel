<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet"  href="{{ asset('./css/style.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    </head>
    <body>
      <header>
          @include('./templates.sidebar')
      </header>
        <main>
            @yield('content')
        </main>
    </body>
    <script type="text/javascript" src="{{ asset('./js/script.js') }}"></script>
</html>
