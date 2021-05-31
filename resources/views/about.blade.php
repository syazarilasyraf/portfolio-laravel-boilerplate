
@extends('layouts.default')

@section('content')
@section('title', 'About')

<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            @foreach ($about as $about)
            <div class="about-me" style="color:rgb(255,255,255);"><img class="rounded-circle" alt="50x50" src="{{ asset('images/' . $about->image) }}"
                data-holder-rendered="true">

                <br>
                <br>

                <p class="text-left" style="font-size:16px; color: #d4d4d4;">{{ $about->description }}<br><br></p>
            </div>
            @endforeach
        </div>
    </section>
</main>

@endsection
