<?php 
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

@extends('layouts.main')

@section('container')
  
  @foreach ($posts as $post)
    <article class="mt-5 mb-5">
      <h2>
        <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
      </h2>
      <h5>By : {{ $post["author"] }}</h5>
      <p>{{ $post["body"] }}</p>
    </article>
  @endforeach

@endsection