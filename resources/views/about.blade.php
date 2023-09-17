@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Ini Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $photo }}" alt="{{ $nama }}" width="200">
</div>
@endsection
