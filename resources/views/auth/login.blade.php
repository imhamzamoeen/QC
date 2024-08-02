@extends('layouts.auth.master')
@section('content')

    @push('extended-css')

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    @endpush


    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Login basic -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="#" class="brand-logo">
                        <img src="{{asset('assets/images/QC1.png')}}" style="width:fit-content;height:fit-content"  onerror="this.onerror=null;this.src='{{asset('assets/images/logo.png')}}'">
                        
                    </a>

                    <h4 class="card-title mb-1">Welcome to {{ env('APP_NAME') }}! 👋</h4>
                    <p class="card-text mb-2">Please sign-in to your account to continue !</p>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form id="LoginForm" class="auth-login-form mt-2" action="{{ route('login') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        <div class="mb-1">
                            <label for="login-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="login-email" name="email"
                                value="{{ old('email') }}" placeholder="example@example.com"
                                aria-describedby="login-email" tabindex="1" autofocus required />
                        </div>

                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Password</label>
                                <a href="{{ route('password.request') }}">
                                    <small>Forgot Password?</small>
                                </a>
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
                        <button type="submit" class="btn btn-primary waves-effect w-100 login-btn">
                            <span class="spinner-border spinner-border-sm login-spinner" role="status" aria-hidden="true"
                                style="display: none"></span>
                            <span class="ms-25 align-middle login-btn-inner">Sign In</span>
                        </button>
                    </form>

                    {{-- <p class="text-center mt-2">
                        <span>New on our platform?</span>
                        <a href="#">
                            <span>Ask Admin to Create an account</span>
                        </a>
                    </p> --}}

                    {{-- <div class="divider my-2">
                        <div class="divider-text">or</div>
                    </div>

                    <div class="auth-footer-btn d-flex justify-content-center">
                        <a href="#" class="btn btn-facebook">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="btn btn-twitter white">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="btn btn-google">
                            <i data-feather="mail"></i>
                        </a>
                        <a href="#" class="btn btn-github">
                            <i data-feather="github"></i>
                        </a>
                    </div> --}}
                </div>
            </div>
            <!-- /Login basic -->
        </div>
    </div>
@endsection

@push('extended-js')

    <script src="{{ asset('assets/js/custom/auth/login.js') }}"></script>

@endpush
