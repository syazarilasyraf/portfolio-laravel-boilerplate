@extends('layouts.default')

@section('content')
@section('title', 'Project')

<div class="projects">
    <div class="row">
        <div class="projects-title">
            <h2>My Projects</h2>
        </div>
            @foreach ($projects as $project)
            <div class="col-sm-4">
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('images/' . $project->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ $project->description }}</p>
                            </div>
                    </div>
                </a>
            </div>
            @endforeach
    </div>
</div>

@endsection
