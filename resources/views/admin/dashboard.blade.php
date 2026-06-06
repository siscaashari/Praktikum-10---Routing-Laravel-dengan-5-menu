@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p>Welcome to Admin Panel</p>
    <h3>Statistics:</h3>
    <ul>
        <li>Total Visitors: 1,234</li>
        <li>Total Messages: 56</li>
    </ul>
    <a href="{{ route('admin.settings') }}">Go to Settings</a>
@endsection
