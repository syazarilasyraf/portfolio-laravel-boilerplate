@extends('layouts.default')

@section('content')
@section('title', 'Tools')

<main class="page lanidng-page">
    <section class="portfolio-block block-intro" style="background-color:#050505;">
        <div class="container">
            <div class="about-me" style="color:rgb(255,255,255);">
                <p class="text-left" style="font-size:24px;">Tools</p>
                <p class="text-left" style="font-size:16px;">A list of my favorite tools that I use on a regular basis and that I would recommend to try.<br></p>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="/tools">All</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tools/windows">Windows</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/tools/android">Android</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tools/web">Web</a></li>
                </ul>

                <br>

                @foreach ($android as $android )

                <a href="{{ $android->link }}" style="text-decoration: none; color: inherit;">
                <p class="text-left" style="font-size:16px; font-weight:bold; margin-bottom: 0.5em;">{{ $android->title }}</p>
                <p class="text-left" style="font-size:16px; color: #d4d4d4;"> · {{ $android->description }}</p>
                </a>

                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection
