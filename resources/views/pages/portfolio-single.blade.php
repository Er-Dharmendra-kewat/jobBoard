

@extends('frontend.layouts.main')

@section('main-content')
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Portfolio Single (Extra Pages)</h1>
            <div class="custom-breadcrumbs">
              <a href="index.html">Home</a> <span class="mx-2 slash">/</span>
              <a href="portfolio.html">Portfolio</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Portfolio Single</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pb-0 portfolio-single" id="next-section">

      <div class="container">

        <div class="row mb-5 mt-5">

          <div class="col-lg-8">
            <figure>
              <a href="images/sq_img_6.jpg" data-fancybox="gallery"><img src="{{ url('images/sq_img_6.jpg')}}" alt="Image" class="img-fluid"></a>
            </figure>
            <figure>
              <a href="images/sq_img_2.jpg" data-fancybox="gallery"><img src="{{ url('images/sq_img_2.jpg')}}" alt="Image" class="img-fluid"></a>
            </figure>
            <figure>
              <a href="images/sq_img_7.jpg" data-fancybox="gallery"><img src="{{ url('images/sq_img_7.jpg')}}" alt="Image" class="img-fluid"></a>
            </figure>
            <figure class="mb-0">
              <a href="images/sq_img_8.jpg" data-fancybox="gallery"><img src="{{ url('images/sq_img_8.jpg')}}" alt="Image" class="img-fluid"></a>
            </figure>
          </div>

          <div class="col-lg-4 ml-auto h-100 jm-sticky-top">


            <div class="mb-4">
              <h3 class="mb-4 h4 border-bottom">Project Description</h3>

              <p class="mb-0">Nostrum iure atque enim quisquam minima distinctio omnis consequatur aliquam suscipit quidem esse aspernatur Libero excepturi animi repellendus porro impedit</p>
            </div>

            <div class="row mb-4">

              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Client</strong>
                Google, Inc.
              </div>
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Role</strong>
                Design, Front-End and Back-End (WordPress)
              </div>
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Year Started</strong>
                2019
              </div>
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black mb-3">Website URL</strong>
                <a href="#" class="btn btn-outline-primary border-width-2">Visit Website</a>
              </div>
            </div>

            <div class="block__87154 mb-0">

                <blockquote>
                  <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit</p>
                </blockquote>
                <div class="block__91147 d-flex align-items-center">
                  <figure class="mr-4"><img src="{{ url('images/person_2.jpg')}}" alt="Image" class="img-fluid"></figure>
                  <div>
                    <h3>Chris Peter</h3>
                    <span class="position">Web Designer</span>
                  </div>
                </div>
              </div>

          </div>
        </div>




      </div>
    </section>
    <section class=" py-3 site-section mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <a href="#" class="btn btn-md btn-outline-primary border-width-2 d-block">Previous Project</a>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="btn btn-md btn-primary border-width-2 d-block">All Projects</a>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="btn btn-md btn-outline-primary border-width-2 d-block">Next Project</a>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Happy Candidates Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>Ipsum harum assumenda in eum vel eveniet numquam cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="{{ url('images/person_1.jpg')}}" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Elisabeth Smith</h3>
                  <span class="position">Creative Director</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="{{ url('images/person_2.jpg')}}" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Chris Peter</h3>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

   @endsection
