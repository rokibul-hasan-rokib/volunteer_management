@extends('frontend.layouts.app')
@section('title')
   contact
@endsection
@section('content')
    <!-- page-title -->
<section class="page-title bg-cover" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /page-title -->

  <div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758" data-marker="images/marker.png"></div>

@endsection
