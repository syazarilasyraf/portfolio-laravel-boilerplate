@extends('layouts.default')

@section('content')
@section('title', 'Home')

<div class="content">
    <div class="hero">
      <div class="hero-text">
        <div class="hero-title">
          Hello there! 👋
          <br />
          <p class="hero-name" >I'm Syazaril Asyraf.</p>
        </div>
        <div class="hero-para">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
    </div>
</div>

@include('partials.footer')
@endsection
