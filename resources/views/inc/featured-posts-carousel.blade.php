<div class="swiper lg:max-w-full min-[320px]:max-w-[400px]">

    <div class="slide-container-ft">
        <div class="swiper-wrapper">

            @foreach($ftPosts as $post)
                <div class="swiper-slide">
                    <div class="grid {{ count($post->assets) === 1 ? 'lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1' : 'lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1' }}  ">
                        <div class="w-full block">
                            <div class="m-8">
                                <img src="{{ asset($post->assets[0]->link) }}" class="rounded-[20px] w-[500px] h-[250px] object-cover">
                                <p class="font-normal mt-3 text-caper font-hind lg:text-left min-[320px]:text-center text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                                </p>
                            </div>
                        </div>

                        <div class="w-full items-center flex">
                            <div class="m-8 min-[320px]:text-center lg:text-left">

                                <h1 class="text-4xl mb-2 text-muesli font-extrabold">{{$post->title}}</h1>
                                <span class="bg-caper w-auto text-white text-xs font-medium px-2.5 py-0.5 rounded-[20px]">Featured</span>

                                <p class="font-normal my-3 text-coriander text-base font-hind">
                                    {{$post->description}}
                                </p>
                                <hr class="border-t border-coriander">
                                <div class="flex items-center min-[320px]:justify-center sm:justify-center lg:justify-start space-x-2 my-4">
                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="dark:text-white text-left">

                                        <div class="font-bold text-muesli">{{$post->users->name}}</div>
                                        <div class="text-[13px] text-coriander dark:text-gray-400"><span class="font-light">on </span>{{\Carbon\Carbon::create($post->created_at)->toDayDateTimeString()}}</div>
                                    </div>
                                </div>

                                <button onclick="window.location.href = '/post/{{$post->id}}'" class="bg-muesli lg:w-1/2 min-[320px]:w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>

                        @if( count($post->assets) !== 1)
                        <div class="w-full items-center flex">
                            <div class="m-8 ">
                                <div class="">
                                    <img src="{{ asset($post->assets[1]->link) }}" class="rounded-[20px] w-[500px] h-[250px] object-cover">
                                </div>
                                <p class="font-normal font-hind mt-3 text-caper text-sm text-right">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                                </p>
                            </div>
                        </div>
                        @else

                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
</div>

<style>
    .container {
        width: 100%;
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
    .swiper-navBtn {
        color: #978853;
        font-weight: 900;
        height: 50px;
        width: 50px;
        transform: translateY(-40%);
        background: rgba(170, 186, 130, 0.5);
        border-radius: 50%;
    }
    .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 24px;
    }
</style>


