@extends('layouts.default')

@section('content')
@section('title', 'Home')

<div class="container">
    <div class="position-relative p-3 p-md-5 m-md-3">
        <div class="home col-md-6">
            <div class="home-title ">
                Hello there! 👋
            <br />
                <p class="home-name" >I'm Syazaril Asyraf.</p>
            </div>
            <div class="home-para">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
