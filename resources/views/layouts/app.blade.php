<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css',
                'resources/js/app.js',
                'resources/js/script.js',
            ])
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <title>Green AP</title>
    </head>
    <body class="antialiased font-nunito">
        <div class="grid grid-rows-1">
            <div class="z-40">
                @include('inc.navbar')
            </div>
            <div class="container mx-auto mt-36 ">
                @yield('content')
            </div>
            @include('inc.footer')
        </div>
        <script src="https://kit.fontawesome.com/273827b7bf.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    </body>
</html>

