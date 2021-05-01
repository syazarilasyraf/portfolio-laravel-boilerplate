@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Blog")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Blog List</h1>
<p class="lead">All your blogs. <a href="{{ route('admin.blog.create') }}">Add a new one?</a></p>
<hr>

@foreach($blog as $blog)
    <h3>{{ $blog->title }}</h3>
    <p>{{ $blog->description}}</p>
    <p>
        <a href="{{ route('admin.blog.index', $blog->id) }}" class="btn btn-info">View blog</a>
        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary">Edit blog</a>
    </p>
    <hr>

    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>

@endif

@endforeach

</div>

@stop
