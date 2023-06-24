{{--@extends('errors::minimal')--}}

{{--@section('title', __('Not Found'))--}}
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}

@extends('layouts.app')
@section('content')
    <div class="w-full text-center h-screen">
        <h1 class="text-4xl text-caper font-extrabold">
            404 Page Not Found
        </h1>
        <a href="/" class="block hover:underline text-muesli font-bold underline-offset-8 decoration-2 py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:hover:text-caper  md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Go Home</a>
    </div>
@endsection
