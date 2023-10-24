@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <main role="main">
        <section class="customer-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="acc-form">
                            <div class="log-acc-page" id="CustomerLoginForm">
                                <div class="content-main-title">
                                    <div class="section-cont-title">
                                        <h2>
                                            <span>Login Account</span>
                                        </h2>
                                    </div>


                                    <p>Please login below account detail</p>
                                    <a href="{{ url('auth/google') }}"  class="ml-2 mt-3 btn btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                          </svg>
                                          <span>Login With Google</span>
                                      </a>

                                </div>
                                <div class="acc-page">
                                    <div class="login">
                                        <form method="post" action="{{ route('login') }}"
                                            accept-charset="UTF-8"><input type="hidden" name="form_type"
                                                value="customer_login" /><input type="hidden" name="utf8"
                                                value="✓" />
                                            @csrf
                                            <div class="login-form-container">

                                                <ul class="fill-form">
                                                    <li class="log-email">
                                                        <label for="Email">Email</label>
                                                        <input type="email" name="email" id="CustomerEmail"
                                                            class="input-full" placeholder="Email" autocorrect="off"
                                                            autocapitalize="off" autofocus>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </li>


                                                    <li class="log-pwd">
                                                        <label>Password</label>
                                                        <input type="password" value="" name="password"
                                                            id="CustomerPassword" class="input-full" placeholder="Password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </li>

                                                </ul>
                                                <div class="form-action-button">
                                                    <button type="submit" class="btn btn-style2">Sign In</button>

                                                    {{-- <a href="#recover" id="RecoverPassword">Forgot your password?</a> --}}

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="acc-wrapper">
                                        <h6>Don't have an account?</h6>
                                        <div class="account-optional-action">
                                            <a href="/account/register" id="customer_register_link">Create account</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="log-acc-page" id="RecoverPasswordForm" style="display: none;">
                                <div class="content-main-title">
                                    <div class="section-cont-title">
                                        <h2>
                                            <span>Reset your password</span>
                                        </h2>
                                    </div>

                                    <p>We will send you an email to reset your password.</p>
                                </div>
                                <div class="acc-page">
                                    <form method="post" action="/account/recover" accept-charset="UTF-8"><input
                                            type="hidden" name="form_type" value="recover_customer_password" /><input
                                            type="hidden" name="utf8" value="✓" />

                                        <div class="login-form-container">

                                            <ul class="fill-form">
                                                <li class="log-email">
                                                    <label for="Email">Email</label>
                                                    <input type="email" value="" name="email" id="RecoverEmail"
                                                        class="input-full" placeholder="Email" autocorrect="off"
                                                        autocapitalize="off">
                                                </li>
                                                <li class="form-toggle-btn">
                                                    <div class="form-action-button">
                                                        <button class="btn btn-style2" type="submit">Submit</button>
                                                        <a href="#" id="HideRecoverPasswordLink">Cancel</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .customer-page .acc-form .log-acc-page .acc-page {
                max-width: 50%;
                margin: 0 auto;
                padding: 30px;
                background-color: #ffffff;

                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            }

            @media (max-width: 1199px) {
                .customer-page .acc-form .log-acc-page .acc-page {
                    max-width: 60%;
                }
            }

            @media (max-width: 991px) {
                .customer-page .acc-form .log-acc-page .acc-page {
                    max-width: 70%;
                }
            }

            @media (max-width: 767px) {
                .customer-page .acc-form .log-acc-page .acc-page {
                    max-width: 100%;
                    padding: 30px 15px;
                }
            }

            /* form css */
            .customer-page .log-acc-page .login-form-container ul.fill-form li {
                margin-top: 13px;
            }

            .customer-page .log-acc-page .login-form-container ul.fill-form li:first-child {
                margin-top: 0px;
            }

            .customer-page .log-acc-page .login-form-container ul.fill-form li label {
                display: block;
                margin-bottom: 8px;
                cursor: auto;
                line-height: 1;
            }

            .customer-page .log-acc-page .login-form-container input {
                width: 100%;
            }

            .customer-page .log-acc-page .login-form-container .form-action-button {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                margin-top: 30px;
            }

            .customer-page .log-acc-page .login-form-container .form-action-button a {
                display: block;
                color: var(--font-color-body);
                margin-top: 16px;
                font-size: 16px;
                text-decoration: underline;
                line-height: 1;
            }

            .customer-page .log-acc-page .login-form-container .form-action-button a:hover {
                color: var(--font-color-primary);
            }

            /* acc-link css */
            .customer-page .log-acc-page .acc-wrapper {
                margin-top: 23px;
                text-align: center;
            }

            .customer-page .log-acc-page .acc-wrapper h6 {
                font-size: 18px;
                font-weight: 500;
            }

            .customer-page .log-acc-page .acc-wrapper .account-optional-action {
                margin-top: 9px;
                line-height: 1;
            }

            .customer-page .log-acc-page .acc-wrapper .account-optional-action a {
                color: var(--font-color-primary);
                font-size: 16px;
                text-decoration: underline;
                -webkit-transition: all 0s ease-in-out 0s;
                -o-transition: all 0s ease-in-out 0s;
                transition: all 0s ease-in-out 0s;
            }

            .customer-page .log-acc-page .acc-wrapper .account-optional-action a:hover {
                color: var(--font-color-body);
            }

            /* error css */
            .customer-page .log-acc-page .errors {
                font-size: 14px;
                padding: 10px 15px;
                margin: 0px 0 13px;

                text-align: left;


            }

            .customer-page .log-acc-page .errors ul {

                margin-left: 15px;

                list-style: square;

            }

            .customer-page .log-acc-page .errors ul li {
                margin-top: 5px;
            }

            .customer-page .log-acc-page .errors ul li:first-child {
                margin-top: 0px;
            }

            /*=====================================
          guest css
        ======================================*/
            .customer-guest-page {
                padding-bottom: 100px;
            }

            .customer-guest-page .log-acc-page .login-form-container {
                text-align: center;
            }

            .customer-guest-page .log-acc-page .login-form-container input {
                width: auto;
            }

            @media (max-width: 1199px) {
                .customer-guest-page {
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                .customer-guest-page {
                    padding-bottom: 60px;
                }
            }
        </style>
    </main>
    <div class="mm-fullscreen-bg"></div>
    <style>
        .mm-fullscreen-bg {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 4;
            opacity: 0;
            visibility: hidden;
        }

        .mm-fullscreen-bg.active {
            opacity: 1;
            visibility: visible;
        }

        .mm-fullscreen-bg,
        .mm-fullscreen-bg.active {
            -webkit-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }
    </style>
@endsection
