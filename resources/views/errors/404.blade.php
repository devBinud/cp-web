@extends('public.layouts.layout')
@section('title','Codepilot | 404')
@section('body')

<main id="main" class="text-center">
    <img src="{{ asset('assets/images/404.jpg') }}" alt="404 Image" id="not_found" class="img-responsive center-block">
    <br>
    <h3 class="mb-4 text-primary">Page Not Found</h3>
</main>

@endsection