<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Codepilot Technologies Pvt. Ltd.')</title>
    <meta name="description" content="@yield('meta-description', '')">
    <meta name="keywords" content="@yield('meta-keywords', '')">
    <base href="https://www.codepilot.in/">
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="author" content="https://www.codepilot.in" />
    <meta name="facebook-domain-verification" content="p1935lvzt5xisv2ruxi8qci22pdjsv" />
    <meta property="og:url" content="@yield('url', '')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('ogtitle', '')" />
    <meta property="og:description" content="@yield('meta-og-description', '')" />
    <meta property="og:image" content="https://www.codepilot.in/@yield('image', '')" />
    <meta name="twitter:card" content="@yield('twitter:card', 'app')">
    <meta name="twitter:site" content="@yield('twitter:site', '@CodepilotT')">
    <meta name="twitter:title" content="@yield('twitter:title', '')">
    <meta name="twitter:description" content="@yield('twitter:description', '')">
    <meta name="twitter:image" content="@yield('twitter:image', '')">
    <!-- Favicons -->
    <link href="{{ asset('assets/images/fav.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />-->

    
    <!-- Template Main CSS File -->
  
    <link href="{{ asset('assets/css/style.css?version=0.0.7')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/about.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/digitalMarketing.css?version=0.0.1') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/service.css?version=0.3.2') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/whatWeOffer.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/404.css') }}" rel="stylesheet">
  
  	<!-- Re-captcha -->
  	<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LdZTXgjAAAAANxR6fDFcnlmvZ37_5glNq1PKykZ'
        });
      };
    </script>
  	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X5TYXSFPRJ"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-X5TYXSFPRJ');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '516057319974173');
        fbq('track', 'PageView');
    </script>
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : 'your_site_key'
        });
      };
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=516057319974173&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
        .alanBtn-root {
            left: 20px !important;
            bottom: 14px !important;
        }
    </style>

    @yield('meta-header')

</head>

<body>

    <!-- ========Start Header Section ===== -->
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-telephone d-flex align-items-center "><span><a href="tel:+917635960463">+91
                            7635960463</a></span></i>
                <i class="bi bi-envelope d-flex align-items-center ms-4"><a
                        href="mailto:info@codepilot.in">info@codepilot.in</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ url('/careers') }}" class="">Careers</a>
                <!-- <a href="allCaseStudy.html" class="">Case Studies</a> -->
                <a href="{{ url('/contact') }}" class="">Contact</a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about-us') }}">About</a>
                    </li>

                    <li class="dropdown"><a href="#"><span>Services</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/services/ui-ux-design') }}">UI/UX Design</a></li>
                            <li><a href="{{ url('/services/web-application-development') }}">Web Application
                                    Development</a></li>
                            <li><a href="{{ url('/services/app-development') }}">Rapid App Development</a></li>
                            <li><a href="{{ url('/services/custom-software-development') }}">Custom Software
                                    Development</a></li>
                            <li><a href="{{ url('/services/data-engineering-solutions') }}">Data Engineering
                                    Solutions</a></li>
                            <li><a href="{{ url('/services/data-analytics-and-ai') }}">Data Analytics & AI</a></li>
                            <li><a href="{{ url('/services/testing-and-qa') }}">Testing & QA</a></li>
                            <li><a href="{{ url('/services/digital-marketing') }}">Branding & Strategy</a></li>
                            <li><a href="{{ url('/services/cloud-services') }}">Cloud Consulting
                                    &
                                    Implementation</a>
                            </li>

                        </ul>
                    </li>
                         
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/case-study') }}">Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- .navbar -->

            <a href="{{ url('/start') }}" class="get-started_btn scrollto"><span class="d-lg-block">Get Started <i
                        class="bi bi-arrow-right ms-1"></i></span> </a>

        </div>
      
 



     
    </div>
  </div>
