
@extends('layouts.default')

@section('content')
@section('title', 'About')

<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            @foreach ($about as $about)

            <h3 class="about-me text-left py-2" style="color:rgb(255,255,255); font-weight: bold; border-bottom: 2px solid rgb(45, 55, 72);">About</h3>
            <div style="margin-top: 15px;"></div>
            <div class="about-me" style="color:rgb(255,255,255); line-height: 1.5rem;">
                {{-- <img class="rounded-circle" src="{{ asset('images/' . $about->image) }}"
                data-holder-rendered="true">
                <br>
                <br> --}}
                <p class="text-left" style="font-size:16px; color: #d4d4d4;">{{ $about->description }}</p>
            </div>
            @endforeach
            <?php
            $project = \App\Project::all()->sortByDesc('id');
            ?>
            <h3 class="about-me text-left py-2" style="color:rgb(255,255,255); font-weight: bold; border-bottom: 2px solid rgb(45, 55, 72);">Projects</h3>
            @foreach ($project as $project)
            <div class="about-me py-3" style="color: rgb(255,255,255);" >
            <a class="about-me text-left " href="{{ $project->link }}" target="_blank" style="text-decoration: none; color: inherit;">
                <p class="text-left" style="font-size:16px; font-weight:bold; margin-bottom: 0.5em;">{{ $project->title }}</p>
                <p class="text-left mb-0" style="font-size:16px; color: #d4d4d4;"> · {{ $project->description }}</p>
            </a>
            </div>
            @endforeach
        </div>
    </section>
</main>

@endsection
