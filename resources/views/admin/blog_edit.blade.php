@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Blog")
@endcomponent

<div class="container" style="margin-top:60px">

{{-- <h1>Edit Task - {{ $blog->title }} </h1> --}}
<p class="lead">Edit this task below. <a href="{{ route('admin.blog.index') }}">Go back to all tasks.</a></p>
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

{!! Form::model($blog, [
    'method' => 'PATCH',
    'route' => ['admin.blog.update', $blog->id]
]) !!}

@csrf
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<br>

{!! Form::submit('Update Blog', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<br>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['admin.blog.destroy', $blog->id]
]) !!}
    {!! Form::submit('Delete blog', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

</div>

@stop

