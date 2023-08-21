<div class="">
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-96 border-t-2 border-muesli h-px my-8 dark:bg-gray-700">
        <span class="absolute px-6 font-bold text-lg text-muesli  -translate-x-1/2 bg-black-white left-1/2 dark:text-white dark:bg-gray-900">More Posts</span>
    </div>
    <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px] md:max-w-[800px]">
        <div class="slide-container ">
            <div class="card-wrapper swiper-wrapper">
                @foreach($posts as $post)
                <div class="card swiper-slide">
                    <div class="max-w-sm lg:max-w-[350px] bg-black-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-[20px] object-cover w-full h-[200px]" src="{{ asset($post->assets[0]->link) }}" alt="" />
                        </a>
                        <div class="p-6 space-y-4 ">
                            <a href="/post/{{$post->id}}" class="space-y-1">
                                <h5 class="font text-xl font-bold tracking-tight text-muesli dark:text-white">{{$post->title}}</h5>
                            </a>
                            <p class="mb-3 font-normal text-sm font-hind text-muesli dark:text-gray-400 line-clamp-3">{{$post->description}}</p>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-[20px] dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="dark:text-white">
                                    <div class="font-bold text-muesli">{{$post->users->name}}</div>
                                    <div class="text-[13px] text-coriander dark:text-gray-400"><span class="font-light">on </span>{{\Carbon\Carbon::create($post->created_at)->toDayDateTimeString()}}</div>
                                </div>
                            </div>
                            <button onclick="window.location.href = '/post/{{$post->id}}'" class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach
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



