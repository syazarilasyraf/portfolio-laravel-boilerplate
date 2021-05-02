@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"About")
@endcomponent

<div class="container" style="margin-top:60px">

    <h1>Edit About - {{ $about->title }} </h1>
    <p class="lead">Edit this About below. <a href="{{ route('admin.about.index') }}">Go back to all Abouts.</a></p>
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

    {!! Form::model($about, [
        'method' => 'PATCH',
        'route' => ['admin.about.update', $about->id]
    ]) !!}

    @csrf
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <br>

    {!! Form::submit('Update About', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['admin.about.destroy', $about->id]
    ]) !!}

    <br>

        {!! Form::submit('Delete About', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    </div>

    @stop
