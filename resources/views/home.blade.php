@extends('layouts.default')

@section('content')
@section('title', 'Home')

<div class="container">
    <div class="position-relative p-3 p-md-5 m-md-3">
        <div class="home col-md-6">
            @foreach ($home as $home)
            <div class="home-title ">
                {{ $home->greeting }}
            <br />
                <p class="home-name" >{{ $home->title }}</p>
            </div>
            <div class="home-para">
                <p>
                    {{ $home->description }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
