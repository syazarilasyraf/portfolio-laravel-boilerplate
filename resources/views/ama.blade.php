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
                {{-- <p class="text-left" style="font-size:16px; color: #d4d4d4;">Just for fun! Questions will be visible after I’ve answered.<br></p> --}}
                <p class="text-left" style="font-size:16px; color: #d4d4d4;">Just for fun! I'll try to answer as soon as I can.<br></p>
                <form action="{{ route('ama.store') }}" method="POST">
                    @csrf
                <textarea id="myTxt" type="hidden" rows="3" cols="100" name="question" placeholder="Ask me anything..."></textarea>

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

                <p class="text-left my-2" style="font-size:16px; color:rgb(255,255,255);">{{ $question->question }}</p>
                <p class="text-left text-muted my-2" style="font-size:12px; ">Asked on {{ $question->created_at->format('d M y') }}</p>
                @forelse($question->answers as $answer)
                <p class="text-left " style="font-size:16px; color: #d4d4d4;">{{ $answer->answer }}</p>
                @empty
                <p class="text-left text-muted" style="font-size:14px; ">No answers</p>
                @endforelse

                @endforeach

            </div>
        </div>
    </section>
</main>

@endsection
