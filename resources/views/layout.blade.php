<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('components.header')
    </head>
    <body class="flex flex-col w-full min-h-screen">
       
        @yield('content')

    </body>
</html>
