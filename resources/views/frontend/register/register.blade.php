@extends('frontend.layouts.app')

@section('title')
    register
@endsection

@section('content')
<main id="main">


    <section class="inner-page">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-dark font-weight-bold">Name</label>
                            <x-required />
                            <input type="text" name="name" id="name" class="form-control">
                            <x-validation-error :error="$errors->first('name')" />
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-dark font-weight-bold">Email</label>
                            <x-required />
                            <input type="email" name="email" id="email" class="form-control" required>
                            <x-validation-error :error="$errors->first('email')" />
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-dark font-weight-bold">Password</label>
                            <x-required />
                            <input type="password" name="password" id="password" class="form-control" required>
                            <x-validation-error :error="$errors->first('password')" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="password_confirmation" class="text-dark font-weight-bold">Password Confirmation</label>
                            <x-required />
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            <x-validation-error :error="$errors->first('password_confirmation')" />
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection
