@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tools-Web")
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

    <h1>Tools-Web List</h1>
    <p class="lead">All your web tools. <a href="{{ route('admin.web.create') }}">Add a new one?</a></p>
    <hr>

    @foreach($web as $web)
        <h3>{{ $web->title }}</h3>
        <p>{{ $web->description}}</p>
        <p>{{ $web->link}}</p>
        <p>
            <a href="{{ route('admin.web.index', $web->id) }}" class="btn btn-info">View</a>
            <a href="{{ route('admin.web.edit', $web->id) }}" class="btn btn-primary">Edit</a>
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
