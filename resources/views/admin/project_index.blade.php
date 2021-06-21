@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Project")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Project List</h1>
<p class="lead">All your Projects. <a href="{{ route('admin.project.create') }}">Add a new one?</a></p>
<hr>

@foreach($project as $project)
    {{-- <img src="{{ asset('images/' . $project->image) }}" /> --}}
    <h3>{{ $project->title }}</h3>
    <p>{{ $project->link}}</p>
    <p>{{ $project->description}}</p>

    <p>
        <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-info">View Project</a>
        <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-primary">Edit Project</a>
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
