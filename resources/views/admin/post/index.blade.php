@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        {{ $post->title }}
        @foreach ($post->assets as $asset)
            <img src="{{ asset($asset->link) }}" style="height: 100px; width:100px;">
        @endforeach
        <br>
    @endforeach
@endsection
