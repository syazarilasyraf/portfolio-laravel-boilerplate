@extends('layouts.default')

@section('content')
@section('title', 'Blog')

<main class="page lanidng-page"></main>
    <section class="portfolio-block block-intro" style="background-color:#050505;">
        <div class="container">
            @foreach ($blogs as $blog)
            <div class="about-me" style="color:rgb(255,255,255);">
                <p class="text-left" style="font-size:16px;">{{ $blog->title }}</p>
                <p class="text-left" style="font-size:16px;">{{ $blog->description }}</p>
            </div>
            @endforeach
        </div>
    </section>

@endsection

{{-- <div class="projects">
    @foreach ($blogs as $blog)
        <div class="column">
            <div class="col-6 mx-auto">
                    <h4>
                        {{ $blog->title }}
                    </h4>
                <p>
                    {{ $blog->description }}
                </p>
            </div>
        </div>
    @endforeach
</div> --}}
