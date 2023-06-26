@extends('layouts.app')
@section('content')

    <div class="lg:w-1/3 min-[320px]:w-full">
        @include('inc.searchbar')
    </div>
    <div class="m-4">
        <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
            <div class="border flex-grow my-auto border-muesli border"></div>
            <h1 class="lg:text-7xl min-[320px]:text-4xl ml-8 font-bold text-muesli">Posts</h1>
        </div>
        <div id="default-carousel" class="relative lg:h-[500px] sm:h-[1000px] min-[320px]:h-[1000px] w-full  rounded" data-carousel="static">
            <div class="relative overflow-hidden w-auto rounded-[20px] h-full p-16">
                <div class="hidden p-16 duration-700 ease-in-out" data-carousel-item>
                    <div class="grid min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 min-[320px]:gap-y-8 items-center">
                        <img src="/assets/images/img-2.jpg" class="lg:w-full min-[320px]:w-full rounded-[20px]">
                        <div class="">
                            <label class="text-2xs text-caper font-semibold">Category</label>
                            <h1 class="lg:text-5xl min-[320px]:text-4xl font-extrabold text-muesli">Title Here</h1>
                            <p class="font-normal font-hind mt-3 text-muesli lg:text-lg ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
                            </p>
                            <div class="lg:flex items-center justify-between mt-6 ">
                                <div class="flex items-center space-x-4 ">
                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="dark:text-white">
                                        <div class="font-bold text-muesli">Jese Leos</div>
                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                                    </div>
                                </div>
                                <button class="bg-muesli min-[320px]:w-full min-[320px]:justify-between sm:w-full md:w-full lg:w-auto sm:justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper lg:mt-0 sm:mt-6 min-[320px]:mt-6">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-16 duration-700 ease-in-out" data-carousel-item>
                    <div class="grid  min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 min-[320px]:gap-y-8 items-center">
                        <div class="">
                            <label class="text-2xs text-caper font-semibold">Category</label>
                            <h1 class="lg:text-5xl min-[320px]:text-4xl font-extrabold text-muesli">Title Here</h1>
                            <p class="font-normal font-hind mt-3 text-muesli lg:text-lg ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis doloremque dolores eveniet ex incidunt libero mollitia nam nostrum numquam obcaecati odio, officia provident quae quod rerum similique sint!
                            </p>
                            <div class="lg:flex items-center justify-between mt-6 ">
                                <div class="flex items-center space-x-4 ">
                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="dark:text-white">
                                        <div class="font-bold text-muesli">Jese Leos</div>
                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>
                                    </div>
                                </div>
                                <button class="bg-muesli min-[320px]:w-full min-[320px]:justify-between sm:w-full md:w-full lg:w-auto sm:justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper lg:mt-0 sm:mt-6 min-[320px]:mt-6">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <img src="/assets/images/img-2.jpg" class="lg:w-full  min-[320px]:w-1/3">
                    </div>
                </div>

            </div>
            <!-- Slider indicators -->
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30  flex items-center justify-center h-full  cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 border-2 border-muesli/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-muesli sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full  cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 border-2 border-muesli/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-muesli sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    @include('inc.more-posts-carousel')
@endsection
