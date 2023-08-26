@extends('layouts.admin')

@section('content')
    <a href="/admin/facebook/refresh" style="color: blue;"><u>Refresh Data</u></a>
    <br><br>

        @if($posts !== null)
            @foreach ($posts as $post)
            {{ json_encode($post) }}
            <br>
            <br>
            @endforeach
        @else
            no data
        @endif
@endsection
