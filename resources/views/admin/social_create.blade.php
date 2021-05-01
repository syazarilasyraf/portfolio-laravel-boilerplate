@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Social")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Add a New Social Link</h1>
<p class="lead">Add to your Social link list below.</p>
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

<form action="{{ route('admin.social.store') }}" method="POST" role="form" >
@csrf
<div class="form-group">
    <label>Github</label>
    <input name="github" type="text" class="form-control" placeholder="Enter Github profile URL">
</div>
<div class="form-group">
    <label>Twitter</label>
    <input name="twitter" type="text" class="form-control" placeholder="Enter Twitter Profile URL">
</div>
<div class="form-group">
    <label>Linkedin</label>
    <input name="linkedin" type="text" class="form-control" placeholder="Enter Linkedin Profile URL">
</div>
<div class="form-group">
    <label>Email</label>
    <input name="email" type="text" class="form-control" placeholder="Enter Email Url">
</div>

<br>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>

</div>

@stop
