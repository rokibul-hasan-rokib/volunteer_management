@extends('frontend.layouts.app')
@section('title')
    blog
@endsection
@section('content')
<!-- page-title -->
<section class="page-title bg-cover" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg')  }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">Our Blog</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->

  <!-- blog -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-1.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-2.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-3.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-1.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-2.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-3.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-1.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="images/blog/post-2.jpg" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card">
            <img src="{{ asset('frontend/images/blog/post-3.jpg') }}" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-0">
              <time>January 15, 2018</time>
              <a href="blog-single.html" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                Book Covers Reflect the Design</a>
              <a href="blog-single.html" class="btn btn-transparent">Read more</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- /blog -->

  @endsection
