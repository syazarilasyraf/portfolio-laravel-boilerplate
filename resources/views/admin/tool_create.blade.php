@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tool")
@endcomponent

<div class="container" style="margin-top:60px">

    <h1>Add a New Tool</h1>
    <p class="lead">Add to your tool list below.</p>
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

    <form action="{{ route('admin.tools.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" placeholder="Title">
        </div>

        <br>

        <div class="form-group">
            <label class="control-label" for="title">Link</label>
            <input class="form-control" type="text" name="link" placeholder="Link">
        </div>

        <br>

        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <br>

        <button class="btn-primary btn">
            Submit
        </button>
    </form>

</div>

@stop
