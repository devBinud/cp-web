@extends('public.layouts.layout')
@section('title', 'Codepilot | SMO')
@section('body')

    <style>
        .button_submit {
            margin-top: 20px;
            background: #140047;
            border: 1px solid #140047;
        }

        .button_submit a {
            color: #fff;
            font-weight: 500;
            font-size: 16px;
        }

        .button_submit:hover {
            background: #fff;
            border: 1px solid #140047;
            color: #140047;
        }
    </style>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('assets/images/breadcrumbs/about.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="waviy">
                            <span style="--i:4">S</span>
                            <span style="--i:6">E</span>
                            <span style="--i:5">A</span>
                            <span style="--i:6">R</span>
                            <span style="--i:4">C</span>
                            <span style="--i:7">H</span>
                            <span style="--i:8"></span>
                            <span style="--i:6"></span>
                            <span style="--i:7"></span>
                            <span style="--i:10">E</span>
                            <span style="--i:9">N</span>
                            <span style="--i:11">G</span>
                            <span style="--i:13">I</span>
                            <span style="--i:12">N</span>
                            <span style="--i:14">E</span>
                            <span style="--i:14"></span>
                            <span style="--i:13"></span>
                            <span style="--i:10">M</span>
                            <span style="--i:13">A</span>
                            <span style="--i:11">R</span>
                            <span style="--i:13">K</span>
                            <span style="--i:10">E</span>
                            <span style="--i:14">T</span>
                            <span style="--i:10">I</span>
                            <span style="--i:13">N</span>
                            <span style="--i:10">G</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/section_images/smo1.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>
                            WHY DOES YOUR COMPANY REQUIRE SOCIAL MEDIA OPTIMIZATION?</h2>
                    </div>
                    <p>With nearly half of the world's population now using social media platforms, establishing a strong
                        social presence is an essential component of any digital marketing campaign. However, the time and
                        focus required to maintain a systemically relevant and fascinating social media feed may be
                        difficult, especially when you have so many different areas of your business to run. This is where
                        CodePilot Technologies enters the picture. We've specialised in social media since the beginning, so
                        our knowledge will be a valuable asset to your marketing efforts. We will assist you in creating
                        engaging content for your viewers while also nurturing your audience. We are proud of our knowledge
                        and experience in social media, and we want to give you the best of our knowledge and experience so
                        that your brand excels. </p>

                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter bg-color">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>
                            WHY SHOULD YOU CHOOSE US FOR SMO?</h2>
                    </div>

                    <p>We're here to help you develop the best social media management strategy to meet and exceed your
                        expectations. Participating with your audience on social media is critical - user-generated content
                        from social platforms can result in a 4.5% higher conversion rate. Jumping on every social media
                        platform's crusade isn't our style. You may be unaware that a number of the most popular social
                        platforms may not even be relevant to your business. Instead, we see the need for a plan of action
                        social media management strategy that informs, engages, and converts your audience at regular
                        intervals.</p>

                    <p class="fw-bold">How will it Benefit Your Business</p>
                    <p>A solid organic strategy is essential for social media success. If you want to add some structure to
                        your daily posting, success with the help of our creative content team may be ideal for you. We'll
                        delve into the intricacies of your entire business content that shapes your target market and
                        values. Social media management could be a valuable asset to your company.</p>

                </div>

                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/section_images/smo.png') }}" alt="" class="img-fluid">
                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Job Openings Section ======= -->

    <section class="jobs-section">
        <div class="jobs pb-5" id="jobs">
            <div class="section-title mt-5">
                <h2>Our Engaging Procedure</h2>

            </div>

            <div class="col-md-9 mx-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                &nbsp;&nbsp;Audit
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We can identify areas that may benefit from a comprehensive, targeted social strategy by
                                    taking a look around your current social platforms. From profile enhancement to audience
                                    analysis and social media management, we're ready to handle it all so you don't have to.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                &nbsp;&nbsp;Examining The Industry
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We compare your social presence to that of your competitors to determine where we should
                                    focus our efforts in order to be the most effective competitor for them. Aside from our
                                    extensive data on each social media platform and your company, we will give you an idea
                                    of how far we can take your brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                &nbsp;&nbsp;Strategies for Social Media
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We'll compile a comprehensive, engaging social media strategy once we've determined your
                                    path to success and know who to target.Once we've determined your path to success and
                                    who to target, we'll create a comprehensive, participatory social strategy outlining
                                    what we'll do to keep your business active on social media.</p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                &nbsp;&nbsp;Advertisements and Creatives
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>It's time to get down to business once the strategy has been finalised. We'll create
                                    weekly social media schedules with daily updates and media assets made to order. We will
                                    keep track of everything that is trending in your industry and ensure that it reaches
                                    the appropriate community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                &nbsp;&nbsp;Building A Campaign
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>This is where the real work begins, after we have completed our analysis and development
                                    of your campaign strategy. You will retain ownership of your social networks; we will
                                    simply manage the activity on your behalf.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                &nbsp;&nbsp;Optimizing Your Social Media Platform
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We review your profiles across all platforms and make updates and changes to help improve
                                    your visibility and engagement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                &nbsp;&nbsp;Reports
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We're ready to report on important changes on the fly, using a style of social listening
                                    and coverage tools, just to ensure that you're ahead of your brand in social media.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ======= Job Openings Section ======= -->
    <div class="divider_image">
        <img src="{{ asset('assets/images/solution.png') }}" style="margin-top: -25px;" />
    </div>

@endsection
