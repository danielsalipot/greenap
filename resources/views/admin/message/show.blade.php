@extends('layouts.admin')

@section('content')
    <article class="p-4 mx-4 text-base drop-shadow-caper bg-white rounded-lg dark:bg-gray-900 border-muesli border-2 ">
        <div class="flex items-center mb-3">
            <p class="inline-flex items-center mr-3 text-sm text-muesli font-bold"><img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="{{$message->sender_name}}">{{$message->sender_name}}</p>
                    <div class=" border-r-2 border-muesli"></div>
            <p class="text-xs text-sisal-darker"><time 
                title="{{$message->created_at}}">{{\Carbon\Carbon::create($message->created_at)->toDayDateTimeString()}}</time></p>
        </div>
        <div class="m-4">
            <div class="mb-8">
                <p class="text-muesli font-bold">{{$message->subject}}</p>
            <p class="text-muesli text-sm my-4">{{$message->message}}</p>

            </div>
            <div class="border-b-2 border-dashed border-muesli mb-12"></div>
            <div class="relative">
                <form action="/admin/message/reply" method="POST">
                    @csrf
                    <input type="hidden" name="message_id" value="{{ $message->id }}">
                    <input type="hidden" name="recepient" value="{{ $message->sender_email }}">
                    
                    <div class="sm:col-span-2 border-2 border-caper rounded-lg p-6">
                        <label 
                            for=""
                            class="absolute top-[-10px] left-[10px] bg-white px-2 flex items-center font-bold text-base text-caper mb-2">
                            <i class="fa-solid fa-reply me-2"></i>
                            Write a Reply
                        </label>
                        <div class="mb-2">
                            <label 
                                for="subject"
                                class="flex items-center font-bold text-sm text-caper mb-2">
                                <i class="fa-solid fa-at me-2"></i>
                                Subject
                            </label>
                            <input type="text" name="subject" id="subject"  class="block p-2.5 w-full text-sm text-muesli rounded-lg border-2 placeholder:text-coriander border-muesli  focus:ring-0 focus:border-caper" placeholder="Enter subject here">
                        </div>
                        <div class="">
                            <label 
                                for="reply"
                                class="flex items-center font-bold text-sm text-caper mb-2">
                                <i class="fa-regular fa-comment-dots me-2"></i>
                                Message
                            </label>
                            <textarea id="reply" name="reply" rows="4" class="block p-2.5 w-full text-sm text-muesli rounded-lg border-2 placeholder:text-coriander border-muesli  focus:ring-0 focus:border-caper " placeholder="Write your message here"></textarea>                    
                        </div>
                        <button class="mt-3 lg:w-56 sm:w-full min-[320px]:w-full text-sm font-bold text-white bg-muesli rounded-lg hover:drop-shadow-caper p-2 "><i class="fa-regular fa-paper-plane me-1"></i> Send </button>
                    </div>
                </form>
            </div>
        </div>
    </article>
@endsection
