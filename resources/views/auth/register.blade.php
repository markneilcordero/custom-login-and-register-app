@extends('auth.layouts')

@section('content')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        
        <input type="email" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <input type="password" name="password_confirmation" placeholder="Confirm Password">

        <input type="submit" value="Register">
    </form>
@endsection