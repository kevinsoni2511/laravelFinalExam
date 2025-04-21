@extends('layout')

@section('content')
<br>
<br>
<div style="display: flex; justify-content: center; gap: 40px;">
    <div style="text-align: center;">
        <img src="{{ asset('asset/1.jpg') }}" alt="product_1" width="300px" height="300px">
        <h2>EarBud</h2>
        <h3>Price: $100</h3>
        <button>Buy</button>
    </div>

    <div style="text-align: center;">
        <img src="{{ asset('asset/1.jpg') }}" alt="product_1" width="300px" height="300px">
        <h2>EarBud</h2>
        <h3>Price: $100</h3>
        <button>Buy</button>
    </div>

    <div style="text-align: center;">
        <img src="{{ asset('asset/1.jpg') }}" alt="product_1" width="300px" height="300px">
        <h2>EarBud</h2>
        <h3>Price: $100</h3>
        <button>Buy</button>
    </div>
</div>

<br>
<br>
<!-- Logout -->
<form method="POST" action="{{ route('logout') }}" style="float:left;">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
