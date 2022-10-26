<?php 
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h2>

    {!! $post->body !!}

    <a href="/blog">Back to Posts</a>
  @endsection