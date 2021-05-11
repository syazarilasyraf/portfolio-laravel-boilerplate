@extends('layouts.default')

@section('content')
@section('title', 'AMA')

<?php
// $pama = App\Ama_answer::get();
// $ama = App\ama::get();
?>

<div class="container">
    <div class="col-4 mx-auto">

<div>
    <h1>
        Ask Me Anything
    </h1>
    <p>
        Just for fun! Questions will be visible after I’ve answered.
    </p>
    <form action="{{ route('admin.ama.store') }}" method="POST">
        @csrf
        <textarea placeholder="Ask me anything..." name="question" cols="44" rows="3">
        </textarea>
        <br>
        <br>

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

        <div>
            <button class="btn-primary btn">
                Submit
            </button>
        </div>
    </form>

    <br>
    <br>

    {{-- <div class="row">
        <div class="col-6">
            <h6>
                Questions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp →
            </h6>
            <br>
            @foreach ($ama as $ama )
            <p>{{ $ama->question }}</p>
            @endforeach
        </div>

        <div class="col-6">
            <h6>
                : Answers
            </h6>
            <br>
            @foreach ($ama_answer as $ama_answer)
            <p>: {{ $ama_answer->answer }}</p>
            @endforeach
        </div>
    </div> --}}

@endsection
