@extends('layouts.app')
@section('content')
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 m-2">
        <div class="w-full block">
            @include('inc.searchbar')
        </div>
    </div>
    <div class="m-8">
        <div class="border flex-grow my-auto border-muesli border mb-16"></div>
            <div class="bg-black-white">
                <div class="m-8 py-2">
                    <div class="flex content-stretch min-[320px]:mt-16 justify-center">
                        <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-bold text-black">Contact Us</h1>
                    </div>
                    <div class="grid pt-8 min-[320px]:grid-cols-1 md:grid-cols-2 items-start">
                        <div class="h-[80%] max-w-full mx-4">
                            <img src="/assets/images/img-3.jpg" class="h-full w-full">
                        </div>

                        <form action="/admin/message" method="POST">
                            @csrf
                            <div class="border-2 border-black max-w-full mx-4 px-8 pt-12 pb-8 h-[80%] overflow-y-auto">
                                <div class="flex-1 overflow-x-auto">
                                    <div class="grid grid-cols-2">
                                        <div class="border-r-2 border-black pr-8 py-8 px-4">
                                            <div class="py-2">
                                                <label for="fullname" class="font-bold text-black text-xl">Full Name:</label>
                                                <input type="text" id="fullname" name="sender_name" class="w-full bg-transparent border-none">
                                                <hr class="w-full border-none bg-black h-0.5 mt-1">
                                            </div>
                                            <div class="py-2">
                                                <label for="email" class="font-bold text-black text-xl">Email Address:</label>
                                                <input type="email" id="email" name="sender_email" class="w-full bg-transparent border-none">
                                                <hr class="w-full border-none bg-black h-0.5 mt-1">
                                            </div>
                                            <div class="py-2">
                                                <label for="subject" class="font-bold text-black text-xl">Subject:</label>
                                                <input type="text" id="subject" name="subject" class="w-full bg-transparent border-none">
                                                <hr class="w-full border-none bg-black h-0.5 mt-1">
                                            </div>
                                        </div>
                                        <div class="py-8 px-4 pl-8">
                                            <div class="py-2">
                                                <label for="contact" class="font-bold text-black text-xl">Contact:</label>
                                                <p id="contact" class="text-black">greenap@gmail.com</p>
                                            </div>
                                            <div class="py-2">
                                                <label for="address" class="font-bold text-black text-xl">Based In:</label>
                                                <p id="address" class="text-black">Metro Manila</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-2 px-4">
                                        <label for="message" class="font-bold text-black text-xl">Message:</label>
                                        <textarea id="message" name="message" class="w-full bg-transparent border-2 border-black mt-8" rows="5"></textarea>
                                    </div>
                                    <div class="pb-4 px-4">
                                        <button type="submit" class="mt-3 bg-muesli rounded-none px-4 py-2 text-black font-bold drop-shadow-coriander">Contact Us</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
