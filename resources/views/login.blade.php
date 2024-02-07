<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- Include Bootstrap CSS (you may need to adjust the path) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> 
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <form action="{{ route('Books.logincheck') }}" method="POST" class="was-validated" novalidate>
                @csrf
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="Username" name="Username" aria-describedby="usernameHelp" placeholder="Enter your username">
                    <small id="usernameHelp" class="form-text text-muted">Choose a unique username.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="Password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            <a href="{{ route('Books.signup') }}">signup</a>
            <a href="{{ url('login/facebook') }}">Login with Facebook</a>
            <a href="{{ url('login/google') }}">Login with Google</a>
            </div>
        </div>
    </div>

   
</body>
</html>
@endsection


