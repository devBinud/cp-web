@extends('public.layouts.layout')
@section('title','Portfolio | Codepilot Technologies, Guwahati,India')
@section('meta-description','Project showcase of websites, mobile app development, ecommerce and custom software development. Looking for any digital service? Call: +91 7635960463')
@section('meta-keywords', 'portfolio, projects, website design and development, app development, ecommerce , custom sofware development, USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas, philadelphia, houston, europe, barcelona, berlin, amsterdam, warsaw, India, Guwahati, Jaipur, Bengaluru, Mumbai,  Delhi, Cochin, Coimbatore, Kolkata, Hyderabad, Vizag, Assam , Northeast India, Nairobi, Accra, Johannesburg, Dubai, Kuwait, muscat, abu dhabi')
@section('body')
@section('url', 'https://www.codepilot.in/portfolio')
@section('image', 'assets/images/portfolio/alohi.png')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg portfolio_bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Our Portfolio</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 portfolio-container ">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.alohiin.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/alohi.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.alohiin.com/" title="More Details">ALOHI</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.aquaticgarden.in/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/aquatic.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.aquaticgarden.in/" title="More Details">AQUATICGARDEN</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.biometricdocument.com/"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ 'assets/images/portfolio/biometric.png' }}" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.biometricdocument.com/" title="More Details">BIOMETRIC
                                        DOCUMENTS</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.biometricdocument.com/"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ asset('assets/images/portfolio/business-ne.png') }}" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.biometricdocument.com/" title="More Details">BUSINESS DOCUMENTS</a>
                                </h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="http://www.documents-consultancy.com/"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ asset('assets/images/portfolio/documentsconsultancy.png') }}" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="http://www.documents-consultancy.com/" title="More Details">DOCUMENTS
                                        CONSULTANCY</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://jlaluminium.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/jlent.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://jlaluminium.com/" title="More Details">JL ENTERPRISE</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://jtpcindia.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/jtpc.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://jtpcindia.com/" title="More Details">JTPC</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.koranganitea.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/korangani.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.koranganitea.com/" title="More Details">KORANGINI TEA</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="http://www.leisureinnreposehotel.com/"
                                data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="{{ asset('assets/images/portfolio/leisure.png') }}" class="img-fluid"
                                    alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="http://www.leisureinnreposehotel.com/" title="More Details">LEISURE INN
                                        REPOSE HOTEL</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.neindianews.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/neindia.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.neindianews.com/" title="More Details">NEIndia NEWS</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.savemari.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/savemari.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.savemari.com/" title="More Details">SAVEMARI</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.sfssilapathar.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/sfs.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.sfssilapathar.com/" title="More Details">SFS SCHOOL</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.talkchild.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/talkchild.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.talkchild.com/" title="More Details">TALKCHILD</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="https://www.msfsguwahati.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/msfs.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="https://www.msfsguwahati.com/" title="More Details">MSFS</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a target="_blank" href="http://nklsteel.com/" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="{{ asset('assets/images/portfolio/nkl.png') }}"
                                    class="img-fluid" alt=""></a>
                            <div class="portfolio-info text-center">
                                <h4><a href="http://nklsteel.com/" title="More Details">NKL STEEL</a></h4>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
