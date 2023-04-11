@extends('public.layouts.layout')
@section('title', "$data->blog_meta_title")
@section('meta-description', "$data->meta_description")
@section('meta-keywords', "$data->meta_keywords")
@section('meta-header')
    {!! $data->meta_header !!}
@endsection
@section('url', "$data->meta_url")
@section('ogtitle', "$data->blog_meta_title")
@section('meta-og-description', "$data->meta_description")
@section('image', "assets/uploads/blog/feature-image/$data->blog_img")
@section('twitter:card', "$data->twitter_card")
@section('twitter:site', "$data->twitter_site")
@section('twitter:title', "$data->twitter_title")
@section('twitter:description', "$data->twitter_description")
@section('twitter:image', "$data->twitter_image")
@section('body')

    <main id="main">
        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-3">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ asset('assets/uploads/blog/feature-image') . '/' . $data->blog_img }}"
                                    alt="{{ $data->blog_title }}" class="img-fluid mb-4">
                            </div>
                          	<div style="float:right;">
                                      Share 
                                      <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.codepilot.in/blog/{{ $data->slug }}" target="_blank">
  										<i class="color_social_links bi bi-facebook"></i>
                                      </a>
                              		 <a href="whatsapp://send?text=*{{ $data->blog_title }}* %0a %0a %0a https://www.codepilot.in/blog/{{ $data->slug }}" data-action="share/whatsapp/share"><i class="color_social_links bi bi-whatsapp ms-3"></i></a>
                            </div>
                            <p>Categories: @foreach (Explode(',', $data->cat_names) as $catname)
                                    <a href="{{ url('/category-Search2?catName=') . $catname }}"
                                        style="color: blue">{{ $catname }}
                                        /</a>
                                @endforeach
                            </p>

                            <p><i style="font-size: 20px;" class="bi bi-person"></i> {{ $data->author }}</p>
                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock">
                                            {{ date('d M,Y', strtotime($data->created_at)) }}</i>
                                    </li>
                                </ul>
                              
                            </div><!-- End meta top -->
                            <h1 class="title">{{ $data->blog_title }}</h1>

                            <div class="content">

                                <p>
                                    {!! $data->blog_description !!}
                                </p>
                             </div>

                        </article><!-- End blog post -->

                   </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>

                                <ul class="mt-3">
                                    @foreach (Explode(',', $data->blog_tags) as $tag)
                                        <li><a href="/blog">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>

                            </div><!-- End sidebar tags-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>
              
            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection

@section('meta-footer')
    {!! $data->meta_footer !!}
@endsection
