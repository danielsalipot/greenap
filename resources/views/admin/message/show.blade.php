@extends('layouts.admin')

@section('content')
    {{ json_encode($message) }}

    <form action="/admin/messages/reply" method="POST">
        @csrf
        <br>

        <input type="hidden" name="message_id" value="{{ $message->id }}">
        <input type="hidden" name="recepient" value="{{ $message->sender_email }}">

        <input type="text" name="subject" required>
        <br>
        <textarea name="reply" required></textarea>
        <br>
        <button>Send</button>
    </form>
@endsection
