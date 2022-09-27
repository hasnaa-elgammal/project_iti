@extends('layouts.authlayout')
@section('title')
Register
@endsection

@section('head')
REGISTER
@endsection

@section('form')
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="birthdate">Birth Date</label>
        <input type="date" class="form-control" id="birthdate" name="birthdate">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn">Register</button>
        </div>
    </div>
    <div class="text lead">
        <span>Already have an account?</span>
        <a href="#">Log In</a>
    </div>
</form>
@endsection
