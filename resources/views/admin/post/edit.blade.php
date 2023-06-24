@extends('layouts.app')

@section('content')
@if ($errors->count())
    @foreach ($errors as $err)
        {{ $err }}
    @endforeach
@endif
@foreach ($post->assets as $asset)
    <img src="{{ asset($asset->link) }}" style="width: 100px; height: 100px;">
@endforeach
<p>Revisions: {{ $post->revisions }}</p>
<form action="/admin/post/{{ $post->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="user_id" value="1">
    <input type="text" name="title" value="{{ $post->title }}"><br>
    <textarea name="description">{{ $post->description }}</textarea><br>

    <small>status</small>
    <input type="checkbox" name="status" {{ $post->status ? 'checked' : '' }} value="1"><br>

    <small>visibility</small>
    <input type="checkbox" name="visibility" {{ $post->visibility ? 'checked' : '' }} value="1"><br>
    <input type="file" name="images[]" multiple accept="images/*"><br>

    <button type="submit">submit</button>
</form>

<form action="/admin/post/{{ $post->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button>
</form>
@endsection
