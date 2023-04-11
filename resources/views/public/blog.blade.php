@extends('public.layouts.layout')
@section('title', 'Blog | Codepilot Technologies, Guwahati,India')
@section('meta-description',
    'Read our latest blogs on technologies, software development, tech news and much more
    Looking for any digital service? Call: +91 7635960463')
@section('meta-keywords',
    'blog, website design and development, app development, ecommerce, custom software
    development, USA, seattle, boston, new york, san francisco, chicago, los angeles, washington, miami, nashville, texas,
    philadelphia, houston, europe, barcelona, berlin, amsterdam, warsaw, India, Guwahati, Jaipur, Bengaluru, Mumbai, Delhi,
    Cochin, Coimbatore, Kolkata, Hyderabad, Vizag, Assam , Northeast India, Nairobi, Accra, Johannesburg, Dubai, Kuwait,
    muscat, abu dhabi')
@section('ogtitle', 'Blog | Codepilot Technologies, Guwahati,India')
@section('meta-og-description', 'Read our latest blogs on technologies, software development, tech news and much more
    Looking for any digital service? Call: +91 7635960463')
@section('url', 'https://www.codepilot.in/blog')
@section('image', 'assets/uploads/blog/feature-image/bImage6315b5ba7184f0.png')
@section('body')

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class=" section-title">
                        <h2>Recent Blog Posts</h2>
                    </div>
                    <div class="row">
                        @foreach ($datas as $data)
                            <div class="col-xl-4 col-md-6 mt-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="post-item position-relative h-100">

                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="{{ asset('assets/uploads/blog/feature-image') . '/' . $data->blog_img }}"
                                            class="img-fluid" alt="{{ $data->blog_title }}"
                                            style="width: 350px; height: 180px">
                                        <span class="post-date">{{ date('d M,Y', strtotime($data->created_at)) }}</span>
                                    </div>

                                    <div class="post-content d-flex flex-column">
                                        @if (strlen(html_entity_decode(strip_tags($data->blog_title))) >= 1)
                                            <h1 class="post-title" style="min-height: 40px">
                                                {{ substr(strip_tags($data->blog_title), 0, 43) }}......
                                            </h1>
                                        @endif
                                        <hr>

                                        <a href="{{ url('/blog') . '/' . $data->slug }}"
                                            class="readmore stretched-link"><span>Read
                                                More</span><i class="bi bi-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div><!-- End post item -->
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <section id="blog" class="blog">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="sidebar">
                                        <div class="sidebar-item tags">
                                            <h3 class="sidebar-title">Categories</h3>
                                            <ul class="mt-3">
                                                @foreach ($allCat as $data)
                                                    <a
                                                        href="{{ url('/category-Search?catName=') . $data->cat_name }}">{{ $data->cat_name }}</a>
                                                @endforeach
                                            </ul>
                                        </div><!-- End sidebar tags-->
                                    </div><!-- End Blog Sidebar -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->

@endsection
