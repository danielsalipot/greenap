@extends('layouts.admin')

@section('content')
    <div class="flex justify-between mb-4">
        <h1 class="font-extrabold text-3xl text-muesli">Dashboard</h1>
        <button onclick="location.href='/admin/facebook/refresh'" class="mb-2 rounded-full w-12 h-12 bg-caper p-3 text-white"><i class="fa-solid fa-rotate-right text-2xl "> </i></button>
    </div>

    <div class="grid lg:grid-cols-2 sm:grid-cols-1 items-center">
        <aside class="h-screen overflow-auto">
            <div class="grid lg:grid-cols-1 sm:grid-cols-1 gap-4">
                @if($posts !== null)
                    @foreach ($posts as $post)
                    <a href="https://www.facebook.com/{{$post['id']}}" class="">
                        <div class="rounded-[20px]  border-2 hover:border-dashed hover:border-caper border-muesli p-4 ">
                            <div class="flex justify-between">
                                <p class="inline-flex items-center text-sm text-muesli font-bold mb-2">
                                    <img
                                        class="mr-2 w-8 h-8 rounded-full border border-muesli"
                                        src="{{asset('assets/images/greenap-logo-2.png')}}"
                                        alt="">
                                    Green AP
                                </p>
                                <h1 class="text-3xl font-extrabold text-facebook"><i class="fa-brands fa-facebook me-2"></i></h1>
                            </div>
                            <div class="grid grid-cols-1 gap-y-3">
                                <p class="text-muesli text-base truncate ...">{{isset($post['message']) ? $post['message'] : ''}}</p>
                                    @if (isset($post['attachments']['data'][0]['media']['source']))
                                        <video controls width="" class="rounded-[10px]">
                                            <source src="{{ $post['attachments']['data'][0]['media']['source'] }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif (isset($post['full_picture']))
                                        <img src="{{ $post['full_picture'] }}" onclick="location.href='https://www.facebook.com/{{$post['id']}}'" alt="Post Image" class="h-auto w-auto rounded-[10px] ">
                                    @endif
                                <hr class="border-t border-dashed border-muesli ">
                                <p class="text-coriander font-medium text-xs">Posted on {{\Carbon\Carbon::create($post['created_time'])->toDayDateTimeString()}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @else
                    no data
                @endif
            </div>
        </aside>

        <aside class="h-screen overflow-auto">
            <div class="grid lg:grid-cols-1 sm:grid-cols-1 gap-4">
                @if($posts !== null)
                    @foreach ($posts as $post)
                    <a href="https://www.facebook.com/{{$post['id']}}" class="">
                        <div class="rounded-[20px]  border-2 hover:border-dashed hover:border-caper border-muesli p-4 ">
                            <div class="flex justify-between">
                                <p class="inline-flex items-center text-sm text-muesli font-bold mb-2">
                                    <img
                                        class="mr-2 w-8 h-8 rounded-full border border-muesli"
                                        src="{{asset('assets/images/greenap-logo-2.png')}}"
                                        alt="">n
                                    Green AP
                                </p>
                                <h1 class="text-3xl font-extrabold "><i class="text-transparent bg-clip-text bg-gradient-to-bl from-insta-ylw via-insta-pnk to-insta-vlt fa-brands fa-instagram me-2"></i></h1>
                            </div>
                            <div class="grid grid-cols-1 gap-y-3">
                                <p class="text-muesli text-base truncate ...">{{isset($post['message']) ? $post['message'] : ''}}</p>
                                    @if (isset($post['attachments']['data'][0]['media']['source']))
                                        <video controls width="" class="rounded-[10px]">
                                            <source src="{{ $post['attachments']['data'][0]['media']['source'] }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif (isset($post['full_picture']))
                                        <img src="{{ $post['full_picture'] }}" onclick="location.href='https://www.facebook.com/{{$post['id']}}'" alt="Post Image" class="h-auto w-auto rounded-[10px] ">
                                    @endif
                                <hr class="border-t border-dashed border-muesli ">
                                <p class="text-coriander font-medium text-xs">Posted on {{\Carbon\Carbon::create($post['created_time'])->toDayDateTimeString()}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @else
                    no data
                @endif
            </div>
        </aside>
@endsection
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

    /* @media screen and (max-width: 768px) {
        .swiper-navBtn {
            display: none;
        }
    } */
</style>
