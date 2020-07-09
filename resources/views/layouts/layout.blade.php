<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-name')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials/header')
        @yield('body')
    </body>
</html>
