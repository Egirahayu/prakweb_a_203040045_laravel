<?php 
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Post Category : {{ $category }}</h1>

  @foreach ($posts as $post)
    <article>
      <h2>
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        <p>{{ $post->excerpt }}</p>
      </h2>
    </article>
  @endforeach

@endsection