@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Project")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Add a New Project</h1>
<p class="lead">Add to your Project list below.</p>
<hr>

@if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif

<form action="{{ route('admin.project.store') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="control-label" for="title">Image</label>
        <input class="form-control" type="file" name="image">
    </div>

    <div class="form-group">
        <label class="control-label" for="title">Title</label>
        <input class="form-control" type="text" name="title" placeholder="Title">
    </div>

    <div class="form-group">
        <label class="control-label" for="description">Description</label>
        <input class="form-control" type="textarea" name="description" placeholder="Description">
    </div>

    <br>

    <button class="btn-primary btn">
        Submit
    </button>
</form>

</div>

@stop
