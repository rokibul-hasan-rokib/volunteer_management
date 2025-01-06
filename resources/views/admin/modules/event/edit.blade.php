@extends('admin.layouts.master')
@section('title')
    edit event
@endsection
@section('content')




    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Food Created Form</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('admin.modules.event.partials.form')
                                <button type="submit" class="btn btn-primary">Create Event</button>
                            </form>

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

@endsection
