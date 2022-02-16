<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title') - AdenTime</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Keep your mind clean and be more carful">
        <meta name="keywords" content="Day, Calendar, Time">
        <meta name="author" content="Aden lall">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <meta property="og:image" content="https://ripeemangoes.files.wordpress.com/2017/12/original.jpg" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('style')
    </head>
    <body>
        @yield('nav')
        @yield('body')
        @yield('footer')


        @yield('script')
    </body>
</html>
