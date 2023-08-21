@extends('layouts.admin')

@section('content')
    <a href="/admin/facebook/refresh" style="color: blue;"><u>Refresh Data</u></a>
    <br><br>
    @foreach ($posts as $post)
        {{ json_encode($post) }}
        <br>
        <br>
    @endforeach
@endsection
