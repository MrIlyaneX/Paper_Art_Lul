<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="test, site, website" />
    <meta name="description" content="Сайт группы Paper Лицея 7" />
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>@yield('title-block')</title>
  </head>

  <body>
    @include('inc.header')

    @if(Request::is('/'))
      @include('inc.hero')
    @endif


    @yield('content')

    <!--@include('inc.aside') -->


    @include('inc.footer')
  </body>
</html>
