@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Home")
@endcomponent

<div class="container">
    <form style="margin-top:60px">
        <div class="form-group">
            <label>Greeting</label>
            <input type="text" name="greeting" class="form-control" placeholder="Enter Greeting">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection
