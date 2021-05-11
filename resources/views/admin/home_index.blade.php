@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Home")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Home List</h1>
<p class="lead">All your homes. <a href="{{ route('admin.home.create') }}">Add a new one?</a></p>
<hr>

@foreach($home as $home)
    <h3>{{ $home->greeting }}</h3>
    <h3>{{ $home->title }}</h3>
    <p>{{ $home->description}}</p>
    <p>
        <a href="{{ route('admin.home.index', $home->id) }}" class="btn btn-info">View home</a>
        <a href="{{ route('admin.home.edit', $home->id) }}" class="btn btn-primary">Edit home</a>
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
