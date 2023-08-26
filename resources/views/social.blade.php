@extends('layouts.app')
@section('content')

    <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
        <h1 class="lg:text-6xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Social Media</h1>
        <div class="border flex-grow my-auto border-muesli"></div>
    </div>

    <div class="my-8">
        <div class="my-8">
            <h1 class="lg:text-6xl min-[320px]:text-4xl mx-8 text-right font-extrabold text-muesli"><i class="fa-brands fa-facebook me-3"></i>Facebook</h1>
            <button onclick="window.location.href = ''" class="bg-muesli justify-between flex items-center rounded-none px-4 py-2 text-white hover:drop-shadow-caper">Follow our Facebook Page<i class="ml-3 fa-solid fa-arrow-right"></i></button>
        </div>
        
        <div class="my-8">
            <h1 class="lg:text-6xl min-[320px]:text-4xl mx-8 font-extrabold text-muesli"><i class="fa-brands fa-instagram me-3"></i>Instagram</h1>
        </div>
    </div>

@endsection
