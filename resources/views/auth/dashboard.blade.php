@extends('auth.layouts')

@section('content')
@if ($message = Session::get('success'))
    {{ $message }}
@else
    echo "You are logged in!";
@endif
@endsection