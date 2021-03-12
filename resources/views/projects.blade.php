@extends('layouts.default')

@section('content')
@section('title', 'Project')

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
  </div>
@endsection
