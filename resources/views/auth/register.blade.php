@extends('layouts.master')
@include('theme_include.select')
@section('content')

    @push('extended-css')

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    @endpush


    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">

            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="register-logo">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                        y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                            <h2 class="brand-text">{{ env('APP_NAME') }}</h2>
                            </a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <h3>
                                👋 Hello, Register Users at Quote Calculator
                            </h3>
                            <form id="Register_form" action="/my-register" method="POST" novalidate="novalidate"
                                novalidate="novalidate">
                                @csrf

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-email" class="form-label">Name</label>
                                    </div>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Sir" aria-describedby="name" tabindex="1"
                                        autofocus required />
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-email" class="form-label">Email</label>
                                    </div>
                                    <input type="email" class="form-control" id="login-email" name="email"
                                        value="{{ old('email') }}" placeholder="example@example.com"
                                        aria-describedby="login-email" tabindex="1" required />
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-email" class="form-label">User type</label>
                                    </div>
                                    <select class="select2 w-100" name="user_type" id="sub_policy_type" required>

                                        <option label="" selected disabled>Select a user_type </option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>

                                    </select>
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="login-password">Password</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="login-password"
                                            name="password" tabindex="2"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="login-password" required />
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3"
                                            name="remember" {{ old('remember') ? 'checked' : '' }} />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect w-100 register-btn">
                                    <span class="spinner-border spinner-border-sm login-spinner" role="status"
                                        aria-hidden="true" style="display: none"></span>
                                    <span class="ms-25 align-middle register-btn-inner">Register</span>
                                </button>
                            </form>
                        </div>
                        <div class="tab-content" id="myTabContent">

                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-center mt-2">
                            <span>Already have an Account?</span>
                            <a href="{{ route('login') }}">
                                <span>Sign In here</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Register basic -->
        </div>
    </div>
@endsection

@push('extended-js')

    <script src="{{ asset('assets/js/custom/auth/register.js') }}"></script>
    <script src="{{ asset('assets/js/custom/ajaxCall.js') }}"></script>

@endpush
