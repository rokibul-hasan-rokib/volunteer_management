@extends('admin.layouts.master')
@section('title')
    user edit
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Edit Form</h5>

                            <!-- General Form Elements -->

                            <form action="{{ route('user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $user['name'] }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $user['email'] }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="" disabled selected>{{ $user['role'] }}</option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="volunteer" {{ $user->role == 'volunteer' ? 'selected' : '' }}>
                                            Volunteer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{ html()->label('Status', 'status') }}
                                    <x-required />
                                    {{ html()->select('status', \App\Models\User::STATUS_LIST)->class('form-select ' . ($errors->has('status') ? 'is-invalid' : ''))->placeholder(__('Select status')) }}
                                    <x-validation-error :error="$errors->first('status')" />
                                </div>


                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
