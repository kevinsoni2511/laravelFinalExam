@extends('layout')

@section('content')

<h1>Hello</h1>

<br>
<br>
<!-- Logout -->
<form method="POST" action="{{ route('logout') }}" style="float:left;">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection