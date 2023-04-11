@extends('public.layouts.layout')
@section('title','About Codepilot Technologies | Software Company in Ghy,India')
@section('meta-description','Codepilot Technologies offers custom software development services to digitise your business logic. Call +917635960463 or mail at info@codepilot.in')
@section('meta-keywords', 'software, software company in guwahati, software company in India, software development, billing software, inventory management software, custom software development, software developers, software developer, software development firm, best software company, top software company, software company near me, website design and development, mobile app development, iOS app development, android app development,  ecommerce app development, ecommerce,  USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas, philadelphia, houston, europe, barcelona, berlin, amsterdam, warsaw, India, Guwahati, Jaipur, Bengaluru, Mumbai,  Delhi, Cochin, Coimbatore, Kolkata, Hyderabad, Vizag, Assam , Northeast India, Nairobi, Accra, Johannesburg, Dubai, Kuwait, muscat, abu dhabi')
@section('ogtitle', 'About Codepilot Technologies | Software Company in Ghy,India')
@section('meta-og-description', 'Codepilot Technologies offers custom software development services to digitise your business logic. Call +917635960463 or mail at info@codepilot.in .')
@section('url', 'https://www.codepilot.in/about-us')
@section('image', 'assets/images/section_images/makes_us_different.png')
@section('body')


    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('assets/images/breadcrumbs/about_01.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="waviy">
                            <h4 class="breadcrumbs_about">About Us</h4>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter bg-color_1">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5">
                        <img src="{{asset('assets/images/section_images/makes_us_different.png')}}" alt="" class="img-fluid">
                      </div>

                    <div class="col-lg-7">
                        <div class="section-title">
                            <h2>What makes us different</h2>
                        </div>

                        <p>We established Codepilot Technologies as we have seen that many businesses are having difficulty integrating cutting-edge technologies into their operations during our time working at various software companies. We wanted to free up a significant amount of their time and resources so that they could concentrate on their goods and services by assisting them with their IT infrastructure using our experience in cloud computing, machine learning, artificial intelligence, and data analytics. We offer Digital Technology and Strategy Consulting Services across industries to support businesses in empowering their partners, employees, and customers through various channels.</p>

                    </div>
                </div>

            </div>
        </section><!-- End Stats Counter Section -->


       <!-- ======= Stats Counter Section ======= -->
       <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Our APPROACH</h2>
                    </div>

                    <P>We have a devoted team of specialists with a diverse range of great experience that are continuously working to anticipate the intent of your consumers and search engines through sophisticated marketing solutions.
                        We create unique software solutions that are suited to our client’s specific business needs and assist them throughout the process, from concept to execution. Our digital marketers are involved in branding, marketing your business to rank higher in Google search results, resulting in more search engine traffic, as well as using social media platforms and websites to promote a product or service, resulting in exponential growth for your business.
                        </P>

                </div>

                <div class="col-lg-5">
                    <img src="{{asset('assets/images/section_images/smo1.png')}}" alt="" class="img-fluid">
                </div>


            </div>

        </div>
    </section><!-- End Stats Counter Section -->

        <div class="divider_image">
            <img src="{{asset('assets/images/solution')}}.png" />
        </div>


    </main><!-- End #main -->

@endsection

@section('custom-js')

@endsection