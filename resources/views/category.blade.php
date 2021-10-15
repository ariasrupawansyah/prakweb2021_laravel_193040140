@extends('layouts.main')

@section('container')
    
    <!-- Aria Rupawansyah - 193040140 -->

    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>By: {{ $post->author }}</h5>
            {{ $post->excerpt }}
        </article>
    @endforeach

@endsection