@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Social")
@endcomponent

<div class="container">
    <form class="margin-top">
        <div class="form-group">
            <label>Github</label>
            <input type="text" class="form-control" placeholder="Enter Github profile URL">
        </div>
        <div class="form-group">
            <label>Twitter</label>
            <input type="text" class="form-control" placeholder="Enter Twitter Profile URL">
        </div>
        <div class="form-group">
            <label>Linkedin</label>
            <input type="text" class="form-control" placeholder="Enter Linkedin Profile URL">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Enter Email Url">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
