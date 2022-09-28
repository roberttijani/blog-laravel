@extends('layouts.app')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>


    <a href="/posts">Back to Posts</a>
@endsection
