@extends('layouts.default')

@section('content')
@section('title', 'AMA')

<?php
// $pama = App\Ama_answer::get();
// $ama = App\ama::get();
?>

<main class="page lanidng-page">
    <section class="portfolio-block block-intro" style="background-color:#050505;">
        <div class="container">
            <div class="about-me" style="color:rgb(255,255,255);">
                <p class="text-left" style="font-size:24px; font-weight: bold">Ask Me Anything</p>
                <p class="text-left" style="font-size:16px; color: #d4d4d4;">Just for fun! Questions will be visible after I’ve answered.<br></p>
                <form action="{{ route('admin.ama.store') }}" method="POST">
                    @csrf
                <textarea id="myTxt" name="myTxt" rows="3" cols="100" name="question" placeholder="Ask me anything..."></textarea>

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


                <div type="submit" id="btn" >
                    <button class="btn-primary btn">
                        Ask Away!
                    </button>
                </div>

                <br>
                <br>
                <br>
                <br>

                @foreach($question as $question)

                <p class="text-left" style="font-size:16px; ">{{ $question->question }}</p>
                <p class="text-left" style="font-size:16px; color: #d4d4d4;">{{ $question->answers }}</p>

                    {{--  // $answer = App\Answer::get();

                    @forelse ($answer as $answer )

                    <p class="text-left" style="font-size:16px; color: #d4d4d4;">{{ $answer->answer}}</p>

                    @empty

                    <p>It's quite in here</p>

                    @endforelse --}}

                @endforeach

                {{-- @forelse($question as $question)

                    <p>{{ $question->question}}</p>

                @empty
                    <p colspan="4">No record found</p>
                @endforelse --}}

                {{-- <ul class="list-unstyled">
                    <li class="media">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <li class="media my-4">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                </ul> --}}

            </div>
        </div>
    </section>
</main>

@endsection
