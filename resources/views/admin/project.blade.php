@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Project")
@endcomponent

<div class="container">
    <form class="margin-top">
        <div class="form-group">
            <label for="file"></label>
            <input type="file" class="form-control-file" placeholder="">
        </div>
        <div class="form-group">
            <label>Project 1</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
        </div>
        </form>
        <div class="form-group">
            <label for="file"></label>
            <input type="file" class="form-control-file" placeholder="">
        </div>
        <div class="form-group">
            <label>Project 2</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
        </div>
        </form><div class="form-group">
            <label for="file"></label>
            <input type="file" class="form-control-file" placeholder="">
        </div>
        <div class="form-group">
            <label>Project 3</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection
