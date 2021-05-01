@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Social links")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Social List</h1>
<p class="lead">All your Social links. <a href="{{ route('admin.social.create') }}">Add a new one?</a></p>
<hr>

@foreach($socials as $social)
<p>{{ $social->github}}</p>
<p>{{ $social->linkedin}}</p>
<p>{{ $social->twitter}}</p>
<p>{{ $social->email}}</p>

<p>
    <a href="{{ route('admin.social.index', $social->id) }}" class="btn btn-info">View Social links</a>
    <a href="{{ route('admin.social.edit', $social->id) }}" class="btn btn-primary">Edit Social links</a>
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
