@extends('layouts.default')

@section('content')
@section('title', 'Blog')

<div class="row">
    @foreach ($blogs as $blog)
    <div class="col-3">
            <h4>
                {{ $blog->title }}
            </h4>
        <p>
            {{ $blog->description }}
        </p>
    </div>
    @endforeach
</div>

{{--
<div class="col-md-5 row">
    <div class="section expanded-card">
        <div class="data-item">
            <div class=" inline">
                <h4>
                    {{ $blog->title }}
                </h4>
            </div>
        </div>
        <div class="description">
            <p>
                {{ $blog->description }}
            </p>
        </div>
            <a href="" target="_blank"
            class="link-blog"> Link
                <span>›
                </span>
            </a>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="section expanded-card">
        <div class="data-item">
            <div class=" inline">
                <h4 class="">
                    Title 1
                </h4>
            </div>
        </div>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat.
            </p>
        </div>
            <a href="" target="_blank"
            class="link-blog"> Link
                <span>›
                </span>
            </a>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="section expanded-card">
        <div class="data-item">
            <div class=" inline">
                <h4 class="">
                    Title 1
                </h4>
            </div>
        </div>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat.
            </p>
        </div>
            <a href="" target="_blank"
            class="link-blog"> Link
                <span>›
                </span>
            </a>
        </div>
    </div>
</div> --}}

@endsection
