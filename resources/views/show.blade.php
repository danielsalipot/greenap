@extends('layouts.app')
@section('content')

<div class="lg:w-1/3 min-[320px]:w-full">
    @include('inc.searchbar')
</div>

<div class="mx-8">
    <div class="flex content-stretch min-[320px]:m-8 md:my-16">
        <div class="border flex-grow my-auto border-muesli border"></div>
            <div class="ml-8 text-right ">
                <label class="text-2xs text-caper font-semibold">Category</label>
                <h1 class="lg:text-7xl min-[320px]:text-6xl font-extrabold text-muesli">Title Here</h1>
                <div class="flex justify-end items-center space-x-4 ">
                    <div class="dark:text-white">
                        <div class="font-bold text-muesli">Posted by Jese Leos</div>
                        <div class="text-[13px] text-caper dark:text-gray-400">On {{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                    </div>
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </div>
        </div>

    <div class="grid justify-items-center">
        <img src="/assets/images/img-2.jpg" class="rounded-[20px] lg:w-2/3 min-[320px]:w-full ">
        <p class="font-normal first-letter:text-7xl first-letter:font-medium text-center lg:px-16 min-[320px]:px-4 font-hind my-8 text-muesli lg:text-lg ">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
        </p>
    </div>

<div class="flex w-full justify-center">
    <div id="default-carousel" class="relative lg:w-1/2 min-[320px]:w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-[20px] md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/images/img-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/images/img-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/images/img-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/images/img-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/images/img-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
</div>


</div>
<div class="">
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-full my-16 border-2 border-muesli ">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <label class="text-xl font-bold text-muesli"> More Posts </label>
        </div>
    </div>
    <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px]">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />
                        </a>
                        <div class="p-6  space-y-4">
                            <a href="#">
                                <label class="text-2xs text-caper font-semibold">Category</label>
                                <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here 1</h5>
                            </a>
                            <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="dark:text-white">
                                    <div class="font-bold text-muesli">Jese Leos</div>
                                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />
                        </a>
                        <div class="p-6  space-y-4">
                            <a href="#">
                                <label class="text-2xs text-caper font-semibold">Category</label>
                                <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here 2</h5>
                            </a>
                            <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="dark:text-white">
                                    <div class="font-bold text-muesli">Jese Leos</div>
                                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />
                        </a>
                        <div class="p-6  space-y-4">
                            <a href="#">
                                <label class="text-2xs text-caper font-semibold">Category</label>
                                <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here 3</h5>
                            </a>
                            <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="dark:text-white">
                                    <div class="font-bold text-muesli">Jese Leos</div>
                                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />
                        </a>
                        <div class="p-6  space-y-4">
                            <a href="#">
                                <label class="text-2xs text-caper font-semibold">Category</label>
                                <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here 4</h5>
                            </a>
                            <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="dark:text-white">
                                    <div class="font-bold text-muesli">Jese Leos</div>
                                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<style>
    .container {
        width: 100%;
        padding: 60px 0;
    }
    .slide-container {
        margin: 0 30px;
        overflow: hidden;
    }
    .swiper-pagination-bullet {
        background-color: #978853;
    }

    @media screen and (max-width: 768px) {
        .swiper-navBtn {
            display: none;
        }
    }
</style>
@endsection
