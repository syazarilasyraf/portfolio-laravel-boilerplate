@extends('layouts.default')

@section('content')
@section('title', 'Project')

<div class="row">
    @foreach ($projects as $project)
    <div class="col-3">
        <img src="{{ asset('images/' . $project->image) }}" />
            <h4>
                {{ $project->title }}
            </h4>
        <p>
            {{ $project->description }}
        </p>
    </div>
    @endforeach
</div>

{{-- <div class="projects">
    <div class="projects-title">
      <h2>My Projects</h2>
    </div>
  <div class="container">
    <div class="row g-2">
        <div class="col-12 col-md-4">
            <a href="">
                <div class="projects-item">
                    <div
                        class="projects-img" style="background-image: url()">
                    </div>
                <div>
                    <h4>Project 1</h4>
                </div>
                <div class="projects-desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="">
                <div class="projects-item">
                    <div
                        class="projects-img" style="background-image: url()">
                    </div>
                <div>
                    <h4>Project 2</h4>
                </div>
                <div class="projects-desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="">
                <div class="projects-item">
                    <div
                        class="projects-img" style="background-image: url()">
                    </div>
                <div>
                    <h4>Project 3</h4>
                </div>
                <div class="projects-desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                </div>
            </a>
        </div>
    </div>
</div> --}}

{{--
<div class="projects">
    <div class="projects-title">
      <h2>My Projects</h2>
    </div>
    <div class="projects-flex">
      <a href="">
        <div class="projects-item">
          <div
            class="projects-img"
            style="background-image: url()"
          ></div>
          <div class="projects-item-title">
            <h4>Project 1</h4>
          </div>
          <div class="projects-desc">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="projects-item">
          <div
            class="projects-img"
            style="background-image: url()"
          ></div>
          <div class="projects-item-title">
            <h4>Project 2</h4>
          </div>
          <div class="projects-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="projects-item">
          <div
            class="projects-img"
            style="background-image: url()"
          ></div>
          <div class="projects-item-title">
            <h4>Project 3</h4>
          </div>
          <div class="projects-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </a>
    </div>
  </div> --}}
@endsection
