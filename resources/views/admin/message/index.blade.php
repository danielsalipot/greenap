@extends('layouts.admin')

@section('content')
    @foreach ($messages as $message)
    <div style="border:1px solid black; margin:10px">
        {{ $message }}
        <br>
        <a href="./messages/{{ $message->id }}">Reply</a>
    </div>
    @endforeach
@endsection
