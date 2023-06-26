<div class="">
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-full mx-8 my-16 border-2 border-muesli ">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <label class="text-xl font-bold text-muesli"> More Posts </label>
        </div>
    </div>
    <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px]">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
                @foreach($posts as $post)
                    <div class="card swiper-slide">
                    <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />
                        </a>
                        <div class="p-6 space-y-4">
                            <a href="#" class="space-y-1">
                                <span class="bg-caper text-white text-xs font-medium px-2.5 py-0.5 rounded-[20px]">Category</span>
                                <h5 class="font text-3xl font-extrabold tracking-tight text-muesli dark:text-white line-clamp-3">{{$post->title}}</h5>
                            </a>
                            <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-2">{{$post->description}}</p>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-[20px] dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="dark:text-white">

                                        <div class="font-bold text-muesli">Your Name Here</div>

                                    <div class="text-[13px] text-coriander dark:text-gray-400">{{\Carbon\Carbon::create($post->created_at)->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

{{--@foreach ($posts as $post)--}}
{{--    <h1>{{$post->title}}</h1>--}}
{{--@endforeach--}}
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
