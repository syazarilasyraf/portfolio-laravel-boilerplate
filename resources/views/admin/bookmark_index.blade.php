@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Bookmark")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Bookmark List</h1>
<p class="lead">All your bookmark. <a href="{{ route('admin.bookmark.create') }}">Add a new one?</a></p>
<hr>

@foreach($bookmark as $bookmark)
    <h3>{{ $bookmark->title }}</h3>
    <p>{{ $bookmark->description}}</p>
    <p>
        <a href="{{ route('admin.bookmark.index', $bookmark->id) }}" class="btn btn-info">View bookmark</a>
        <a href="{{ route('admin.bookmark.edit', $bookmark->id) }}" class="btn btn-primary">Edit bookmark</a>
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
