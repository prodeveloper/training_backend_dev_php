@extends('layouts.base')

@section('content')
<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div  class="input-group">
        Name
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="input-group">
        Email
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div class="input-group">
        Password
        <input type="password" class="form-control" name="password">
    </div>

    <div class="input-group">
        Confirm Password
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection
