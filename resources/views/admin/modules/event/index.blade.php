erbhnserthneh
@extends('admin.layouts.master')
@section('title')
    Events
@endsection

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Event</h5>

                            <div class="d-flex justify-content-between mb-4">
                                <a href="{{ route('event.create') }}" class="btn btn-primary">Create Event</a>
                            </div>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>S/L</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Event Date</th>
                                        <th>Project</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $event->name }}</td>
                                        <td>
                                            @if ($event->image)
                                                <img src="{{ asset($event->image) }}" width="50" height="50"
                                                    alt="Event Image">
                                            @endif

                                        </td>
                                        <td>{{ $event->event_date }}</td>
                                        <td>{{ $event->project->name }}</td>
                                        <td>
                                            <a href="{{ route('event.edit', $event->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('event.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
