@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Bookmark")
@endcomponent

<div class="container" style="margin-top:60px">

    <h1>Add a New Bookmark</h1>
    <p class="lead">Add to your bookmark list below.</p>
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

    <form action="{{ route('admin.bookmark.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label" for="title">Link Image</label>
            <input class="form-control" type="text" name="linkimg" placeholder="Link">
        </div>

        <br>

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

        {{-- <select id="myselect">
            <option value="">Click here to choose</option>
            <option value="Reading">Reading</option>
            <option value="Website">Website</option>
        </select>

        <br>
        <br>

        <div class="form-group">
            <input id="myinput" class="form-control" type="textarea" name="description">
        </div> --}}

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

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#myselect').on('change', function(){
  $('#myinput').val($(this).val());
})

$('#myselect').change();
</script> --}}

@stop
