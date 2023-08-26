@extends('layouts.app')
@section('content')

    <div class="m-8">
        <div class="bg-black-white">
            <div class="m-8">
                <h1 class="lg:text-6xl min-[320px]:text-4xl mb-10 font-extrabold text-muesli text-right">Contact Us</h1>
                <div class="grid justify-items-center items-center gap-x-8 lg:grid-cols-2 min-[320px]:grid-cols-1 md:grid-cols-2 ">
                    <div class="  object-cover">
                        <img src="/assets/images/ga-team-3.jpg" class="rounded-[20px]">
                    </div>

                    <form action="/admin/message" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-x-8">
                            <div class="  py-8 ">
                                <div class="py-2">
                                    <label for="fullname" class="font-bold text-muesli text-xl">Full Name:</label>
                                    <input type="text" id="fullname" name="sender_name" class="w-full bg-transparent border-none">
                                    <hr class="w-full border-none bg-muesli h-0.5 mt-1">
                                </div>
                                <div class="py-2">
                                    <label for="email" class="font-bold text-muesli text-xl">Email Address:</label>
                                    <input type="email" id="email" name="sender_email" class="w-full bg-transparent border-none">
                                    <hr class="w-full border-none bg-muesli h-0.5 mt-1">
                                </div>
                                <div class="py-2">
                                    <label for="subject" class="font-bold text-muesli text-xl">Subject:</label>
                                    <input type="text" id="subject" name="subject" class="w-full bg-transparent border-none">
                                    <hr class="w-full border-none bg-muesli h-0.5 mt-1">
                                </div>
                            </div>
                            <div class="py-8">
                                <div class="mb-3">
                                    <label for="contact" class="font-bold text-muesli text-xl">Contact:</label>
                                    <div class="block gap-y-3">
                                        <p id="contact" class="text-muesli"><i class="fa-solid fa-envelope mr-2"></i> sustainability@greenap-ph.com</p>
                                        <a href="www.greenap-ph.com" id="contact" class="text-muesli "><i class="fa-solid fa-globe mr-2"></i> www.greenap-ph.com</a>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <label for="address" class="font-bold text-muesli text-xl">Based In:</label>
                                    <p id="address" class="text-muesli">15 Maayusin St., UP Village Quezon City, Philippines</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label for="message" class="font-bold text-muesli text-xl">Message:</label>
                            <textarea id="message" name="message" class="w-full bg-transparent mt-8 " rows="5"></textarea>
                        </div>
                        
                            
                        <div class="">
                            <button type="submit" class="mt-3 w-full bg-muesli rounded-none px-4 py-2 text-white font-bold hover:drop-shadow-caper">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
