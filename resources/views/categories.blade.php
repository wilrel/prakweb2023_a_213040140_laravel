@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

@foreach ($categories as $category)
<article class="mb-5">
<<<<<<< HEAD
    <ul>
        <li>
            <h2>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h2>
        </li>
    </ul>
=======
  <ul>
    <li>
      <h2>
        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
      </h2>
    </li>
  </ul>
>>>>>>> b1c44885432746e55a5059de0447ef8f650994e6
</article>
@endforeach

@endsection