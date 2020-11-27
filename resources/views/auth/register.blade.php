@extends('layouts.layouts')

@section('content')
<form action="{{ route('register') }}" method="POST" class="w-3/6 block m-auto">
    @csrf
    <div class="field">
        <div class="control">
            <label for="name" class="label">Name</label>
            <input type="text" name="username" id="username" class="input @error('username') is-danger @enderror" placeholder="Name" value="{{ old('username') }}">
        </div>
        <span class="text-red-500">
        @error('username')
            {{ $message }}
        @enderror
        </span>
    </div>
    <div class="field">
        <div class="control">
            <label for="email" class="label">Email</label>
            <input type="email" name="email" id="email" class="input @error('email') is-danger @enderror" placholder="Email" value="{{ old('email') }}">
        </div>
        <span class="text-red-500">
        @error('email')
            {{ $message }}
        @enderror
        </span>
    </div>
    <div class="field">
        <div class="control">
            <label for="password" class="label">Password</label>
            <input type="password" name="password" id="password" class="input @error('password') is-danger @enderror" placholder="Password">
        </div>
        <span class="text-red-500">
        @error('password')
            {{ $message }}
        @enderror
        </span>
    </div>
    <div class="field">
        <div class="control">
            <label for="password_confirmation" class="label">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="input" placholder="Confirm Password">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-small">Sign up</button>
        </div>
    </div>
</form>
@endsection