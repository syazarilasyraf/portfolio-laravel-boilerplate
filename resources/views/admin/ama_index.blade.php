@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"AMA")
@endcomponent

<?php // $answer = App\Answer::get(); ?>

<?php // $question = App\Question::with('answers:answer,question_id')->get(); ?>



<div class="container" style="margin-top:60px">

    <h1>Question List</h1>
    <p class="lead">All your questions.</p>
    <hr>

    <div class="row">
        <div class="col-6">
            @foreach($question as $question)
                <p>{{ $question->question }}</p>
                <p>{{ $question->answers }}</p>
                <p>Asked on {{ $question->created_at->format('d M y') }}</p>
                <p> {{ $question->created_at->toDateString() }}<p>
                <p> {{ $question->created_at->toTimeString() }} <p>
                <p> {{ $question->created_at->toDateTimeString() }}<p>
                <p> {{ $question->created_at->getTimestamp() }}<p>

                <p>
                    <a href="{{ route('admin.ama.edit', $question->id) }}" class="btn btn-primary">Answer Question</a>
                </p>
                <hr>

                @if(Session::has('flash_message'))
                <div class="alert -success">
                    {{ Session::get('flash_message') }}
                </div>

                @endif

            @endforeach

        </div>
    </div>

    @stop

</div>
