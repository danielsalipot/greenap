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
        <style>
            body, html {
                height: 100%;
                margin: 0;
            }

            .content {
                /* The image used */
                background-image: url("/assets/images/ga-team-4.JPG");
                /* Full height */
                height: 100%;
                width: 100%;

                /* Center and scale the image nicely */
                filter: grayscale(0.5) brightness(0.150);
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
                z-index: -1;
                opacity: 0.8;

            }
        </style>
    </head>
    <body class="antialiased font-nunito bg-black-white">
    <div class="content"></div>
        <div class="grid grid-rows-1">
            <div class="z-40">
                @include('inc.navbar')
            </div>
            <div class="container mx-auto mt-20">

                @yield('content')
                <button id="to-top-button" onclick="goToTop()" title="Go To Top"
                        class="hidden flex items-center justify-center fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-lg bg-muesli hover:bg-caper text-black-white text-lg font-semibold transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#e3e1d5}</style><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
                    <span class="sr-only">Go to top</span>
                </button>
            </div>
            @include('inc.footer')
        </div>
        <script src="https://kit.fontawesome.com/273827b7bf.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    </body>
</html>



