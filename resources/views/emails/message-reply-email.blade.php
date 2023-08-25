@extends("emails.template.basic-email-template")

@section('content')
<h1>{{ $subject }}</h1>
<p>{{ $message_data }}</p>
    {{ $reply  }}
@endsection
