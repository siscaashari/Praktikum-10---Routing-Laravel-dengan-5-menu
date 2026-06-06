@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <form>
        <div>
            <label>Site Name:</label><br>
            <input type="text" value="Praktikum 10">
        </div>
        <div>
            <label>Admin Email:</label><br>
            <input type="email" value="admin@example.com">
        </div>
        <button type="submit">Save Settings</button>
    </form>
    <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
@endsection
