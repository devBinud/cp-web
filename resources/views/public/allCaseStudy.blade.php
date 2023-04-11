@extends('public.layouts.layout')
@section('title', 'Case Study | Codepilot Technologies, Guwahati,India')
@section('meta-description',
    'Here we get to know about  journey of the project from implementation to the successful delivery of the project. Call +91 7635960463')
@section('meta-keywords',
    'case study, website design and development, app development, ecommerce, custom software development, USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas, philadelphia, houston, europe, barcelona, berlin, amsterdam, warsaw, India, Guwahati, Jaipur, Bengaluru, Mumbai,  Delhi, Cochin, Coimbatore, Kolkata, Hyderabad, Vizag, Assam , Northeast India, Nairobi, Accra, Johannesburg, Dubai, Kuwait, muscat, abu dhabi')
@section('ogtitle', 'Case Study | Codepilot Technologies, Guwahati,India')
@section('meta-og-description', 'Here we get to know about  journey of the project from implementation to the successful delivery of the project. Call +91 7635960463')
@section('url', 'https://www.codepilot.in/case-study')
@section('image', 'assets/uploads/casestudy/feature-image/akib__1662539539.png')
@section('body')

    <main id="main">
        <div class="section-title">
            <h2 class='mt-5'>All Case Studies</h2>
        </div>
        <div class="aboutmainbody">
            <div class="blogcontain">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                @foreach ($data as $datas)
                                    <div class="blogcard card p-3 mb-5">
                                        <div class="row">
                                            <div class="col-lg-12 mb-5">
                                                <h4 class="text-center color-primary text-dark fw-bold pt-4">
                                                    {{ $datas->cs_title }}</h4>
                                            </div>

                                            <div class="col-lg-12 text-center">
                                                <h2 class="caseStudy_font">TECHNOLOGY USED</h2>
                                                @foreach (Explode(',', $datas->tech_used) as $key => $value)
                                                    <div class="tech_span">
                                                        <img src="{{ asset('assets/uploads/techicon/icons') . '/' . explode(',', $datas->tech_icon)[$key] }}"
                                                            alt="{{ $datas->cs_title }}">
                                                        {{ explode(',', $datas->tech_used)[$key] }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="image_caseStudy">
                                            <img style="width: 100%; height:100%" class="mb-3"
                                                src="{{ asset('assets/uploads/casestudy/feature-image') . '/' . $datas->cs_image }}"
                                                alt="">
                                            <a href="{{ url('/case-study') . '/' . $datas->slug }}"
                                                class="get-started_btn scrollto"><span class="d-lg-block">Read Full Case
                                                    Study <i class="bi bi-arrow-right ms-1"></i></span> </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