</div>
    </header>
    <!-- ========End Header Section ===== -->

    <!--========= Include Index File ==========-->
    @yield('body')

    <!--============= Start Footer Section =====-->

    <!-- ======= Footer ======= -->
    <section id="footer" class="section-padding">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-4">
                    <div class="footer-widget footer-link">
                        <h4>Codepilot Technologies</h4>
                        <p>We are a community of professional software engineers with a wide range of niche expertise
                            that anticipates the needs of your customers by providing robust digital solutions.Our
                            experts hunt for Al and loT innovations to incorporate the newest possibilities in our
                            solutions. By bridging gaps, streamlining processes, and boosting competitiveness, we help
                            businesses thrive.</p>
                        <div class="footer-img mt-4 mb-5">
                            <img src="{{ asset('assets/images/iso_2013.png') }}" width="60px" height="60px" />
                            {{-- <img src="{{asset('assets/images/msme-registration-service-500x500-removebg-preview.png')}}" width="64px"
              height="64px" /> --}}
                            <img src="{{ asset('assets/images/iso_2015.png') }}" width="56px" height="56px" />

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="footer-widget footer-link">
                        <h4>Quick Links</h4>

                        <ul>
                            <li><a href="{{ url('/company') }}">Company</a></li>
                            <li><a href="{{ url('/careers') }}">Careers</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/about-us') }}">About</a></li>
                            <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('/social-media-marketing') }}">Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="footer-widget footer-link">
                        <h4>Services</h4>

                        <ul>
                            <li><a href="{{ url('/services/app-development') }}">Rapid App Development</a></li>
                            <li><a href="{{ url('/services/custom-software-development') }}">Custom Product
                                    Development</a></li>
                            <li><a href="{{ url('/services/data-engineering-solutions') }}">Data Engineering
                                    Solutions</a></li>
                            <li><a href="{{ url('/services/data-analytics-and-ai') }}">Data Analytics and AI</a></li>
                            <li><a href="{{ url('/services/web-application-development') }}">Web Application
                                    Development</a></li>
                            <li><a href="{{ url('/services/cloud-services') }}">Cloud consulting
                                    &
                                    Implementation</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="footer-widget footer-link">
                        <h4>Digital Marketing</h4>
                        <ul>
                            <li><a href="{{ url('/SEO') }}">SEO - Search Engine Optimization</a></li>
                            {{-- <li><a href="{{url('/SEM')}}">SEM - Search Engine Marketing</a></li> --}}
                            <li><a href="{{ url('/social-media-marketing') }}">SMM - Social Media Marketing</a></li>

                            <h4 class="mt-4">Our Resources</h4>
                            <li><a href="{{ url('/case-study') }}">Case Studies</a></li>
                            <li><a href="{{ url('/careers') }}">Hiring Updates</a></li>
                            <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="footer-widget footer-text">
                        <h4>Our location</h4>
                        <p> 2nd Floor, BK Arcade,</p>
                        <p>Lokhra Rd, Lal Ganesh,</p>
                        <p> Guwahati, Assam</p>
                        <p> PIN: 781034</p>
                        <p><span> <i class="bi bi-envelope me-2"></i></span><a
                                href="mailto:info@codepilot.in">info@codepilot.in</a></p>
                        <p><span> <i class="bi bi-phone me-2"></i></span><a href="tel:+917635960463">+91
                                7635960463</a></p>
                        <p><span> <i class="bi bi-telephone me-2"></i></span><a href="tel:91 361-3501042">+91 361-3501042
                        </a></p>
                        <!--<p><span> <i class="bi bi-telephone me-2"></i></span><a href="tel:03613500404">036 1350
                                0404</a></p> -->
                        <hr />
                        <div class="footer-img mt-3 mb-5">
                            <Small class="color_social_links_text">Our social links</Small><br><br>
                            <a target="_blank" href="https://www.facebook.com/codepilottech"><i
                                    class="color_social_links bi bi-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/codepilottech/"><i
                                    class="color_social_links bi bi-instagram ms-3"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/codepilottech/"><i
                                    class="color_social_links bi bi-linkedin ms-3"></i></a>
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=917635960463&text=Hello&type=phone_number&app_absent=0"><i
                                    class="color_social_links bi bi-whatsapp ms-3"></i></a>
                            <a target="_blank" href="https://in.pinterest.com/codepilottechno/"><i
                                    class="color_social_links bi bi-pinterest ms-3"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copy">
                        <p class="text-center">
                          Copyright Codepilot | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  FOOTER AREA END  -->
    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> --}}

  <a class="whtsapp-button-web" target="_blank" href="https://wa.me/917635960463"><i class="color_social_links bi bi-whatsapp ms-3"></i></a>
    
    <!--============= End Footer Section =======-->

    <!--============= Mail Modal Section =======-->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="bi bi-check2-circle" style="font-size: 6vw;color: green;"></i>
                        <h2 style="color:blue">Thank You !</h2>
                        <small>We will get back to you soon</small>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            style="
                            position: absolute;
                            top: 2%;
                            right: 1%;">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Template Main JS File -->
    
    {{-- jquery --}}
    <!--
    <script src="{{ asset('assets/js/jquery.main.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.lightbox-plus-jquery.min.js') }}"></script>
   <script src="{{ asset('assets/admin/js/jquery.main.js') }}"></script>-->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
   

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Vendor JS Files -->
    <!--<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>-->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
 

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Website",
    "name": "Codepilot Technologies - Software Company in Guwahati, India" ,
    "image": "https://www.codepilot.in/assets/images/logo.png" ,
    "url": "https://www.codepilot.in/",
    "telephone": "+917635960463",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "#430, Second Floor,Near Hanuman Mandir, Guwahati, Assam, Pin No: 781034",
        "addressLocality": "Guwahati Assam",
        "postalCode": "781034",
        "addressCountry": "IN"
    },
        "openingHourSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
            ],
            "opens": "09:00",
            "closes": "18:30"
        }],
"sameAs": [
"https://www.facebook.com/codepilottech",
"https://www.linkedin.com/company/codepilottech/",
"https://twitter.com/CodepilotT",
"https://www.instagram.com/codepilottech/"
]
}
</script>
    @yield('custom-js', '')

    @yield('meta-footer', '')

</body>

</html>
