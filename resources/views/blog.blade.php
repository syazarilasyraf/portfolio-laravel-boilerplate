@extends('layouts.default')

@section('content')
@section('title', 'Blog')

<div class="projects">
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
</div>

@endsection
