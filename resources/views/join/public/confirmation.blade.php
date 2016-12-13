@extends('layout-public')

@section('title')
    Join
@endsection

@section('content')
    <div class="content container">
        <h2>Your application has been sent</h2>
        <p>We have sent an acknowledgment email to <strong>{{ $form['email'] }}</strong>. It can take up to 2 weeks to process. You will either receive an approved or declined email.</p>
    </div>
@endsection
