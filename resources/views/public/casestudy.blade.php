@extends('public.layouts.layout')
@section('title', 'Codepilot | korangini')
@section('body')

    <main id="main">
        <div class="aboutmainbody">
            <div class="blogcontain">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <div class="blogcard card p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-6 mb-5">
                                            <h4 class="text-center color-primary  text-dark fw-bold pt-4">
                                                {{ $data->cs_title }}</h4>
                                        </div>
                                        <div class="col-lg-12 mb-3 text-center">
                                            <h2 class="caseStudy_font">TECHNOLOGY USED</h2>

                                            <div class="col-lg-12 text-center">

                                                @foreach (Explode(',', $data->tech_used) as $key => $value)
                                                    <div class="tech_span">
                                                        <img src="{{ asset('assets/uploads/techicon/icons') . '/' . explode(',', $data->tech_icon)[$key] }}"
                                                            alt="{{ $data->tech_used }}">
                                                        {{ explode(',', $data->tech_used)[$key] }}
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>

                                    <img style="width: 100%; height:100%" class="mb-3"
                                        src="{{ asset('assets/uploads/casestudy/feature-image') . '/' . $data->cs_image }}"
                                        alt="{{ $data->cs_title }}">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            {!! $data->cs_description !!}
        </div>
    </main><!-- End #main -->

@endsection
