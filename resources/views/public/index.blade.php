@extends('public.layouts.layout')
@section('title', 'Top Software Company in Guwahati, India | Codepilot Tech')
@section('meta-description',
    'Codepilot Technologies is a software company in Guwahati,India,offering software
    development, website development & app development.Call +917635960463')
@section('meta-keywords',
    'software, software company in guwahati, software company in India, software development,
    billing software, inventory management software, custom software development, software developers, software developer,
    software development firm, best software company, top software company, software company near me, website design and
    development, mobile app development, iOS app development, android app development, ecommerce app development, ecommerce,
    USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas, philadelphia,
    houston, europe, barcelona, berlin, amsterdam, warsaw, India, Nairobi, Accra, Johannesburg, Dubai, Kuwait, muscat, abu
    dhabi')

@section('ogtitle', 'Top Software Company in Guwahati, India | Codepilot Tech')
@section('meta-og-description', 'Codepilot Technologies is a software company in Guwahati,India,offering software development, website development & app development.Call +917635960463')
@section('url', 'https://www.codepilot.in/')
@section('image', 'assets/images/slide/homepage1.png')
@section('body')
  


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center bg-color_1">
        <div class="container">
            <div class="row justify-content-between">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                  <h1>MEET THE LEADING  SOFTWARE </br>
                     COMPANY IN GUWAHATI, INDIA
                  </h1>
                    <p> We are a leading software development company that provides customized solutions to businesses looking to enhance their technology landscape. Our experienced team of developers, designers and project managers is dedicated to delivering innovative and scalable software solutions that meet our clients' unique needs. With a focus on creating digital success stories by simplifying complexity, we bring your vision to life and help you achieve your technology goals. Whether you're looking to automate processes, create a new web or mobile application, or simply improve your technology infrastructure, Codepilot Technology has you covered. Let us be your technology partner and bring your vision to life. </p>
                    <div class="d-flex">
                        <a href="{{ url('/about-us') }}" class="home_more">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                        {{-- <a target="_blank" href="https://www.youtube.com/channel/UCNTlN85yt27jkFUQW7eJTnQ"
                 class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                   Video</span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-start image">
                    <img src="{{ asset('assets/images/slide/homepage1.png') }}" class="img-fluid" alt="home_banner_image"
                        >
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->



    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      
      <h3 class="py-4">Codepilot is a <span class="ms-1 me-1"> team of software developers,  </span>  who builds software products, develop platforms and deliver experiences  <span class="ms-1 me-1"> globally. </span></h3>

        <div class="container">

            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/section_images/makes_us_different.png') }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0">
                    <div class="section-title">
                        <h2 class="mt-3">What makes us different</h2>
                    </div>
                    <p>
                        Codepilot Technologies was founded due to our experience working on multiple projects where we saw
                        many businesses struggling to integrate cutting-edge technologies.
                    </p>
                  
                  <p>
                  We used our expertise by helping them with their IT
                            infrastructure in web development, mobile app development, custom software development, ecommerce solutions, cloud computing,ML, AI, and data analytics
                            to free up a substantial amount of their time and resources so they could concentrate on their
                            goods and services.Our Digital Marketing and Strategy Consulting
                            Services support businesses across industries in empowering their partners, employees, and
                            customers . 
                  </p>
       
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

      <!-- Service / Products section starts -->
  <div id="products" class="products">
   <div class="container">
    <div class="section-title">
      <h2 class="p-4 text-white">PRODUCT & SERVICE THAT WE PROVIDE</h2>
    </div>
    <div class="product__box">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
          <div class="product__small__box">
            <div class="product__small__box__image">
              <img src="{{asset('assets/images/products/omni.png')}}" alt="">
            </div>
           <div class="product__small__box__contents">
            <h4>FULLY CUSTOMIZED FOR YOUR INDUSTRY, BUSINESS</h4>
            <p> <span class="fw-bold">Omnitouch</span> is an all-in-one platform that provides you with everything you need to launch and grow your online business. </p>
             <a href="http://omnitouch.in/" target="_blank" class="product__button">Know More <i class="bi bi-arrow-right ms-1"></i></a>
           </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
          <div class="product__small__box">
            <div class="product__small__box__image">
              <img src="{{asset('assets/images/products/hostpilot.png')}}" alt="">
            </div>
            <div class="product__small__box__contents">
              <h4>HOST YOUR WEBSITE NOW WITH HOSTPILOT</h4>
              <p>Take us as your <span class="fw-bold">hosting partner</span> , we provide you best hosting service at comfortable price. You can visit the website for more .</p>
              <a href="https://www.hostpilot.in/" class="product__button" target="_blank">Know More <i class="bi bi-arrow-right ms-1"></i></a>
             </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
  <!-- Service / Products section  -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter bg-color_1">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Why Choose Us?</h2>
                    </div>

                    <p>We have a devoted team of marketing specialists with a diverse range of great experience that are continuously
                        working to anticipate the intent of your consumers and search engines through sophisticated
                        marketing
                        solutions.
                        We create unique software solutions that are suited to our client’s specific business needs and
                        assist
                        them throughout the process, from concept to execution. Our digital marketers are involved in
                        branding,
                        marketing your business to rank higher in Google search results, resulting in more search engine
                        traffic,
                        as well as using social media platforms and websites to promote a product or service, resulting in
                        exponential growth for your business.
                    </p>

                </div>

                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/section_images/approach (1).png') }}" alt=""
                        class="img-fluid">
                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- services section -->
<div class="container mt-3 mb-3">
    <div class="d-flex flex-row align-items-center"></div>
    <div class="section-title">
        <h2 class="mt-3">Our Services</h2>
    </div>
    
    <div class="row mt-1 g-4">
        <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square">
                     <img src="{{ asset('assets/images/services/ui_ux.png') }}" width="55px"
                                height="55px"/>
                    </span> 
                </div>
                <div class="email mt-1">
                  <h2 class="services_heading">UI / UX Design</h2>
                    <div class="dummytext mt-3"> <span>
                      We are Front End masters with a deep focus on HTML, CSS, Javascript, Bootstrap and React .
                                The result
                                of our work is a responsive, accessible, and performant websites. Either you have the design
                                ready and
                                want us to code it, or you want us to do both design and code, we’re happy to do so.
                      </span> </div>
                </div>
            
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center text-align-center"> <span class="square1">
                            <img src="{{ asset('assets/images/services/web_application_development.png') }}"width="60px"
                                height="60px" />
                  </span> </div>
                <div class="email mt-1"> 
                  <h2 class="services_heading">Website Design Development</h2>
                    <div class="dummytext mt-3"> <span>
                      The digitization of your business will require custom website development. Since
                                each
                                business is different, developing custom website applications increases visibility of brand, generate leads and
                      you will ultimately save time and money.
                      
                      </span> </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square2">
                      <img src="{{ asset('assets/images/services/rapid_app_dev.png') }}"width="60px"
                                height="60px" />
                  </span> </div>
                <div class="email mt-1"> 
                  <h2 class="services_heading">Rapid App Development</h2>
                    <div class="dummytext mt-3"> <span>
                      Rapid Application Development relies on achieving goals quickly while preserving quality.
                                This is made possible through iterative development methods. We employ resources like DevOps
                                practices and RAD recurrent prototyping. Users may see the features of the app right away.
                                Thus, Rapid Application Development streamlines the development process.
                      </span> </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square3">
                       <img src="{{ asset('assets/images/services/custom_software_development.png') }}" width="60px"
                                height="60px"/>
                  </span> </div>
                <div class="email mt-1">
                  <h2 class="services_heading">Custom Software Development</h2>
                    <div class="dummytext mt-3"> <span>
                      A standard software product is appropriate for standard automation because it meets your general
                                needs, but for
                                more, you need features that serve those needs specifically. This necessitates the
                                development of a
                                one-of-a-kind product. We have a dedicated team of softwae developers who will listen to your needs and
                                assist you
                                in finding the best business software solution tailored to your specific requirements.
                      </span> </div>
                </div>
             
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square4">
                       <img src="{{ asset('assets/images/services/data_engineering_solutions.png') }}" width="60px"
                                height="60px" />
                  </span> </div>
                <div class="email mt-1"> 
                  <h2 class="services_heading">Data Engineering Solutions</h2>
                    <div class="dummytext mt-3"> <span>
                      A company's most valuable asset is most likely its information. It can be a terrific option
                                for making
                                all the crucial choices if it's well arranged and used wisely. The place where you maintain
                                your
                                company's data is essential to cloud data analytics. Cloud Data Analytics services are a
                                strong resource
                                for thriving in the digital age. Our Data Infrastructure Modernization services are the key
                                to a better
                                future in this setting.
                      </span> </div>
                </div>
              
            </div>
        </div>
       
             <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square5">
                      <img src="{{ asset('assets/images/services/data_analytics_and_ai.png') }}" width="60px"
                                height="60px"/>
                  </span> </div>
                <div class="email mt-1"> 
                  <h2 class="services_heading">Data Analytics & AI</h2>
                    <div class="dummytext mt-3"> <span>
                      Data and insights are strategic assets that enable businesses to learn about changing
                                opportunities,
                                hidden threats, changing customer expectations, and the competitive landscape in context and
                                at the
                                right time in order to respond meaningfully. This, in turn, helps to automate the supply
                                chain, drive
                                continuous innovation, and create customer experiences based on micro-moments.
                      </span> </div>
                </div>
              
            </div>
        </div>
             <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square5">
                           <img src="{{ asset('assets/images/services/testing_and_qa.png') }}"width="60px"
                                height="60px" />
                  </span> </div>
                <div class="email mt-1">
                  <h2 class="services_heading">Testing & QA</h2>
                    <div class="dummytext mt-3"> <span>
                      A successful business is synonymous with a high-quality web product. One of the most
                                important steps
                                before launching a website is website QA testing. At Codepilot Technologies, we provide
                                manual and
                                automated testing activities to oversee the entire quality assurance process, increasing
                                business
                                productivity by providing regular test reports and QA team performance reports.
                      </span> </div>
                </div>
              
            </div>
        </div>
             <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square5">
                    <img src="{{ asset('assets/images/services/branding_and_strategy.png') }}" width="60px"
                                height="60px" />
                  </span> </div>
                <div class="email mt-1"> 
                  <h2 class="services_heading">Branding & Strategy</h2>
                    <div class="dummytext mt-3"> <span>We are a group of individuals from various tech, showcasing, and configuration foundations
                                who work
                                together to keep us on track. We distinguish ourselves from our competitors by offering
                                quantifiable and
                                dependable SEO administrations that truly work. We strive to provide comprehensive,
                                all-encompassing
                                advanced advertising and digital solutions to all organisations.</span> </div>
                </div>
              
            </div>
        </div>
         <div class="col-md-4">
            <div class="card p-2">
                <div class="d-flex p-1 px-4 align-items-center"> <span class="square5">
                    <img src="{{ asset('assets/images/services/cloud_consulting_implementation.png') }}"
                               width="60px"
                                height="60px" />
                  </span> </div>
                <div class="email mt-1"> 
                  <h2 class="services_heading">Cloud Consulting &
                                    Implementation</h2>
                    <div class="dummytext mt-3"> <span>
                    We understand that the cloud is not the best solution for every business. By aligning scope,
                                timeline, and resources in a way that surpasses your business, we aim to meet your business
                                objectives. Our team of experts can not only provide endless business solutions, but also
                                implement your needs in the most efficient and cost-effective manner.
                      </span> </div>
                </div>
              
            </div>
        </div>
    </div>

</div>
   
    <!-- end services section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container text-center" data-aos="zoom-in">
            <h4>Need software solutions?</h4>
          <p class="text-center">PLAN - DESIGN - DEVELOP - DEPLOY</p>
            <a class="cta-btn" href="{{ url('/contact') }}">CONNECT WITH US<i class="bi bi-box-arrow-in-up-right ms-1"></i></a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ====== Workflow Section====== -->
    <div class="section-title mt-5">
        <h2>Workflow At Codepilot</h2>
    </div>
   <div class="services pd " style="margin-top:-60px;">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-2">
            <div class="square">
              <i class="bi bi-alarm"></i>
            </div>
            <div class="serv">
              <h5>On Time</h5>
            </div>
          </div>
           <div class="col-md-2">
            <div class="square">
             <i class="bi bi-person-workspace"></i>
            </div>
            <div class="serv">
              <h5>Effective Work</h5>
            </div>
          </div>
          <div class="col-md-2">
            <div class="serv">
              <div class="square"><i class="bi bi-code-slash"></i></div>
              <h5>High Quality Development</h5>
            </div>
          </div>
          <div class="col-md-2">
            <div class="square"><i class="bi bi-gear-wide-connected"></i></div>
            
            <div class="serv">
              <h5>Project Support</h5>
            </div>
          </div>
          <div class="col-md-2">
            <div class="square">
            <i class="bi bi-wallet-fill"></i>
            </div>
            <div class="serv">
              <h5>Budget Flexibility</h5>
            </div>
          </div>
             <div class="col-md-2">
            <div class="square">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div class="serv">
              <h5>We are Agile</h5>
            </div>
          </div>
       
        </div>
      </div>
    </div>
    
    <!-- ====== End Workflow Section ====== -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
        <div class="container" data-aos="fade-up">

            <header class="section-title">
                <h2 class="mb-5">Case Studies</h2>
            </header>
            @foreach ($data as $datas)
                <div class="counters mySlides">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 text-center">
                            <h1 class="caseStudy_font" style="text-align: start;">{{ $datas->cs_title }}</h1>
                            @if (strlen(html_entity_decode(strip_tags($datas->cs_description))) >= 420)
                                <p class="caseStudy_para" style="text-align: justify; margin-top:10px;">
                                    {!! substr(strip_tags($datas->cs_description), 0, 420) !!}......<br>
                            @endif

                            <button class="caseStudy_btn1">
                                <a href="{{ url('/case-study') . '/' . $datas->slug }}"
                                    style="text-align: left;"></i>Read
                                    full Case Study<i class="bi bi-arrow-right ms-1"></i> </a>
                            </button>
                            <button class="caseStudy_btn2">
                                <a href="{{ url('/case-study') }}" style="text-align: left;"></i>View all Case Studies<i
                                        class="bi bi-arrow-right ms-1"></i> </a>
                            </button>
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12 text-center">
                            <h2 class="caseStudy_font">TECHNOLOGY USED</h2>
                            @foreach (Explode(',', $datas->tech_used) as $key => $value)
                                <div class="tech_span"><img
                                        src="{{ asset('assets/uploads/techicon/icons') . '/' . explode(',', $datas->tech_icon)[$key] }}"
                                        alt="{{ $datas->cs_title }}">{{ explode(',', $datas->tech_used)[$key] }}
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="facts-img">
                        <img src="{{ asset('assets/uploads/casestudy/feature-image') . '/' . $datas->cs_image }}"
                            alt="" class="img-fluid" style="width: 1000px; height:500px">
                    </div>
                </div>
            @endforeach
            <button id="btncs1" class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">
                &#10094;
            </button>
            <button id="btncs2" class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">
                &#10095;
            </button>
    </section>

<!-- End Facts Section -->

 <!----- testimonial section starts ---->
  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Client Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
               
                 <img src="{{ asset('assets/images/testimonials/korangani_logo.png') }}"
                                width="140px"
                                height="50px" alt="korangini_tea"/>
                <h3 class="mt-4">Debajit Chaliha</h3>
                
                <h4>Director of Korangini Tea </h4>
                 <h5> <i class="bi bi-geo-alt"></i> Guwahati, Assam, India</h5>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Codepilot is a group of young enthusiastic locals, who are not apprehensive of tackling unique challenges which clients come up with. They may take some time, but they come up with the necessary solution.  
                 They are courteous, with a hunger to excel and explore new boundaries. Korangani Tea is happy to be associated with them for the last 4 years.
                
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <!--<h6>Visit their website for more :  <a class="text-success fw-bold" href="https://www.koranganitea.com/"> Korangini Tea- The Tea Flavour of Assam</a></h6> --->
                <a href="https://www.koranganitea.com/" target="_blank" class="testimonial__button">click here to visit their website <i class="bi bi-arrow-right ms-1"></i></a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="{{ asset('assets/images/testimonials/scoredemy.png') }}"
                                width="140px"
                                height="60px" alt=""/>
                <h3 class="mt-4">Matiar Rahman</h3>
                <h4>Director of Scordemy</h4>
                <h5> <i class="bi bi-geo-alt"></i> Guwahati, Assam, India</h5>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Amazing and truly effective services with proper planning and strategies.
                  Very professional and hardworking staff. Codepilot Technologies Pvt. Ltd.,
                  the best place to get satisfactory mobile application development services.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <a href="https://scordemy.in/" target="_blank" class="testimonial__button">click here to visit their website  <i class="bi bi-arrow-right ms-1"></i></a>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <img src="{{ asset('assets/images/testimonials/indoseasons.png') }}"
                                width="150px" height="80px" alt="indo_seasons"/>
                <h3 class="mt-4">Rajat swami</h3>
                <h4>Owner of Indo-seasons</h4>
                <h5> <i class="bi bi-geo-alt"></i> Guwahati, Assam, India</h5>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  For any software development services, I would highly recommend Codepilot Technologies. They are very confident with their work and deliver the given project on time. I wanted a website and a mobile app for the warehouse management system and inventory for my company and was very satisfied with their impressive work.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <a href="http://indoseasons.com/" target="_blank" class="testimonial__button">click here to visit their website  <i class="bi bi-arrow-right ms-1"></i></a>
                
                
              </div>
            </div><!-- End testimonial item -->           

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
   
  <!----- End oftestimonial section --->

    <!-- ======= Clients Section ======= -->

    <section id="clients" class="clients mb-3" style="margin-top:-71px;">
        <div class="container">
            <div class="section-title">
                <h2 class="p-4">Trusted by clients like</h2>
            </div>

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/clients/alohi.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/clients/bio-doc.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/clients/business_ne.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/clients/korangini.png') }}" class="img-fluid" alt="">
                </div>

                <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <img src="assets/images/clients/NE.png" class="img-fluid" alt="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div> -->

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/clients/sfs.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/images/clients/talkchild.png') }}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>

    <!-- End Clients Section -->

@endsection
@section('custom-js')
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs((slideIndex += n));
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = x.length;
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                var submit = $("#contactFormBtn");


                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        submit.attr('disabled', true).html("please wait..");
                    },
                    success: function(data) {

                        submit.attr('disabled', false).html("Send Message");

                        if (data == 'success') {

                            $('#exampleModal').modal('show');
                            $('#contactForm').trigger("reset");


                            // alert("Message successfully sent.We will get back to you soon");
                        } else {
                            alert("Server Error");
                        }
                        // console.log(data);
                    }
                });


            });
        })
    </script>
@endsection
