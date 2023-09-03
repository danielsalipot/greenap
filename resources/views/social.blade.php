@extends('layouts.app')
@section('content')


    <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
        <h1 class="lg:text-6xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Social Media</h1>
        <div class="border flex-grow my-auto border-muesli"></div>
    </div>

    <div class="mb-16">
        <p class="font-bold text-muesli text-center">Stay up to date on our latest news and posts by following us on;</p>
    </div>

    <div class="my-8 grid lg:grid-cols-2 sm:grid-cols-1 gap-32">
        <div class="">
            <div class="flex justify-between items-center mb-8">
                <h1 class="lg:text-6xl min-[320px]:text-4xl font-extrabold text-muesli"><i class="fa-brands fa-facebook me-3 text-facebook"></i>Facebook</h1>
                <button onclick="window.location.href = ''" class=" justify-between flex items-center font-bold px-4 py-2 text-white bg-facebook hover:drop-shadow-caper rounded-full">Follow us on Facebook <i class="ml-3 fa-solid fa-arrow-right"></i></button>
            </div>
            {{-- Facebook Posts --}}

            <div class="grid w-[750px] items-center max-h-screen overflow-y-scroll no-scrollbar lg:grid-cols-1 sm:grid-cols-1 gap-4 ">
                @if($data !== null)
                    @foreach ($data as $post)
                    <a href="https://www.facebook.com/{{$post->id}}" class="">
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
                                <p class="text-muesli text-base truncate ...">{{isset($post->message) ? $post->message : ''}}</p>
                                    @if (isset($post->attachments->data[0]->media->source))
                                        <video controls width="" class="rounded-[10px]">
                                            <source src="{{ $post->attachments->data[0]->media->source }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif (isset($post->full_picture))
                                        <img src="{{ $post->full_picture}}" onclick="location.href='https://www.facebook.com/{{$post->id}}'" alt="Post Image" class="h-auto w-auto rounded-[10px] ">
                                    @endif
                                <hr class="border-t border-dashed border-muesli ">
                                <p class="text-coriander font-medium text-xs">Posted on {{\Carbon\Carbon::create($post->created_time)->toDayDateTimeString()}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @else
                    no data
                @endif
            </div>
            {{-- Facebook Posts --}}
        </div>
        <div class="">
            <div class="flex justify-between items-center mb-8">
                <h1 class="lg:text-6xl min-[320px]:text-4xl font-extrabold text-muesli"><i class="text-transparent bg-clip-text bg-gradient-to-bl from-insta-ylw via-insta-pnk to-insta-vlt fa-brands fa-instagram me-3"></i>Instagram</h1>
                <button onclick="window.location.href = ''" class="bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-insta-ylw via-insta-pnk to-insta-vlt justify-between flex items-center font-bold px-4 py-2 text-white bg-muesli hover:drop-shadow-caper rounded-full">Follow us on Instagram <i class="ml-3 fa-solid fa-arrow-right"></i></button>
            </div>

            <div class="">
                <p class="text-center text-3xl font-bold text-muesli">Coming Soon...</p>
            </div>
        </div>
    </div>

@endsection
