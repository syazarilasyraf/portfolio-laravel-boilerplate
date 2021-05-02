@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"About")
@endcomponent

<div class="container" style="margin-top:60px">

    <h1>About List</h1>
    <p class="lead">All your abouts. <a href="{{ route('admin.about.create') }}">Add a new one?</a></p>
    <hr>

    @foreach($about as $about)
        <img src="{{ asset('images/' . $about->image) }}" />
        <p>{{ $about->description}}</p>
        <p>
            <a href="{{ route('admin.about.index', $about->id) }}" class="btn btn-info">View about</a>
            <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-primary">Edit about</a>
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
