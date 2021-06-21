@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tools-Windows")
@endcomponent

<div class="container" style="margin-top:60px">

    <p>
        <a class="btn btn-primary" href="/admin/tools">
            All
        </a>
        <a class="btn btn-primary" href="/admin/windows">
            Windows
        </a>
        <a class="btn btn-primary" href="/admin/android">
            Android
        </a>
        <a class="btn btn-primary" href="/admin/web">
            Web
        </a>
    </p>

    <h1>Tools-Window List</h1>
    <p class="lead">All your windows tools. <a href="{{ route('admin.windows.create') }}">Add a new one?</a></p>
    <hr>

    @foreach($window as $window)
        <h3>{{ $window->title }}</h3>
        <p>{{ $window->description}}</p>
        <p>{{ $window->link}}</p>
        <p>
            <a href="{{ route('admin.windows.index', $window->id) }}" class="btn btn-info">View</a>
            <a href="{{ route('admin.windows.edit', $window->id) }}" class="btn btn-primary">Edit</a>
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
