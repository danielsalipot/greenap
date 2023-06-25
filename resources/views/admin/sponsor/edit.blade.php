@extends('layouts.app')

@section('content')
<form action="/admin/sponsor/{{ $sponsor->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input type="text" name="name" value="{{ $sponsor->name }}"><br>
    <textarea name="description">{{ $sponsor->description }}</textarea><br>
    <select name="tier">
        <option value="partner" {{ $sponsor->tier == 'partner' ? 'checked' : '' }}>Industry Partner</option>
        <option value="member" {{ $sponsor->tier == 'member' ? 'checked' : '' }}>Corporate Member</option>
    </select><br>
    <input type="file" name="logo" accept="images/*"><br>
    <button type="submit">submit</button>
</form>

<form action="/admin/sponsor/{{ $sponsor->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection
