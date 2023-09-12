

@extends('frontend.layouts.main')

@section('main-content')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Our Blog</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="{{url('/blog_single')}}"><img src="{{ url('images/sq_img_1.jpg')}}" alt="Image" class="img-fluid rounded mb-4"></a>
            <h3><a href="{{url('/blog_single')}}" class="text-black">7 Factors for Choosing Between Two Jobs</a></h3>
            <div>April 15, 2019 <span class="mx-2">|</span> <a href="#">2 Comments</a></div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.html"><img src="{{ url('images/sq_img_2.jpg')}}" alt="Image" class="img-fluid rounded mb-4"></a>
            <h3><a href="blog-single.html" class="text-black">How to Write a Creative Cover Letter</a></h3>
            <div>April 15, 2019 <span class="mx-2">|</span> <a href="#">2 Comments</a></div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.html"><img src="{{ url('images/sq_img_4.jpg')}}" alt="Image" class="img-fluid rounded mb-4"></a>
            <h3><a href="blog-single.html" class="text-black">The Right Way to Quit a Job You Started</a></h3>
            <div>April 15, 2019 <span class="mx-2">|</span> <a href="#">2 Comments</a></div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.html"><img src="{{ url('images/sq_img_7.jpg')}}" alt="Image" class="img-fluid rounded mb-4"></a>
            <h3><a href="blog-single.html" class="text-black">7 Factors for Choosing Between Two Jobs</a></h3>
            <div>April 15, 2019 <span class="mx-2">|</span> <a href="#">2 Comments</a></div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.html"><img src="{{ url('images/sq_img_5.jpg')}}" alt="Image" class="img-fluid rounded mb-4"></a>
            <h3><a href="blog-single.html" class="text-black">How to Write a Creative Cover Letter</a></h3>
            <div>April 15, 2019 <span class="mx-2">|</span> <a href="#">2 Comments</a></div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.html"><img src="{{ url('images/sq_img_6.jpg')}}" alt="Image" class="img-fluid rounded mb-4"></a>
            <h3><a href="blog-single.html" class="text-black">The Right Way to Quit a Job You Started</a></h3>
            <div>April 15, 2019 <span class="mx-2">|</span> <a href="#">2 Comments</a></div>
          </div>
        </div>
        <div class="row pagination-wrap mt-5">

          <div class="col-md-12 text-center ">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    @endsection
