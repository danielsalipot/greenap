@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-black text-muesli mb-4">Messages</h1>
<div class="lg:flex lg:items-center sm:grid sm:grid-cols-1 ">
    <aside class="lg:w-1/2 sm:w-full">
        <div class="grid grid-cols-1 overflow-auto h-screen gap-4">
        @foreach ($messages as $message)
            <a href="./message/{{ $message->id }}">
                <article class="p-4 mx-4 text-base  hover:drop-shadow-caper bg-white rounded-lg dark:bg-gray-900 border-muesli border-2 ">
                    <div class="flex items-center mb-3">
                        <p class="inline-flex items-center mr-3 text-sm text-muesli font-bold"><img
                                class="mr-2 w-6 h-6 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                alt="{{$message->sender_name}}">{{$message->sender_name}}</p>
                                <div class=" border-r-2 border-muesli"></div>
                        
                    </div>
                    <div class="m-4">
                        <p class="text-muesli font-bold truncate">{{$message->subject}}</p>
                        <p class="text-muesli truncate text-sm">{{$message->message}}</p>
                        <p class="text-xs text-sisal-darker mt-4"><time 
                            title="{{$message->created_at}}">On
                            {{\Carbon\Carbon::create($message->created_at)->toDayDateTimeString()}}</time>
                        </p>
                        {{-- <div class=" border-b-2 border-muesli my-3"></div>
                        <div class="flex items-center mt-4 space-x-4">
                            <button type="button"
                                onclick="location.href='./message/{{ $message->id }}'"
                                class="flex items-center font-bold text-sm text-muesli hover:text-caper">
                                <i class="fa-regular fa-comment-dots me-2"></i>
                                Reply
                            </button>
                        </div> --}}
                    </div>
                </article>
            </a>
            
        @endforeach 
        
        </div>
    </aside>

    <main class="w-1/2">
        <div class="text-center">
            <i class="fa-regular fa-comment-dots font-bold text-muesli text-2xl"></i>
            <p class="font-bold text-muesli text-2xl text-center">
                Click on a message to show.
            </p>
        </div>
    </main>
</div>
@endsection

