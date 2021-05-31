@extends('layouts.default')

@section('content')
@section('title', 'Home')

    <main class="page">
        <section class="portfolio-block block-intro">
            <div class="container">
                @foreach ($home as $home)
                <div class="about-me" style="color:rgb(255,255,255);">
                    <p class="text-left">{{ $home->greeting }}</p>
                    <p class="text-left" style="font-size:40px; font-weight: bold">{{ $home->title }}</p>
                    <p class="text-left" style="color: #d4d4d4;">{{ $home->description }}<br></p>
                    @endforeach
                    <button onclick="location.href='/about'" class="btn-primary btn">
                        Learn more about me
                    </button>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

@endsection
