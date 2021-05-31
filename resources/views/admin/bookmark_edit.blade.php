@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Bookmark")
@endcomponent

<div class="container" style="margin-top:60px">

    <h1>Edit Bookmark - {{ $bookmark->title }} </h1>
    <p class="lead">Edit this bookmark below. <a href="{{ route('admin.bookmark.index') }}">Go back to all bookmarks.</a></p>
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

    {!! Form::model($bookmark, [
        'method' => 'PATCH',
        'route' => ['admin.bookmark.update', $bookmark->id]
    ]) !!}

    @csrf
    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <select id="myselect">
        <option value="">Click here to choose</option>
        <option value="Reading">Reading</option>
        <option value="Website">Website</option>
    </select>

    <br>
    <br>

    <div class="form-group">
        <input id="myinput" class="form-control" type="textarea" name="description">
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <br>

    {!! Form::submit('Update Bookmark', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <br>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['admin.bookmark.destroy', $bookmark->id]
    ]) !!}
        {!! Form::submit('Delete bookmark', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#myselect').on('change', function(){
  $('#myinput').val($(this).val());
})

$('#myselect').change();
</script>

    @stop
