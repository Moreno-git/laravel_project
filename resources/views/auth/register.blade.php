@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card auth-card">
            <div class="card-header">
                <h4 class="auth-title mb-0">Register</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>

                    <div class="text-center mt-4">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary">Login here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 