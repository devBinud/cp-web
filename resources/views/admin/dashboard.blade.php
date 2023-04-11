@extends('admin.layout')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('custom-css')


    <style>
        .dashboard {
            background-image: url("{{ asset('assets/admin/img/back.jpg') }}");
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }

        ;
    </style>
@endsection
@section('body')

    <!-- Content wrapper -->

    <!-- Content -->

    <div class=" dashboard">
        <div class="row text-center">
            <div class="col-md-12 mt-5">
                <img class="mt-3" src="{{ asset('assets/admin/img/logo.png') }}" width="25%" alt="">
                <h2 style="font-size: 60px" class="text-dark mt-3">
                    Welcome To <br> <span class="fw-bold">Codepilot Technologies Admin</span> </h2>
            </div>
        </div>
    </div>

    <!-- / Content -->
@endsection
