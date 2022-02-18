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
        <!-- Hotjar Tracking Code for https://adenlall.herokuapp.com/ -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2838465,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        @yield('style')
    </head>
    <body>
        @yield('nav')
        @yield('body')
        @yield('footer')

        @yield('script')
    </body>
</html>
