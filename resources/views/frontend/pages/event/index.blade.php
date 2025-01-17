@extends('frontend.layouts.app')
@section('title')
  Event
@endsection

@section('content')

<!-- page-title -->
<section class="page-title bg-cover" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">All Events</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->


      <!-- team -->
      <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2>Our Events</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                    <div class="section-border"></div>
                </div>
            </div>
            <div class="row no-gutters">
                @foreach ($events as $event)
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow">
                        <img src="{{ asset($event->image) }}" alt="team-member" class="card-img-top">
                        <div class="card-body text-center position-relative zindex-1">
                            <h4><a class="text-dark" href="team-single.html">{{$event->name}}</a></h4>
                            <i>{{$event->date}}</i>
                            <p>{{$event->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /team -->



  @endsection
