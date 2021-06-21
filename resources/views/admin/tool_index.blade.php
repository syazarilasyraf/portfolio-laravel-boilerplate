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

<h1>Tools List</h1>
<p class="lead">All your tools. <a href="{{ route('admin.tools.create') }}">Add a new one?</a></p>
<hr>

@foreach($tool as $tool)
    <h3>{{ $tool->title }}</h3>
    <p>{{ $tool->description}}</p>
    <p>{{ $tool->link}}</p>
    <p>
        <a href="{{ route('admin.tools.index', $tool->id) }}" class="btn btn-info">View tool</a>
        <a href="{{ route('admin.tools.edit', $tool->id) }}" class="btn btn-primary">Edit tool</a>
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
