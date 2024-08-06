@extends('layouts.auth')

@section('content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <div class="card {{ $cardAnimate }}">
                <div class="card-body">
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" width="100">
                        </a>
                    </div>

                    <form id="formSubmit" method="POST" action="javascript:void(0)" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="email">
                                        Email
                                    </label>

                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Masukan Email" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">
                                            Password
                                        </label>
                                    </div>

                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            autocomplete="off">

                                        <span class="input-group-text cursor-pointer" onclick="visiblePassword()">
                                            <i class="ti ti-eye-off" id="password-icon"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="ti ti-login me-1"></i>
                                        Masuk
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    {{-- * Custom JS --}}
    <script src="{{ asset('assets/custom/auth/login.js') }}"></script>
@endsection
