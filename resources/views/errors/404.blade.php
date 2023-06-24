{{--@extends('errors::minimal')--}}

{{--@section('title', __('Not Found'))--}}
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}

@extends('layouts.app')
@section('content')
    <div class="w-full items-center flex">
        <h1 class="text-4xl text-caper font-extrabold font-hind">
            404 Page Not Found
        </h1>
        <button class=" mt-3 bg-muesli rounded-none  px-4 py-2 text-white drop-shadow-coriander">Sample Button</button>
    </div>
@endsection
