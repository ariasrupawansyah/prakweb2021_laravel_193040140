@extends('layouts.main')

@section('container')
    
    <!-- Aria Rupawansyah - 193040140 -->

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