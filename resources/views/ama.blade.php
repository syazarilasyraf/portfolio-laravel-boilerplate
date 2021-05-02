@extends('layouts.default')

@section('content')
@section('title', 'AMA')

<div class="container">
    <div class="col-4 mx-auto">

<div>
    <h1>
        Ask Me Anything
    </h1>
    <p>
        Just for fun! Questions will be visible after I’ve answered.
    </p>
</div>

<form action="">
    <textarea placeholder="Ask me anything..." name="" id="" cols="50" rows="5">
    </textarea>
    <br>
    <br>
    <div>
        <button class="btn-primary btn">
            Submit
        </button>
    </div>
</form>

    </div>
</div>

@endsection
