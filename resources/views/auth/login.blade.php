@extends('layouts.layouts')

@section('content')
<form action="{{ route('login') }}" method="POST" class="w-3/6 block m-auto">
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
            <label for="password" class="label">Password</label>
            <input type="password" name="password" id="password" class="input @error('password') is-danger @enderror" placeholder="Password" >
        </div>
        <span class="text-red-500">
            @error('password')
                {{$message}}
            @enderror
        </span>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-small">Log In</button>
        </div>
    </div>
</form>
@endsection