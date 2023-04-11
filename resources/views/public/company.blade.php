@extends('public.layouts.layout')
@section('title', 'Codepilot | Company')
@section('body')

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Who we are</h2>
                    </div>
                    <p>We are a frontline website development, mobile app development, software development and digital
                        marketing
                        company offering full-spectrum customized digital solutions for all purposes. Codepilot Technologies
                        brings
                        great advantages to business space by bridging gaps, simplifying businesses, and elevating
                        competitive
                        benefits by providing technology-based business solutions.</p>
                    <p>We give organizations the insights to anticipate what customers want and act instantly to deliver on
                        those
                        demands. They can achieve the goal of every modern business: staying one step ahead of a
                        fast-changing
                        world.</p>

                </div>

                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/section_images/smo1.png') }}" alt="" class="img-fluid">
                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter bg-color">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/section_images/approach.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>We are hiring </h2>
                    </div>
                    <p>We're a community of professional software engineers at Codepilot Technologies with more than 8+
                        years of
                        expertise. Our experts hunt for Al and loT innovations to incorporate the newest possibilities in
                        our
                        solutions. By bridging gaps, streamlining processes, and boosting competitiveness, we help
                        businesses
                        thrive.
                    </p>

                    <p> We are hiring, you can send your CV/resume at <a class="fw-bold"
                            href="">communication@gmail.com</a></p>

                    <a href="{{ url('/careers') }}" class="text-danger">Click for more</a>
                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Clients Testimonial</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                Amazing and truly effective services with proper planning and strategies.
                                Very professional and hardworking staff. Codepilot Technologies Pvt. Ltd.,
                                the best place to get satisfactory mobile application development services.
                            </p>
                            </h3>
                            <h3 class="text-uppercase">Scordemy

                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">

                            <p>
                                Codepilot is a group of young enthusiastic locals, who are not apprehensive of tackling
                                unique
                                challenges which clients come up with. They may take some time, but they come up with the
                                necessary
                                solution.
                                They are courteous, with a hunger to excel and explore new boundaries.
                                Korangani Tea is happy to be associated with them for the last 4 years.
                            </p>
                            <h3 class="text-uppercase">Korangini Tea</h3>

                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

@endsection
