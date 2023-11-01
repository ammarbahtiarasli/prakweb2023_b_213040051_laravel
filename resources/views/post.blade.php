@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $post->title }}</h1>
<p>By. ammarbahtiarasli in <a href="/categories/{{ $post->category->slug }}" class="text-info-emphasis">{{ $post->category->name }}</a></p>

{!! $post->body !!}
    <a class="text-danger-emphasis" href="/posts">Back to Article</a>
@endsection
