@extends('layouts.auth.master')
@section('content')
    @push('extended-css')
    @endpush
@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Reset Password basic -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="#" class="brand-logo">
                        <img src="{{ asset('assets/images/QC1.png') }}" style="width:fit-content;height:fit-content"
                            onerror="this.onerror=null;this.src='{{ asset('assets/images/logo.png') }}'">

                        {{-- <h2 class="brand-text text-primary ms-1">QC</h2> --}}
                    </a>

                    <h4 class="card-title mb-1">Reset Password 🔒</h4>
                    <p class="card-text mb-2">You can change your password any time</p>

                    <form id="reset-password-form" class="auth-reset-password-form mt-2"
                        action="{{ route('password.update') }}" method="POST" novalidate>
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="reset-password-new">Your Email</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="text" class="form-control form-control-merge" id="email" name="email"
                                    value={{ $user }}
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="reset-password-new" tabindex="1" autofocus="false" required
                                    readonly />

                            </div>
                        </div>
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="reset-password-new">New Password</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="reset-password-new"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="reset-password-new" tabindex="1" autofocus required />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye-off"></i></span>
                            </div>
                        </div>
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="reset-password-confirm">Confirm Password</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="reset-password-confirm"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="reset-password-confirm" tabindex="2" required />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye-off"></i></span>
                            </div>
                        </div>
                        <button type="submit" id="resetPassword" class="btn btn-primary w-100" tabindex="3">Set New
                            Password</button>
                    </form>

                    <p class="text-center mt-2">
                        <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Back to login </a>
                    </p>
                </div>
            </div>
            <!-- /Reset Password basic -->
        </div>
    </div>
@endsection
@push('extended-js')
    <script>
        let val = true;
        let user = @json($user);
    </script>

    <script src="{{ asset('app-assets/js/scripts/pages/auth-reset-password.js') }}"></script>
    <script src="{{ asset('js/forget_password/reset_password.js') }}"></script>
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
@endpush
