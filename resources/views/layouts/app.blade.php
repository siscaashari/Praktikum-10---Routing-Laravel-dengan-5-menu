<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Praktikum 10' }}</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        .container { max-width: 800px; margin: auto; }
        .nav { margin-bottom: 20px; }
        .nav a { margin-right: 15px; text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('profile', ['name' => 'User']) }}">Profile</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact.form') }}">Contact</a>
            <a href="{{ route('admin.dashboard') }}">Admin</a>
        </div>
        <hr>
        @yield('content')
    </div>
</body>
</html>
