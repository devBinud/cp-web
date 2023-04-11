@extends('public.layouts.layout')
@section('title','Contact  Us | Codepilot Technologies, Guwahati, Assam')
@section('meta-description','Call: +91 7635960463 , Mail : info@codepilot.com , Address : #430, Second Floor Near Hanuman Mandir, Guwahati, Assam, Pin No: 781034')
@section('meta-keywords', 'software, software company in guwahati, software company in India, software development, billing software, inventory management software, custom software development, software developers, software developer, software development firm, best software company, top software company, software company near me, website design and development, mobile app development, iOS app development, android app development, ecommerce app development, ecommerce, USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas, philadelphia, houston, europe, barcelona, berlin, amsterdam, warsaw, India, Nairobi, Accra, Johannesburg, Dubai, Kuwait, muscat, abu dhabi')
@section('ogtitle', 'Contact  Us | Codepilot Technologies, Guwahati, Assam')
@section('meta-og-description', 'Call: +91 7635960463 , Mail : info@codepilot.com , Address : 2nd Floor, BK Arcade, Lokhra Rd, Lal Ganesh, Guwahati, Assam, PIN No: 781034')
@section('url', 'https://www.codepilot.in/contact')
@section('image', 'assets/images/slide/homepage1.png')
@section('body')

    <style>
        .sec-title-style1 {
            position: relative;
            display: block;
            margin-top: -9px;
            padding-bottom: 50px;
        }

        .sec-title-style1.max-width {
            position: relative;
            display: block;
            max-width: 770px;
            margin: -9px auto 0;
            padding-bottom: 52px;
        }

        .sec-title-style1.pabottom50 {
            padding-bottom: 42px;
        }

        .sec-title-style1 .title {
            position: relative;
            display: block;
            color: #131313;
            font-size: 36px;
            line-height: 46px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .sec-title-style1 .title.clr-white {
            color: #ffffff;
        }

        .sec-title-style1 .decor {
            position: relative;
            display: block;
            width: 70px;
            height: 5px;
            margin: 19px 0 0;
        }

        .sec-title-style1 .decor:before {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 5px;
            height: 5px;
            background: #cff9ff;
            border-radius: 50%;
            content: "";
        }

        .sec-title-style1 .decor:after {
            position: absolute;
            top: 0;
            right: 10px;
            bottom: 0;
            width: 5px;
            height: 5px;
            background: #cff9ff;
            border-radius: 50%;
            content: "";
        }

        .sec-title-style1 .decor span {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 1px;
            background: #cff9ff;
            margin: 2px 0;
        }

        .sec-title-style1 .text {
            position: relative;
            display: block;
            margin: 7px 0 0;
        }

        .sec-title-style1 .text p {
            position: relative;
            display: inline-block;
            padding: 0 15px;
            color: #131313;
            font-size: 14px;
            line-height: 16px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0;
        }

        .sec-title-style1 .text.clr-yellow p {
            color: #cff9ff;
        }

        .sec-title-style1 .text .decor-left {
            position: relative;
            top: -2px;
            display: inline-block;
            width: 70px;
            height: 5px;
            background: transparent;
        }

        .sec-title-style1 .text .decor-left span {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 1px;
            background: #cff9ff;
            content: "";
            margin: 2px 0;
        }

        .sec-title-style1 .text .decor-left:before {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 5px;
            height: 5px;
            background: #cff9ff;
            border-radius: 50%;
            content: "";
        }

        .sec-title-style1 .text .decor-left:after {
            position: absolute;
            top: 0;
            right: 10px;
            bottom: 0;
            width: 5px;
            height: 5px;
            background: #cff9ff;
            border-radius: 50%;
            content: "";
        }

        .sec-title-style1 .text .decor-right {
            position: relative;
            top: -2px;
            display: inline-block;
            width: 70px;
            height: 5px;
            background: transparent;
        }

        .sec-title-style1 .text .decor-right span {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 50px;
            height: 1px;
            background: #cff9ff;
            content: "";
            margin: 2px 0;
        }

        .sec-title-style1 .text .decor-right:before {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 5px;
            height: 5px;
            background: #cff9ff;
            border-radius: 50%;
            content: "";
        }

        .sec-title-style1 .text .decor-right:after {
            position: absolute;
            top: 0;
            left: 10px;
            bottom: 0;
            width: 5px;
            height: 5px;
            background: #cff9ff;
            border-radius: 50%;
            content: "";
        }

        .sec-title-style1 .bottom-text {
            position: relative;
            display: block;
            padding-top: 16px;
        }

        .sec-title-style1 .bottom-text p {
            color: #848484;
            font-size: 16px;
            line-height: 26px;
            font-weight: 400;
            margin: 0;
        }

        .sec-title-style1 .bottom-text.clr-gray p {
            color: #cdcdcd;
        }

        .contact-address-area {
            display: block;
            background: #ffffff;
            padding: 0px 0 150px;
        }

        @media only screen and (max-width: 600px) {
            .contact-address-area {
                padding: 30px;
            }
        }

        .contact-address-area .sec-title-style1.max-width {
            padding-bottom: 72px;
        }

        .contact-address-box {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
        }

        .single-contact-address-box {
            position: relative;
            display: block;
            background: #00154a;
            padding: 85px 30px 77px;
        }

        .single-contact-address-box .icon-holder {
            position: relative;
            display: block;
            padding-bottom: 24px;
        }

        .single-contact-address-box .icon-holder span:before {
            font-size: 75px;
        }

        .single-contact-address-box h3 {
            color: #ffffff !important;
            margin: 0px 0 9px;
            font-size: 20px;
        }

        .single-contact-address-box h2 {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            margin: 0 0 19px;
        }

        .single-contact-address-box a {
            color: #ffffff;
        }

        .single-contact-address-box.main-branch {
            /* background:#8898c0; */
            background: #cff9ff;
            /* background:; */
            padding: 53px 16px 51px;
            margin-top: -20px;
            margin-bottom: -20px;
            border-radius: 10px;
        }

        .single-contact-address-box.main-branch h3 {
            color: #131313;
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 38px;
            text-transform: uppercase;
            text-align: center;
        }

        .single-contact-address-box.main-branch .inner {
            position: relative;
            display: block;
        }

        .single-contact-address-box.main-branch .inner ul {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .single-contact-address-box.main-branch .inner ul li {
            position: relative;
            display: block;
            padding-left: 110px;
            border-bottom: 1px solid #737373;
            padding-bottom: 23px;
            margin-bottom: 24px;
        }

        .single-contact-address-box.main-branch .inner ul li:last-child {
            border: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .single-contact-address-box.main-branch .inner ul li .title {
            position: absolute;
            top: 2px;
            left: 0;
            display: inline-block;
        }

        .single-contact-address-box.main-branch .inner ul li .title h4 {
            font-size: 16px;
            color: #140047;
            font-weight: 600;
        }

        .single-contact-address-box.main-branch .inner ul li .title i {
            font-weight: 600;
            margin-right: 5px;
        }

        .single-contact-address-box.main-branch .inner ul li .text {
            position: relative;
            display: block;
        }

        .single-contact-address-box.main-branch .inner ul li .text p {
            color: #140047;
            font-size: 14px;
            line-height: 24px;
            font-weight: 500;
            margin: 0;
        }

        .contact-info-area {
            position: relative;
            display: block;
            background: #ffffff;
        }

        .contact-form {
            position: relative;
            display: block;
            background: #ffffff;
            padding: 100px 60px 80px;
            -webkit-box-shadow: 0px 3px 8px 2px #ededed;
            box-shadow: 0px 3px 8px 2px #ededed;
            z-index: 3;
        }

        @media only screen and (max-width: 600px) {
            .contact-form {
                padding: 30px;
            }
        }

        .contact-form .sec-title-style1 {
            position: relative;
            display: block;
            padding-bottom: 51px;
            width: 50%;
        }

        .contact-form .text-box {
            position: relative;
            display: block;
            margin-top: 19px;
            width: 50%;
        }

        .contact-form .text p {
            color: #848484;
            line-height: 26px;
            margin: 0;
        }

        .contact-form .inner-box {
            position: relative;
            display: block;
            background: #ffffff;
        }

        .contact-form form {
            position: relative;
            display: block;
        }

        .contact-form form .input-box {
            position: relative;
            display: block;
        }

        .contact-form form input[type="text"],
        .contact-form form input[type="tel"],
        .contact-form form input[type="file"],
        .contact-form form input[type="email"],
        .contact-form form textarea {
            position: relative;
            display: block;
            background: #ffffff;
            border: 1px solid #eeeeee;
            width: 100%;
            height: 55px;
            font-size: 16px;
            padding-left: 19px;
            padding-right: 15px;
            border-radius: 0px;
            margin-bottom: 20px;
            transition: all 500ms ease;
        }

        .contact-form form textarea {
            height: 130px;
            padding-left: 19px;
            padding-right: 15px;
            padding-top: 14px;
            padding-bottom: 15px;
        }

        .contact-form form input[type="text"]:focus {
            color: #222222;
            border-color: #d4d4d4;
        }

        .contact-form form input[type="email"]:focus {
            color: #222222;
            border-color: #d4d4d4;
        }

        .contact-form form textarea:focus {
            color: #222222;
            border-color: #d4d4d4;
        }

        .contact-form form input[type="text"]::-webkit-input-placeholder {
            color: #848484;
        }

        .contact-form form input[type="text"]:-moz-placeholder {
            color: #848484;
        }

        .contact-form form input[type="text"]::-moz-placeholder {
            color: #848484;
        }

        .contact-form form input[type="text"]:-ms-input-placeholder {
            color: #848484;
        }

        .contact-form form input[type="email"]::-webkit-input-placeholder {
            color: #848484;
        }

        .contact-form form input[type="email"]:-moz-placeholder {
            color: #848484;
        }

        .contact-form form input[type="email"]::-moz-placeholder {
            color: #848484;
        }

        .contact-form form input[type="email"]:-ms-input-placeholder {
            color: #848484;
        }

        .contact-form form input:focus {
            border-color: #140047;
            outline: #140047;
        }

        .contact-form form button {
            position: relative;
            display: block;
            width: 100%;
            /* background: #140047; */
            border-radius: 10px;
            border: 1px solid #140047;
            color: #140047;
            font-size: 16px;
            line-height: 55px;
            font-weight: 600;
            text-align: center;
            text-transform: capitalize;
            transition: all 200ms linear;
            transition-delay: 0.1s;
            cursor: pointer;
        }

        .contact-form form button:hover {
            color: #00154a;
            background: transparent;
            transition: 0.5s ease;
        }

        @media only screen and (max-width: 600px) {
            .contactmap {
                width: 100%;
                overflow: hidden;
            }
        }
    </style>

    <main id="main">
        <div class="aboutmainbody">
            <section class="contact-address-area">
                <div class="container">
                    <div class="sec-title-style1 text-center max-width">
                        <!-- <div class="text">
                                        <div class="decor-left"><span></span></div>
                                        <p>Quick Contact</p>
                                        <div class="decor-right"><span></span></div>
                                    </div> -->
                        <div class="section-title mt-1">
                            <h2 class="mt-4">Quick Contact</h2>
                        </div>
                    </div>
                    <div class="contact-address-box row">
                        <!--Start Single Contact Address Box-->
                        <div class="col-sm-4 single-contact-address-box text-center">
                            <div class="icon-holder">
                                <span class="icon-clock-1">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span class="path5"></span><span
                                        class="path6"></span><span class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span class="path11"></span><span
                                        class="path12"></span><span class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span class="path17"></span><span
                                        class="path18"></span><span class="path19"></span><span class="path20"></span>
                                </span>
                            </div>
                            <h3><i class="bi bi-whatsapp" aria-hidden="true"></i>&nbsp;Whatsapp</h3>
                            <h2>+91 7635960463</h2>
                        </div>
                        <!--End Single Contact Address Box-->
                        <!--Start Single Contact Address Box-->
                        <div class="col-sm-4 single-contact-address-box main-branch">
                            <h3 style="color:#140047!important">Codepilot Technologies</h3>
                            <div class="inner">
                                <ul>
                                    <li>
                                        <div class="title">
                                            <h4> <i class="bi bi-geo-alt"></i>Registered <br><span style="margin-left:20px;">Address</span> :</h4>
                                        </div>
                                        <div class="text" style="margin-left:20px;">
                                            <p>#430, 2nd Floor, Adagudam,<br> Lal Ganesh, Guwahati <br>
                                            PIN-781034, Assam</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <h4> <i class="bi bi-geo-alt"></i>Head <br><span style="margin-left:20px;">Office</span> :</h4>
                                        </div>
                                        <div class="text">
                                            <p>2nd Floor, BK Arcade, Lokhra Rd<br> Lal Ganesh, Guwahati<br>
                                            PIN-781034, Assam</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <h4><i class="bi bi-telephone"></i> Phone :</h4>
                                        </div>
                                        <div class="text">
                                            <p> +91 7635960463</p>
                                            <p> +91 361-3501042</p>
                                        </div>
                                    </li>

                                    <div style="font-size: 2vh; text-align:center">
                                        <a  target="_blank" href="https://www.facebook.com/codepilottech"> <i
                                                class="bi bi-facebook  fa-xl margin text-dark"></i></a>
                                        <a  target="_blank" href="https://www.instagram.com/codepilottech/" > <i
                                                class="bi bi-instagram  fa-xl margin text-dark ms-2"></i></a>
                                        <a  target="_blank" href="https://www.linkedin.com/company/codepilottech/">
                                            <i class="bi bi-linkedin fa-lg margin text-dark ms-2"></i> </a>
                                          <a target="_blank"  href="https://api.whatsapp.com/send/?phone=917635960463&text=Hello&type=phone_number&app_absent=0"><i
                                        class=" bi bi-whatsapp text-dark ms-2"></i></a>
                                         <a target="_blank" href="https://in.pinterest.com/codepilottechno/"><i
                                        class=" bi bi-pinterest text-dark ms-2"></i></a>
                                      
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <!--End Single Contact Address Box-->
                        <!--Start Single Contact Address Box-->
                        <div class="col-sm-4 single-contact-address-box text-center">
                            <div class="icon-holder">
                                <span class="icon-question-2">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span>
                                </span>
                            </div>
                            <h3><i class="bi bi-envelope"></i> Email ID:</h3>
                            <h2><a class="text-white" style="text-decoration: none" font-size:12px
                                    href="mailto:info@codepilot.in">&nbsp;info@codepilot.in</a></h2>
                        </div>
                        <!--End Single Contact Address Box-->
                    </div>
                </div>
            </section>

    


            <!--End Contact Address Area-->
          <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6 mt-5">
            <iframe style="border:0; width: 100%; height: 370px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.890115482773!2d91.7347407141757!3d26.135125583468646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5bf273000001%3A0x5a3928153923c5bb!2sCodepilot%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1660220784200!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 col-lg-6">
            <div class="reply-form">

                    <h4 class="mb-5">- Please Let us know about your requirements -</h4>
                    <form action="{{ url('send-mail.php') }}" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" class="form-control" placeholder="Your Email*" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 form-group">
                                <select name="services" id="" class="form-select">
                                    <option value="">Select Services</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Web Application Development">Web Application Development</option>
                                    <option value="Rapid App Development">Rapid App Development</option>
                                    <option value="Custom Product Development">Custom Product Development</option>
                                    <option value="Data Engineering Solutions">Data Engineering Solutions</option>
                                    <option value="Data Analytics & AI">Data Analytics & AI</option>
                                    <option value="Testing & QA">Testing & QA</option>
                                    <option value="Branding & Strategy">Branding & Strategy</option>
                                    <option value="Cloud Consulting & Implementation">Cloud Consulting & Implementation
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <textarea name="message" class="form-control" placeholder="Please Enter Your Message here..."></textarea>
                            </div>
                        </div>
                        <div class="g-recaptcha mb-3" data-sitekey="6LdZTXgjAAAAANxR6fDFcnlmvZ37_5glNq1PKykZ"></div>
                        <button type="submit" id="contactFormBtn" class="btn btn-primary">Send Message<i
                                class="bi bi-arrow-right ms-1"></i></button>


                    </form>

                    </div>
            </div>
          </div>
          </div>
    </main>
      
      <!-- End #main -->

@endsection
@section('custom-js')
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
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
