@extends('frontend.layouts.app')
@section('title')
    Home
@endsection
@section('content')

      <!-- banner -->
      <section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
      data-background="{{ asset('frontend/images/banner/banner2.jpg') }}">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                  <h1 class="display-1 text-white font-weight-bold font-primary">Volenteer Management</h1>
              </div>
          </div>
      </div>
  </section>
  <!-- /banner -->

    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="section-title">Our Services</h2>
                    <p class="lead">Great work I got a lot more than what I ordered, they are very legítimas and catchy. I went for one
                        of them for my brand but is always better to have more options.</p>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover-bg-secondary shadow py-4 active">
                        <div class="card-body text-center">
                            <div class="position-relative">
                                <i
                                    class="icon-lg icon-box bg-gradient-primary rounded-circle ti-palette mb-5 d-inline-block text-white"></i>
                                <i class="icon-lg icon-watermark text-white ti-palette"></i>
                            </div>
                            <h4 class="mb-4">Design</h4>
                            <p>Great work I got a lot more than what I ordered, they are very legítimas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover-bg-secondary shadow py-4">
                        <div class="card-body text-center">
                            <div class="position-relative">
                                <i
                                    class="icon-lg icon-box bg-gradient-primary rounded-circle ti-dashboard mb-5 d-inline-block text-white"></i>
                                <i class="icon-lg icon-watermark text-white ti-dashboard"></i>
                            </div>
                            <h4 class="mb-4">Development</h4>
                            <p>Great work I got a lot more than what I ordered, they are very legítimas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card hover-bg-secondary shadow py-4">
                        <div class="card-body text-center">
                            <div class="position-relative">
                                <i
                                    class="icon-lg icon-box bg-gradient-primary rounded-circle ti-announcement mb-5 d-inline-block text-white"></i>
                                <i class="icon-lg icon-watermark text-white ti-announcement"></i>
                            </div>
                            <h4 class="mb-4">Marketing</h4>
                            <p>Great work I got a lot more than what I ordered, they are very legítimas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /service -->

    <!-- feature -->
    <section class="section bg-secondary position-relative">
        <div class="bg-image overlay-secondary">
            <img src="{{ asset('frontend/images/feature.jpg') }}" alt="bg-image">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="{{ asset('frontend/images/feature.jpg') }}" alt="feature-image"
                                class="img-fluid">
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-white">We know What Bait to Use</h2>
                                    <div class="section-border ml-0"></div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="media">
                                        <i class="icon text-gradient-primary ti-vector mr-3"></i>
                                        <div class="media-body">
                                            <h4 class="text-white">User Experience</h4>
                                            <p class="text-light">Great work I got a lot more than what I ordered, they are very legítimas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="media">
                                        <i class="icon text-gradient-primary ti-layout mr-3"></i>
                                        <div class="media-body">
                                            <h4 class="text-white">Responsive Layout</h4>
                                            <p class="text-light">Great work I got a lot more than what I ordered, they are very legítimas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="media">
                                        <i class="icon text-gradient-primary ti-headphone-alt mr-3"></i>
                                        <div class="media-body">
                                            <h4 class="text-white">Digital Solutions</h4>
                                            <p class="text-light">Great work I got a lot more than what I ordered, they are very legítimas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="media">
                                        <i class="icon text-gradient-primary ti-ruler-pencil mr-3"></i>
                                        <div class="media-body">
                                            <h4 class="text-white">Bootstrap 4x</h4>
                                            <p class="text-light">Great work I got a lot more than what I ordered, they are very legítimas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /feature -->

    <!-- team -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Team</h2>
                    <p>Great work I got a lot more than what I ordered, they are very legítimas.</p>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                        <img src="{{ asset('frontend/images/team/member-1.jpg') }}" alt="team-member" class="card-img-top">
                        <div class="card-body text-center position-relative zindex-1">
                            <h4><a class="text-dark" href="team-single.html">Sara Adams</a></h4>
                            <i>Designer</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                        <img src="{{ asset('frontend/images/team/member-2.jpg') }}" alt="team-member" class="card-img-top">
                        <div class="card-body text-center position-relative zindex-1">
                            <h4><a class="text-dark" href="team-single.html">Tom Bills</a></h4>
                            <i>Developer</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                        <img src="{{ asset('frontend/images/team/member-3.jpg') }}" alt="team-member" class="card-img-top">
                        <div class="card-body text-center position-relative zindex-1">
                            <h4><a class="text-dark" href="team-single.html">Anna Walle</a></h4>
                            <i>Manager</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                        <img src="{{ asset('frontend/images/team/member-4.jpg') }}" alt="team-member" class="card-img-top">
                        <div class="card-body text-center">
                            <h4>Devid Json</h4>
                            <i>CEO</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /team -->

    <!-- about -->
    <section class="section-lg position-relative bg-cover" data-background="{{ asset('frontend/images/backgrounds/about-bg.jpg') }}">
        <img src="{{ asset('frontend/images/backgrounds/about-bg-overlay.png') }}" alt="overlay" class="overlay-image img-fluid">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-8 col-sm-7 col-8">
                    <h2 class="text-white mb-4">Who We Are</h2>
                    <p class="text-light mb-4">Great work I got a lot more than what I ordered, they are very legítimas.</p>
                    <a href="about.html" class="btn btn-primary">Read More</a>
                </div>
                <div class="col-md-2 col-sm-4 col-4 text-right align-self-end">
                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                        href="https://www.youtube.com/watch?v=jrkvirglgaQ"><i
                            class="text-center icon-sm icon-box rounded-circle text-white bg-gradient-primary d-block ti-control-play"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- project -->
    <section class="section">
        {{-- <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Feature Works</h2>
                    <div class="section-border"></div>
                </div>
            </div>

            <div class="row no-gutters shuffle-wrapper">
                <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                        <img src="{{ asset('frontend/images/project/project-1.jpg') }}" alt="project-image" class="img-fluid w-100">
                        <div class="project-hover bg-secondary px-4 py-3">
                            <a href="#" class="text-white h4">Project title</a>
                            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                        <img src="{{ asset('frontend/images/project/project-2.jpg') }}" alt="project-image" class="img-fluid w-100">
                        <div class="project-hover bg-secondary px-4 py-3">
                            <a href="#" class="text-white h4">Project title</a>
                            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                        <img src="{{ asset('frontend/images/project/project-3.jpg') }}" alt="project-image" class="img-fluid w-100">
                        <div class="project-hover bg-secondary px-4 py-3">
                            <a href="#" class="text-white h4">Project title</a>
                            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                        <img src="{{ asset('frontend/images/project/project-4.jpg') }}" alt="project-image" class="img-fluid w-100">
                        <div class="project-hover bg-secondary px-4 py-3">
                            <a href="#" class="text-white h4">Project title</a>
                            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 shuffle-item">
                    <div class="project-item">
                        <img src="{{ asset('frontend/images/project/project-5.jpg') }}" alt="project-image" class="img-fluid w-100">
                        <div class="project-hover bg-secondary px-4 py-3">
                            <a href="#" class="text-white h4">Project title</a>
                            <a href="#"><i class="ti-link icon-xs text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- /project -->

    <!-- call to action -->
    <section>
        <div class="container section-sm overlay-secondary-half bg-cover" data-background="{{ asset('frontend/images/backgrounds/cta-bg.jpg') }}">
            <div class="row">
                <div class="col-lg-8 offset-lg-1">
                    <h2 class="text-gradient-primary">Let's Start With Us!</h2>
                    <p class="h4 font-weight-bold text-white mb-4">Great work I got a lot more than what I ordered, they are very legítimas.</p>
                    <a href="contact.html" class="btn btn-lg btn-primary">Let’s talk</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /call to action -->

    <!-- pricing -->
    <section class="section pb-0">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Smart Pricing Table</h2>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card bottom-shape bg-secondary pt-4 pb-5">
                        <div class="card-body text-center">
                            <h4 class="text-white">Basic</h4>
                            <p class="text-light mb-4">Besic and simple website</p>
                            <p class="text-white mb-4">$ <span
                                    class="display-3 font-weight-bold vertical-align-middle">30</span></p>
                            <ul class="list-unstyled mb-5">
                                <li class="text-white mb-3">Mobile-Optimized Website</li>
                                <li class="text-white mb-3">Powerful Website Metrics</li>
                                <li class="text-white mb-3">Free Custom Domain</li>
                                <li class="text-white mb-3">24/7 Customer Support</li>
                                <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
                                <li class="text-white mb-3">Sell unlimited Product</li>
                            </ul>
                            <a href="#" class="btn btn-outline-light">Try it now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card bottom-shape bg-secondary pt-4 pb-5">
                        <div class="card-body text-center">
                            <h4 class="text-white">Basic</h4>
                            <p class="text-light mb-4">Besic and simple website</p>
                            <p class="text-white mb-4">$ <span
                                    class="display-3 font-weight-bold vertical-align-middle">30</span></p>
                            <ul class="list-unstyled mb-5">
                                <li class="text-white mb-3">Mobile-Optimized Website</li>
                                <li class="text-white mb-3">Powerful Website Metrics</li>
                                <li class="text-white mb-3">Free Custom Domain</li>
                                <li class="text-white mb-3">24/7 Customer Support</li>
                                <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
                                <li class="text-white mb-3">Sell unlimited Product</li>
                            </ul>
                            <a href="#" class="btn btn-outline-light">Try it now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card bottom-shape bg-secondary pt-4 pb-5">
                        <div class="card-body text-center">
                            <h4 class="text-white">Basic</h4>
                            <p class="text-light mb-4">Besic and simple website</p>
                            <p class="text-white mb-4">$ <span
                                    class="display-3 font-weight-bold vertical-align-middle">30</span></p>
                            <ul class="list-unstyled mb-5">
                                <li class="text-white mb-3">Mobile-Optimized Website</li>
                                <li class="text-white mb-3">Powerful Website Metrics</li>
                                <li class="text-white mb-3">Free Custom Domain</li>
                                <li class="text-white mb-3">24/7 Customer Support</li>
                                <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
                                <li class="text-white mb-3">Sell unlimited Product</li>
                            </ul>
                            <a href="#" class="btn btn-outline-light">Try it now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- /pricing -->

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Latest News</h2>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <article class="card">
                        <img src="{{ asset('frontend/images/blog/post-1.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
                        <div class="card-body p-0">
                            <time>January 15, 2018</time>
                            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How
                                These Different
                                Book Covers Reflect the Design</a>
                            <a href="#" class="btn btn-transparent">Read more</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <article class="card">
                        <img src="{{ asset('frontend/images/blog/post-2.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
                        <div class="card-body p-0">
                            <time>January 15, 2018</time>
                            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How
                                These Different
                                Book Covers Reflect the Design</a>
                            <a href="#" class="btn btn-transparent">Read more</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <article class="card">
                        <img src="{{ asset('frontend/images/blog/post-3.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
                        <div class="card-body p-0">
                            <time>January 15, 2018</time>
                            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How
                                These Different
                                Book Covers Reflect the Design</a>
                            <a href="#" class="btn btn-transparent">Read more</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- /blog -->
@endsection
