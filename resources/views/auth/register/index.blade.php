@extends('layouts.simple')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('/media/photos/photo14@2x.jpg');">
    <div class="row g-0 justify-content-center bg-black-75">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">

            <!-- Sign Up Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx fw-bold fs-1" href="index.html">
                            <span class="text-dark">E-Patrol</span><span class="text-primary">target</span>
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-signup" id="jq-validation" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required>
                                <span class="input-group-text">
                                    <i class="fa fa-user-circle"></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="jhon doe" required>
                                <span class="input-group-text">
                                    <i class="fa fa-user-circle"></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group input-group-lg">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                <span class="input-group-text">
                                    <i class="fa fa-envelope-open"></i>
                                </span>
                                <!-- Invalid Feedback -->
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                <span class="input-group-text">
                                    <i class="fa fa-asterisk"></i>
                                </span>

                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="Password Confirm">
                                <span class="input-group-text">
                                    <i class="fa fa-asterisk"></i>
                                </span>
                            </div>
                        </div>

                        <div class="text-center mb-4">
                            <button type="submit" class="js-notify btn btn-hero btn-primary">
                                <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
                            </button>
                            <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('login') }}">
                                    <i class="fa fa-plus opacity-50 me-1"></i> Login Account
                                </a>
                            </p>
                        </div>

                    </form>
                    <!-- END Sign Up Form -->
                </div>
            </div>
        </div>
        <!-- END Sign Up Block -->
    </div>
</div>
<!-- END Page Content -->
@endsection

@section('js_after')
<!-- jQuery (required for jQuery Validation plugin) -->
<script src="{{ asset('js/lib/jquery.min.js')}}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<!-- Page JS Code -->
<script src="{{ asset('js/pages/op_auth_signup.min.js') }}"></script>
@endsection
