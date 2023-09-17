@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-3">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <a href="/post?category={{ $category->slug }}">
                    <div class="card bg-dark text-white border-0 shadow">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-5" style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
