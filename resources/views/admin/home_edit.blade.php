@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Home")
@endcomponent

<div class="container" style="margin-top:60px">

<h1>Edit Home - {{ $home->greeting }} </h1>
<p class="lead">Edit this homr below. <a href="{{ route('admin.home.index') }}">Go back to all homes.</a></p>
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

{!! Form::model($home, [
    'method' => 'PATCH',
    'route' => ['admin.home.update', $home->id]
]) !!}

@csrf
<div class="form-group">
    {!! Form::label('greeting', 'Greeting', ['class' => 'control-label']) !!}
    {!! Form::text('greeting', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<br>

{!! Form::submit('Update Home', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<br>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['admin.home.destroy', $home->id]
]) !!}
    {!! Form::submit('Delete home', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

</div>

@stop

