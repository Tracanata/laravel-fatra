@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h3>{{ $post["author"] }}</h3>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/posts">Bact To Posts</a>
@endsection