@extends('public.layouts.layout')
@section('title', 'Find the best jobs | Codepilot Technologies - Software Company')
@section('meta-description',
    'Inviting freshers, interns, experienced software developers, graphic designers, digital markletors to be a part of Codepilot Technologies. Call: +917635960463')
@section('meta-keywords',
    'career, job opening, hiring, hiring software developers, hiring web developers, USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas, philadelphia, houston, europe, barcelona, berlin, amsterdam, warsaw, India, Guwahati, Jaipur, Bengaluru, Mumbai,  Delhi, Cochin, Coimbatore, Kolkata, Hyderabad, Vizag, Assam , Northeast India, Nairobi, Accra, Johannesburg, Dubai, Kuwait, muscat, abu dhabi')
@section('ogtitle', 'Find the best jobs | Codepilot Technologies - Software Company')
@section('meta-og-description', 'Inviting freshers, interns, experienced software developers, graphic designers, digital markletors to be a part of Codepilot Technologies. Call: +917635960463')
@section('url', 'https://www.codepilot.in/careers')
@section('image', 'assets/images/about%20section/who_we_are.png')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('assets/images/breadcrumbs/hiring.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="waviy">
                            <h4 class="breadcrumbs_about">We Are Hiring !!!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter bg-color">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/about section/who_we_are.png') }}" alt="career_image" class="img-fluid">
                </div>

                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>A CAREER YOU LOVE</h2>
                    </div>
                    <p>Join Codepilot, where your ideas make a difference.

                        Codepilot offers more than a job. We offer limitless opportunities to make a difference for
                        the clients and communities we serve. Explore Codepilot —your next career.

                        We look for people who can relate to our values and want to participate in the things that
                        make CodePilot a great place to work and build their career. We pride ourselves on our
                        professional, yet also friendly, fun and family-oriented environment. We offer competitive
                        salary and benefits, as well as a flexible work schedule.</p>

                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>WHY WORKING WITH US</h2>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3>Challenging Projects</h3>
                        <p>We are a start-up registered under the start-up India program. At Codepilot, you will be
                            working on exciting ideas with advanced technologies which will help you grow and
                            develop your skills.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <h3>Real Influence</h3>
                        <p>You will have the opportunity to shape the processes and have direct impact on the
                            projects you work on. Everyone is empowered to serve as a trusted advisor to create
                            lasting results for our clients.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3>Great Team</h3>
                        <p>Team spirit is strong with this one! Both at work and off work, we love to hang out and
                            have fun together. Our collaborative working environment provides the mentoring and
                            support you will need.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Job Openings Section ======= -->

    <section class="jobs-section">
        <div class="jobs pb-5" id="jobs">
            <div class="section-title mt-5">
                <h2>Job Openings</h2>
            </div>
            <div class="col-md-9 mx-auto">
                <div class="accordion" id="accordionExample">
                    @foreach ($data as $item)
                        <div class="card mb-3">

                            <button class="accordion-button" type="button" data-toggle="collapse"
                                data-target="#{{ $item->data_target }}" aria-expanded="false" aria-controls="collapseSix">
                                &nbsp;&nbsp; {{ $item->title }}
                            </button>
                            <div class="collapse" id="{{ $item->data_target }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!! $item->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Job Openings Section ======= -->

    <div class="divider_image">
        <img src="{{ asset('assets/images/solution.png') }}" style="margin-top: -85px;" />
    </div>

@endsection
