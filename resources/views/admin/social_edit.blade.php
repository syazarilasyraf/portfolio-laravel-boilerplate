@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Social")
@endcomponent

<div class="container" style="margin-top:60px">

<p class="lead">Edit this socials links below. <a href="{{ route('admin.social.index') }}">Go back to all socials links.</a></p>
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

{{-- <form action="{{ route('admin.social.update', $social) }}" method="PATCH" role="form" >
    @csrf
    <div class="form-group">
        <label>Github</label>
        <input type="text" class="form-control" placeholder="Enter Github profile URL">
    </div>
    <div class="form-group">
        <label>Twitter</label>
        <input type="text" class="form-control" placeholder="Enter Twitter Profile URL">
    </div>
    <div class="form-group">
        <label>Linkedin</label>
        <input type="text" class="form-control" placeholder="Enter Linkedin Profile URL">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Enter Email Url">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form> --}}

{!! Form::model($social, [
    'method' => 'PATCH',
    'route' => ['admin.social.update', $social->id]
]) !!}

@csrf
<div class="form-group">
    {!! Form::label( 'github', 'Github', ['class' => 'control-label']) !!}
    {!! Form::text( 'github', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label( 'twitter', 'Twitter', ['class' => 'control-label']) !!}
    {!! Form::text( 'twitter', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label( 'linkedin', 'Linkedin', ['class' => 'control-label']) !!}
    {!! Form::text( 'linkedin', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label( 'email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text( 'email', null, ['class' => 'form-control']) !!}
</div>

<br>

{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['admin.social.destroy', $social->id]
]) !!}

<br>

    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

</div>

@stop
