@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"AMA")
@endcomponent


<div class="container" style="margin-top:60px">

{{-- <h1>{{ $question->question }} </h1> --}}
<p class="lead">Answer this question below. <a href="{{ route('admin.ama.index') }}">Go back to all questions.</a></p>
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

{!! Form::model($question, [
    'method' => 'POST',
    'route' => ['admin.ama.store', $question->id]
]) !!}

@csrf
<div class="form-group">
    {!! Form::label('answer', 'Answer:', ['class' => 'control-label']) !!}
    <input type="hidden" name="question_id" value="{{ $question->id }}">
    {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
</div>

<br>

{!! Form::submit('Answer!', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<br>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['admin.ama.destroy', $question->id]
]) !!}
    {!! Form::submit('Delete question', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

</div>

@stop

