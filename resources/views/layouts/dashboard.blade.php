<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" property="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

        <!-- Styles -->
        @yield('css')


    </head>
    <body>
        
        @yield('body')


        @yield('scripts')
    </body>
</html>
