@extends('layouts.app')

@section('content')
    <h1>{{ $title ?? 'Services' }}</h1>
    <ul>
        <li>Web Development</li>
        <li>Mobile Apps</li>
        <li>UI/UX Design</li>
    </ul>
@endsection
