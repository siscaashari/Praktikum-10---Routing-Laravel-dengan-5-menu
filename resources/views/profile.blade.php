@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <h2>Hello, {{ $name }}!</h2>
    <p>Ini adalah halaman profile dengan route parameter.</p>
@endsection
