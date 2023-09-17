@extends('dashboard.layouts.main')


@section('content')
<div class="container mt-4">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-info"><span data-feather="arrow-left"></span> Back to All Post</a>
                <a href="" class="btn btn-warning "><span data-feather="edit"></span> Edit Post</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Sure to delete the post?')"><span data-feather="x-circle"></span> Delete Post</button>
                </form>
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
            </div>
        </div>
    </div>
</div>
@endsection
