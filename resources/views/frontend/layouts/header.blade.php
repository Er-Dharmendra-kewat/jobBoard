<!doctype html>
<html lang="en">

<head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="{{ url('css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/line-icons/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body id="top">



    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="{{ url('/') }}">JobBoard</a></div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li class="has-children">
                                <a href="{{ url('/job_listing') }}">Job Listings</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('job_single') }}">Job Single</a></li>
                                    <li><a href="{{ url('/postjob') }}">Post a Job</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="{{ url('/services') }}">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                    <li><a href="{{ url('/service_single') }}">Service Single</a></li>
                                    <li><a href="{{ url('/blog_single') }}">Blog Single</a></li>
                                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                    <li><a href="{{ url('portfolio_single') }}">Portfolio Single</a></li>
                                    <li><a href="{{ url('/testimonials') }}">Testimonials</a></li>
                                    <li><a href="{{ url('/faq') }}">Frequently Ask Questions</a></li>
                                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li class="d-lg-none"><a href="{{ url('/postjob') }}"><span class="mr-2">+</span> Post a
                                    Job</a></li>
                            {{-- <li class="d-lg-none"><a href="login.html">Log In</a></li> --}}

                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </nav>

                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        <div class="ml-auto">
                            <a href="{{ url('/postjob') }}"
                                class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span
                                    class="mr-2 icon-add"></span>Post a Job</a>
                            {{-- <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a> --}}
                        </div>
                        <a href="#"
                            class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>

                </div>
            </div>
        </header>
