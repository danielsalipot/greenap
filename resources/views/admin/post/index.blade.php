@extends('layouts.app')
@section('content')
    <div class="lg:w-1/3 min-[320px]:w-full">
        @include('inc.searchbar')
    </div>
    <div class="m-8">
        <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
            <div class="border flex-grow my-auto border-muesli border"></div>
            <h1 class="lg:text-7xl min-[320px]:text-4xl ml-8 font-bold text-muesli">Posts</h1>
        </div>


    </div>

@endsection
