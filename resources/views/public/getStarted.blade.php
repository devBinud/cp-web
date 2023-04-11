@extends('public.layouts.layout')
@section('title', 'Codepilot | Get Started')
@section('body')

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/section_images/get started page image.png') }}" alt=""
                        class="img-fluid">
                </div>

                <div class="col-lg-6">
                    <section id="contact" class="contact">
                        <div class="container">

                            <!-- <div class="section-title">
                                                                <h2>Get Started</h2>
                                                              </div> -->

                            <div class="reply-form">

                                <h4 class="mb-3">Connect for better experience</h4>
                                {{-- <p>Your email address will not be published. Required fields are marked * </p> --}}
                                <form action="{{ url('send-mail.php') }}" method="post" id="contactForm">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Your Name*" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control"
                                                placeholder="Your Email*" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="phone" type="text" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <select name="services" id="" class="form-select">
                                                <option value="">Select Services</option>
                                                <option value="UI/UX Design">UI/UX Design</option>
                                                <option value="Web Application Development">Web Application Development
                                                </option>
                                                <option value="Rapid App Development">Rapid App Development</option>
                                                <option value="Custom Product Development">Custom Product Development
                                                </option>
                                                <option value="Data Engineering Solutions">Data Engineering Solutions
                                                </option>
                                                <option value="Data Analytics & AI">Data Analytics & AI</option>
                                                <option value="Testing & QA">Testing & QA</option>
                                                <option value="Branding & Strategy">Branding & Strategy</option>
                                                <option value="Cloud Consulting & Implementation">Cloud Consulting &
                                                    Implementation
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Please Enter Your Message here..."></textarea>
                                        </div>
                                    </div>
                                  	<div class="g-recaptcha mb-3" data-sitekey="6LdZTXgjAAAAANxR6fDFcnlmvZ37_5glNq1PKykZ"></div>
                                    <button type="submit" id="contactFormBtn" class="btn btn-primary shadow-none">Send
                                        Message <i class="bi bi-arrow-right ms-1"></i></button>
                                </form>

                            </div>

                        </div>

                </div>
    </section>

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
