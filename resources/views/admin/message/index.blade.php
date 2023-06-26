@extends('layouts.admin')

@section('content')
    @foreach ($messages as $message)
        {{ $message }}
    @endforeach
@endsection
