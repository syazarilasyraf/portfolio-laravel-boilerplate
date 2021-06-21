@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tools")
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

<h1>Tools-android List</h1>
<p class="lead">All your tools-android. <a href="{{ route('admin.android.create') }}">Add a new one?</a></p>
<hr>

@foreach($android as $android)
    <h3>{{ $android->title }}</h3>
    <p>{{ $android->description}}</p>
    <p>{{ $android->link}}</p>
    <p>
        <a href="{{ route('admin.android.index', $android->id) }}" class="btn btn-info">View</a>
        <a href="{{ route('admin.android.edit', $amdroid->id) }}" class="btn btn-primary">Edit</a>
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
