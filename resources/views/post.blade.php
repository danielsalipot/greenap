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
        <div id="default-carousel" class="relative lg:h-[500px] sm:h-[1000px] min-[320px]:h-[1000px] w-full rounded" data-carousel="static">
            <div class="relative overflow-hidden rounded-[20px] h-full p-16">
                <div class="hidden p-16  duration-700 ease-in-out" data-carousel-item>
                    <div class="grid min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 min-[320px]:gap-y-8 items-center">
                        <img src="/assets/images/img-2.jpg" class="w-full">
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
                <div class="hidden  p-16 duration-700 ease-in-out" data-carousel-item>
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
                        <img src="/assets/images/img-2.jpg" class="w-full">
                    </div>
                </div>

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-[#978853]" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-[#978853]" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-[#978853]" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-[#978853]" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-[#978853]" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
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
{{--    <div class="m-8 mb-32">--}}
{{--        <div class="inline-flex items-center justify-center w-full">--}}
{{--            <hr class="w-full my-16 border-2 border-muesli ">--}}
{{--            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">--}}
{{--                <label class="text-xl font-bold text-muesli"> More Posts </label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container swiper">--}}
{{--            <div class="slide-container">--}}
{{--                <div class="card-wrapper swiper-wrapper">--}}
{{--                    <div class="card swiper-slide">--}}
{{--                        <div class="image-box">--}}
{{--                            <img src="/assets/images/img-1.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="profile-details">--}}
{{--                            <img src="/assets/images/img-1.jpg" alt="" />--}}
{{--                            <div class="name-job">--}}
{{--                                <h3 class="name">David Cardlos</h3>--}}
{{--                                <h4 class="job">Full Stack Developer</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card swiper-slide">--}}
{{--                        <div class="image-box">--}}
{{--                            <img src="images/showImg/photographer.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="profile-details">--}}
{{--                            <img src="images/profile/profile2.jpg" alt="" />--}}
{{--                            <div class="name-job">--}}
{{--                                <h3 class="name">Siliana Ramis</h3>--}}
{{--                                <h4 class="job">Photographer</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card swiper-slide">--}}
{{--                        <div class="image-box">--}}
{{--                            <img src="images/showImg/dataAna.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="profile-details">--}}
{{--                            <img src="images/profile/profile3.jpg" alt="" />--}}
{{--                            <div class="name-job">--}}
{{--                                <h3 class="name">Richard Bond</h3>--}}
{{--                                <h4 class="job">Data Analyst</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card swiper-slide">--}}
{{--                        <div class="image-box">--}}
{{--                            <img src="images/showImg/appDev.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="profile-details">--}}
{{--                            <img src="images/profile/profile4.jpg" alt="" />--}}
{{--                            <div class="name-job">--}}
{{--                                <h3 class="name">Priase</h3>--}}
{{--                                <h4 class="job">App Developer</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card swiper-slide">--}}
{{--                        <div class="image-box">--}}
{{--                            <img src="images/showImg/blogger.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="profile-details">--}}
{{--                            <img src="images/profile/profile5.jpg" alt="" />--}}
{{--                            <div class="name-job">--}}
{{--                                <h3 class="name">James Laze</h3>--}}
{{--                                <h4 class="job">Blogger</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="swiper-button-next swiper-navBtn"></div>--}}
{{--            <div class="swiper-button-prev swiper-navBtn"></div>--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--        </div>--}}

{{--    </div>--}}

<div class="container swiper">
    <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-box">
                    <img src="/assets/images/img-1.jpg" alt="" />
                </div>
                <div class="profile-details">
                    <img src="/assets/images/img-1.jpg" alt="" />
                    <div class="name-job">
                        <h3 class="name">David Cardlos</h3>
                        <h4 class="job">Full Stack Developer</h4>
                    </div>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-box">
                    <img src="images/showImg/photographer.jpg" alt="" />
                </div>
                <div class="profile-details">
                    <img src="images/profile/profile2.jpg" alt="" />
                    <div class="name-job">
                        <h3 class="name">Siliana Ramis</h3>
                        <h4 class="job">Photographer</h4>
                    </div>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-box">
                    <img src="images/showImg/dataAna.jpg" alt="" />
                </div>
                <div class="profile-details">
                    <img src="images/profile/profile3.jpg" alt="" />
                    <div class="name-job">
                        <h3 class="name">Richard Bond</h3>
                        <h4 class="job">Data Analyst</h4>
                    </div>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-box">
                    <img src="images/showImg/appDev.jpg" alt="" />
                </div>
                <div class="profile-details">
                    <img src="images/profile/profile4.jpg" alt="" />
                    <div class="name-job">
                        <h3 class="name">Priase</h3>
                        <h4 class="job">App Developer</h4>
                    </div>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-box">
                    <img src="images/showImg/blogger.jpg" alt="" />
                </div>
                <div class="profile-details">
                    <img src="images/profile/profile5.jpg" alt="" />
                    <div class="name-job">
                        <h3 class="name">James Laze</h3>
                        <h4 class="job">Blogger</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
<style>
    .container {
        max-width: 1200px;
        width: 100%;
        padding: 60px 0;
    }
    .slide-container {
        margin: 0 30px;
        overflow: hidden;
    }
    .card {
        background: #fff;
        border-radius: 8px;
    }
    .card .image-box {
        height: 300px;
    }
    .card .image-box img {
        width: 100%;
        height: 100%;
        border-radius: 8px 8px 0 0;
    }
    .card .profile-details {
        display: flex;
        align-items: center;
        column-gap: 12px;
        padding: 15px;
    }
    .card .profile-details img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }
    .profile-details .name {
        font-size: 15px;
        font-weight: 500;
    }
    .profile-details .job {
        font-size: 12px;
        font-weight: 500;
        color: #4d4d4d;
    }

    .swiper-navBtn {
        color: #000;
        height: 50px;
        width: 50px;
        transform: translateY(-40%);
        background: #fff;
        border-radius: 50%;
    }
    .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 24px;
    }

    .swiper-pagination-bullet {
        background-color: #333;
    }

    @media screen and (max-width: 768px) {
        .swiper-navBtn {
            display: none;
        }
    }</style>

        {{--        <div id="controls-carousel" class="relative w-full" data-carousel="static">--}}
{{--            <!-- Carousel wrapper -->--}}
{{--            <div class="relative h-screen overflow-hidden rounded-lg ">--}}
{{--                <!-- Item 1 -->--}}
{{--                <div class="hidden h-full duration-700 ease-in-out " data-carousel-item>--}}
{{--                    <div class="grid lg:grid-cols-3 min-[320px]:grid-cols-1 gap-4 justify-items-center">--}}
{{--                        <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="p-6  space-y-4">--}}
{{--                                <a href="#">--}}
{{--                                    <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                                    <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here1</h5>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="dark:text-white">--}}
{{--                                        <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="p-6  space-y-4">--}}
{{--                                <a href="#">--}}
{{--                                    <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                                    <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here2</h5>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="dark:text-white">--}}
{{--                                        <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="p-6  space-y-4">--}}
{{--                                <a href="#">--}}
{{--                                    <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                                    <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here3</h5>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="dark:text-white">--}}
{{--                                        <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="hidden h-full duration-700 ease-in-out " data-carousel-item>--}}
{{--                    <div class="grid lg:grid-cols-3 min-[320px]:grid-cols-1 gap-4 justify-items-center">--}}
{{--                        <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="p-6  space-y-4">--}}
{{--                                <a href="#">--}}
{{--                                    <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                                    <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here4</h5>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="dark:text-white">--}}
{{--                                        <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="p-6  space-y-4">--}}
{{--                                <a href="#">--}}
{{--                                    <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                                    <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here5</h5>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="dark:text-white">--}}
{{--                                        <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="max-w-sm lg:max-w-[350px] bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <a href="#">--}}
{{--                                <img class="rounded-t-[20px] w-full h-1/3" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="p-6  space-y-4">--}}
{{--                                <a href="#">--}}
{{--                                    <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                                    <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">Title Here6</h5>--}}
{{--                                </a>--}}
{{--                                <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eos exercitationem iusto quam rerum soluta voluptas. Asperiores autem ducimus est laudantium non numquam quo quos, rem sint suscipit, totam vero.}</p>--}}
{{--                                <div class="flex items-center space-x-2">--}}
{{--                                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="dark:text-white">--}}
{{--                                        <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Item 2 -->--}}

{{--            </div>--}}
{{--            <!-- Slider controls -->--}}
{{--            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>--}}
{{--                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
{{--                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>--}}
{{--                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
{{--                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--        </div>--}}

        {{--        <div class="grid lg:grid-cols-3 min-[320px]:grid-cols-1 gap-4 justify-items-center">--}}
{{--            --}}{{-- TODO: CAROUSEL TYPE  --}}
{{--            @foreach($posts as $post)--}}
{{--                <div class="max-w-sm lg:max-w-md bg-white border-2 border-muesli rounded-[20px] dark:bg-gray-800 dark:border-gray-700">--}}
{{--                    <a href="#">--}}
{{--                        <img class="rounded-t-[20px]" src="/assets/images/img-2.jpg" alt="" />--}}
{{--                    </a>--}}
{{--                    <div class="p-6  space-y-4">--}}
{{--                        <a href="#">--}}
{{--                            <label class="text-2xs text-caper font-semibold">Category</label>--}}
{{--                            <h5 class="font text-2xl font-bold tracking-tight text-muesli dark:text-white line-clamp-3">{{$post->title}}</h5>--}}
{{--                        </a>--}}
{{--                        <p class="mb-3 font-normal font-hind text-muesli dark:text-gray-400 line-clamp-3">{{$post->description}}</p>--}}
{{--                        <div class="flex items-center space-x-2">--}}
{{--                            <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                            </div>--}}
{{--                            <div class="dark:text-white">--}}
{{--                                <div class="font-bold text-muesli">Jese Leos</div>--}}
{{--                                <div class="text-[13px] text-gray-500 dark:text-gray-400">{{\Carbon\Carbon::create($post->created_at)->toDayDateTimeString()}}</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button class="bg-muesli w-full justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Read More <i class="ml-3 fa-solid fa-arrow-right"></i></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}



@endsection
