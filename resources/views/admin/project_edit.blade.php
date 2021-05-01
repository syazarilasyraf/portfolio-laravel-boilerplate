@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Project")
@endcomponent

<div class="container" style="margin-top:60px">

<p class="lead">Edit this Project below. <a href="{{ route('admin.project.index') }}">Go back to all Projects.</a></p>
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

{!! Form::model($project, [
    'method' => 'PATCH',
    'route' => ['admin.project.update', $project->id]
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

{!! Form::submit('Update Project', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['admin.project.destroy', $project->id]
]) !!}

<br>

    {!! Form::submit('Delete Project', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

</div>

@stop
