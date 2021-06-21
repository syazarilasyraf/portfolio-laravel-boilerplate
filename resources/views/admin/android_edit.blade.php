@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tools-Android")
@endcomponent

<div class="container" style="margin-top:60px">

    <h1>Edit Tools-android - {{ $android->title }} </h1>
    <p class="lead">Edit this tools-android below. <a href="{{ route('admin.android.index') }}">Go back to all tools-android.</a></p>
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

    {!! Form::model($android, [
        'method' => 'PATCH',
        'route' => ['admin.android.update', $android->id]
    ]) !!}

    @csrf
    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('link', 'Link:', ['class' => 'control-label']) !!}
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <br>

    {!! Form::submit('Update Tool-window', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <br>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['admin.android.destroy', $android->id]
    ]) !!}
        {!! Form::submit('Delete tool-android', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    </div>

    @stop
