<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Green AP</title>
    </head>
    <body class="antialiased font-nunito">
    <div class="grid grid-rows-1 h-auto">
        <div class="z-40">
            @include('inc.navbar')
        </div>
        <div class="mt-36">
            @yield('content')
        </div>
    </div>
    @include('inc.footer')
    <script src="https://kit.fontawesome.com/273827b7bf.js" crossorigin="anonymous"></script>
    </body>
</html>
