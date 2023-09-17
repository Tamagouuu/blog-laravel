@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By <a href="/blog?author={{$post->author->username}}" class=" text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden" class="mt-3">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3 ">
                @endif

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="btn btn-danger">Back to Posts</a>
            </div>
        </div>
    </div>
</div>
@endsection
