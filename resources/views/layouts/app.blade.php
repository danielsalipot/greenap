<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css',
                'resources/js/app.js',
                'resources/css/swiper-bundle.min.css',
                'resources/js/swiper-bundle.min.js',
                'resources/js/script.js'
            ])
        <title>Green AP</title>
    </head>
    <body class="antialiased font-nunito">
    <div class="grid grid-rows-1">
        <div class="z-40">
            @include('inc.navbar')
        </div>
        <div class="container mx-auto mt-36">
            @yield('content')
        </div>
        @include('inc.footer')
    </div>
    <script src="https://kit.fontawesome.com/273827b7bf.js" crossorigin="anonymous"></script>
    </body>
</html>

