@extends('base')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f8f9fa";>
    <div class="card shadow-lg p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Register</h3>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form method="POST" action="{{ route('auth.userRegister') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter name">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <a href="{{ route('auth.index') }}" class="d-block text-center mt-3">Go back to login</a>


    </div>
</div>
@endsection
