@extends('layouts.default')

@section('content')
@section('title', 'Bookmark')

<main class="page lanidng-page">
    <section class="portfolio-block block-intro" style="background-color:#050505;">
        <div class="container">
            <div class="about-me" style="color:rgb(255,255,255);">
                <p class="text-left" style="font-size:24px;">Bookmarks</p>
                <p class="text-left" style="font-size:16px;">Internet things, saved for later.</p>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reading</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Websites</a></li>
                </ul>

                <br>
                <br>

                @foreach ($bookmark as $bookmark )

                <p class="text-left" style="font-size:16px; font-weight:bold; margin-bottom: 0.5em;">{{ $bookmark->title }}</p>
                <p class="text-left" style="font-size:16px; color: #d4d4d4;"> · {{ $bookmark->description }}</p>

                @endforeach

            </div>
        </div>
    </section>
</main>

@endsection
