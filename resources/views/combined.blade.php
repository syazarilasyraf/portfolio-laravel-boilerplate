@extends('layouts.default')

@foreach ( $socials as $social )
@section('body')
    @include('welcome')
    @include('contact')
@stop
@endforeach
