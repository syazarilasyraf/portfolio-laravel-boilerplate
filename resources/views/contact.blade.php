@extends('layouts.default')

@section('content')
@section('title', 'Contact')

<div class="container">
    <div class="">
        <div class="">
            <form action="" method="">
                <h4 class="">
                    Let's Connect
                </h4>

                <div class="">
                    <input class="" type="text" name="email" placeholder="Name">
                </div>

                <div class="">
                    <input class="" type="text" name="email" placeholder="Email Address">
                </div>

                <div class="">
                    <input class="" type="text" name="email" placeholder="Subject">
                </div>

                <div class="">
                    <textarea class="" name="msg" placeholder="Your Message"></textarea>
                </div>

                <button class="">
                    Submit
                </button>
            </form>
        </div>

        <div class="">
            <div class="">
                <span class="">
                    <span class=""></span>
                </span>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
