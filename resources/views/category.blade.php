@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category :{{ $category }}</h1>

@foreach ($posts as $post)
<article class="mb-5">
<<<<<<< HEAD
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>
=======
  <h2>
    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
  </h2>
  <p>{{ $post->excerpt }}</p>
>>>>>>> b1c44885432746e55a5059de0447ef8f650994e6
</article>
@endforeach

@endsection