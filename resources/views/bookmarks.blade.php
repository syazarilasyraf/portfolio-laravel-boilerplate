@extends('layouts.default')

@section('content')
@section('title', 'Bookmark')

<main class="page lanidng-page">

    <section class="portfolio-block block-intro" style="background-color:#050505;">
        <div class="container">
            <div class="about-me" style="color:rgb(255,255,255);">
                <p class="text-left" style="font-size:24px;">Bookmarks</p>
                <p class="text-left" style="font-size:16px;">Internet things, saved for later.</p>

                {{-- @foreach ($bookmark as $bookmark )

                <p class="text-left" style="font-size:16px; font-weight:bold; margin-bottom: 0.5em;">{{ $bookmark->title }}</p>
                <p class="text-left" style="font-size:16px; color: #d4d4d4;"> · {{ $bookmark->description }}</p>

                @endforeach --}}

                <div class="row">

                    @foreach ($bookmark as $bookmark )

                    {{-- First Small Card --}}
                    <div class="col-md-4 my-4">
                        <a href="{{ $bookmark->link }}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="background: rgb(29, 33, 36); border-radius: 25px 25px 25px 25px;">
                            <img src="{{ $bookmark->linkimg }}" style="width: 100%;  border-radius: 25px 25px 0px 0px;" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-left" style="font-size:16px; font-weight:bold; margin-bottom: 0.5em; " >{{ $bookmark->title }}</h5>
                                <p class="card-text text-left" style="font-size:16px;"><small class="text-muted"> · {{ $bookmark->description }} — {{ $bookmark->created_at->format('M y') }}</small></p>

                            </div>
                        </div>
                    </a>
                    </div>

                    @endforeach

                </div>

                {{-- <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reading</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Websites</a></li>
                </ul>

                <br>
                <br> --}}

            </div>
        </div>
    </section>
</main>

@endsection
