@extends('layouts.app')

@section('content')
<form action="/admin/post" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value="1">
    <input type="text" name="title">
    <textarea name="description"></textarea>
    <input type="file" name="images[]" multiple accept="images/*">
    <button type="submit">submit</button>
</form>
@endsection
