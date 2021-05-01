@extends('layouts.default')

@section('content')
@section('title', 'Contact')

<div class="container">
    <div class="col">
        <div class="col-6 mx-auto">
            <form action="" method="">
                <h4>
                    Let's Connect
                </h4>

                <div class="mb-3">
                    <input class="form-control" type="text" name="email" placeholder="Name">
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="email" placeholder="Email Address">
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="email" placeholder="Subject">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="msg" placeholder="Your Message"></textarea>
                </div>

                <button class="btn-primary btn mb-3">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>

{{-- @if(!empty($socials)) --}}
@include('partials.footer')
{{-- @endif --}}
@endsection
