
@extends('layouts.default')

@section('content')
@section('title', 'About')

<div class="text-center">
    <div class="col-md-12 md-4">
        @foreach ($about as $about)
        {{-- <img class="rounded-circle" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" --}}
        <img class="rounded-circle" alt="50x50" src="{{ asset('images/' . $about->image) }}"
          data-holder-rendered="true">
        <div class="desc-text col-md-5">
            <h5>
                {{ $about->description }}
            </h5>
        </div>
        @endforeach
    </div>
</div>

@endsection
