@extends('auth.layouts')

@section('content')
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <input type="submit" value="Login">
    </form>
@endsection