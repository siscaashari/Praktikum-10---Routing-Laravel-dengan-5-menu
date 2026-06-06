@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    
    @if(session('success'))
        <div style="color: green; background: #d4edda; padding: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div>
            <label>Name:</label><br>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Message:</label><br>
            <textarea name="message" required rows="4"></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
@endsection
