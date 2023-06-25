@extends('layouts.app')

@section('content')
<form action="/admin/sponsor" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <textarea name="description"></textarea>
    <select name="tier">
        <option value="partner">Industry Partner</option>
        <option value="member">Corporate Member</option>
    </select>
    <input type="file" name="logo" accept="images/*">
    <button type="submit">submit</button>
</form>
@endsection
