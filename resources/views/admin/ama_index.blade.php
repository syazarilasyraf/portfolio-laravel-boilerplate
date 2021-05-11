@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"AMA")
@endcomponent

<?php
// $answer = App\Answer::get();
?>

<div class="container" style="margin-top:60px">

    <h1>Question List</h1>
    <p class="lead">All your questions.</p>
    <hr>

    <div class="row">
        <div class="col-6">
            @foreach($question as $question)
                <p>{{ $question->question }}</p>
                <p>
                    <a href="{{ route('admin.ama.index', $question->id) }}" class="btn btn-info">View Question</a>
                    <a href="{{ route('admin.ama.edit', $question->id) }}" class="btn btn-primary">Answer Question</a>
                </p>
                <hr>

                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>

                @endif

            @endforeach

        </div>

            {{-- @stop
        </div> --}}

        {{-- <div class="col-6">
            @foreach($answer as $answer)
                <p>{{ $answer->answer }}</p>
                <p>
                    <a href="{{ route('ama.index', $answer->id) }}" class="btn btn-info">View Answer</a>
                    <a href="{{ route('ama.edit', $answer->id) }}" class="btn btn-primary">Edit Answer</a>
                </p>
                <hr>

                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>

                @endif

            @endforeach

        </div> --}}

            {{-- @stop
        </div> --}}
    </div>

    @stop

</div>
