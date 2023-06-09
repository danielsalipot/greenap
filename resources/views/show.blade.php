@extends('layouts.app')
@section('content')

@include('inc.searchbar')

<div class="mx-8">
    <div class="flex content-stretch min-[320px]:m-8 md:my-16">
        <div class="border flex-grow my-auto border-muesli border"></div>
            <div class="ml-8 text-right ">
                <span class="bg-caper w-auto text-white text-xs font-medium px-2.5 py-0.5 rounded-[20px]">{{ $post->featured == 1 ? "Featured" :  "Category"}}</span>

                <h1 class="lg:text-7xl min-[320px]:text-6xl font-extrabold text-muesli">{{$post->title}}</h1>
                <div class="flex justify-end items-center space-x-4 ">
                    <div class="dark:text-white">
                        <div class="font-bold text-muesli">Posted by {{$post->users->name}}</div>
                        <div class="text-[13px] text-caper dark:text-gray-400">
                            On {{\Carbon\Carbon::create($post->created_at)->toDayDateTimeString()}}
                        </div>
                    </div>
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="/assets/images/Blank-Profile.jpg" alt="">
                        <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid justify-items-center">
            <img src="{{ asset($post->assets[0]->link) }}" class="rounded-[20px] lg:w-[700px] lg:h-[350px] object-cover  min-[320px]:w-full ">
            <p class="font-normal first-letter:text-7xl text-justify  first-letter:font-bold lg:leading-loose sm:leading-loose md:leading-loose min-[320px]:leading-loose  lg:mx-32 min-[320px]:px-4 font-hind my-8 text-muesli lg:text-lg ">
                {{$post->body}}
            </p>
        </div>

    <div class="flex w-full justify-center">
        <div id="default-carousel" class="relative lg:w-1/2 min-[320px]:w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            @if (count($post->assets) > 1)
                <div class="relative h-56 overflow-hidden rounded-[20px] md:h-96">
                    @foreach ($post->assets as $asset)
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($asset->link) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    @endforeach
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    @foreach ($post->assets as $key => $asset)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ !$key ? true : false }}" aria-label="Slide {{ $key + 1 }}" data-carousel-slide-to="{{ $key }}"></button>
                    @endforeach
                </div>
            @endif

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

    @include('inc.more-posts-carousel')
@endsection
