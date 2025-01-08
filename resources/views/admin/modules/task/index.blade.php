erbhnserthneh
@extends('admin.layouts.master')
@section('title')
    tasks
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
                            <h5 class="card-title">Task</h5>
                            <div class="d-flex justify-content-between mb-4">
                                <a href="{{ route('task.create') }}" class="btn btn-primary">Create Task</a>
                            </div>




                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>S/L</th>
                                        <th>Title</th>
                                        <th>Event</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->event->name }}</td>
                                        <td>{{ $task->user->name }}</td>
                                        <td>{{ \App\Models\Task::STATUS_LIST[$task->status] }}</td>
                                        <td>
                                            <a href="{{ route('task.edit', $task->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
