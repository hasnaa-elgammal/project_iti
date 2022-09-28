@extends('layouts.authlayout')
@section('title')
Register
@endsection

@section('head')
REGISTER
@endsection

@section('form')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                name="first_name" placeholder="First Name" required value="{{ old('first_name') }}">
            @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
            placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
            placeholder="Address" required value="{{ old('address') }}">
        @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="birth_date">Birth Date</label>
        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date"
            name="birth_date" required value="{{ old('birth_date') }}">
        @error('birth_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
            name="password" placeholder="Password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password-confirm">Confirm Password</label>
        <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
            placeholder="Password Confirmation" required autocomplete="new-password">
    </div>
    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn">Register</button>
        </div>
    </div>
    <div class="text">
        <span>Already have an account?</span>
        <a href="/login">Log In</a>
    </div>
</form>
@endsection
