@extends('layouts.authlayout')
@section('title')
Login
@endsection

@section('head')
LOGIN
@endsection

@section('form')
<form>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn">Log in</button>
        </div>
        <div class="text lead">
            <span>Don't have an account?</span>
            <a href="#">Sign Up</a>
        </div>
    </div>
</form>
@endsection
