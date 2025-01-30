@extends('layouts.app')

@section('content')
    <h1>User Profile</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <!-- Display user details here -->
@endsection
