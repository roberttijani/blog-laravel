@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Halaman Blog Posts</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in {{ $post->author }} <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach

@endsection
