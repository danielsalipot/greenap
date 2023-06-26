@extends('layouts.admin')

@section('content')
    @foreach ($sponsors as $sponsor)
        {{ $sponsor->name }}
        <img src="{{ asset($sponsor->logo) }}" style="width: 50px; height:50px;">
    @endforeach
@endsection
