@extends('auth.applogin')

@section('content')
<span style="padding-top : 11px;">
    <div class="body-ld">
        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="login-container ">
                <form action="{{ route('login.store') }}" method="POST" id="loginForm">
                    @csrf
                    <div class="login-card">
                        <div class="login-header">
                            <div class="logo">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect width="32" height="32" rx="6" fill="#635BFF" />
                                    <path d="M8 12h16v2H8v-2zm0 4h16v2H8v-2zm0 4h10v2H8v-2z" fill="white" />
                                </svg>
                            </div>
                            <h1>Login</h1>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger"
                                style="margin-bottom: 15px; padding: 10px; border-radius: 6px; background: #f8d7da; color: #842029;">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <div class="input-group">
                            <input type="email" id="email" name="email" required autocomplete="email"
                                placeholder=" ">
                            <label for="email">Email address</label>
                            <span class="input-border"></span>
                            <span class="error-message" id="emailError"></span>
                        </div>

                        <div class="input-group">
                            <input type="password" id="password" name="password" required autocomplete="current-password"
                                placeholder=" ">
                            <label for="password">Password</label>
                            </button>
                            <span class="input-border"></span>
                            <span class="error-message" id="passwordError"></span>
                        </div>

                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" id="remember" name="remember">
                                <span class="checkmark">
                                    <svg width="10" height="8" viewBox="0 0 10 8" fill="none">
                                        <path d="M1 4l2.5 2.5L9 1" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Remember me
                            </label>
                        </div>
                        <div class="button-row">
                            <button type="submit" class="submit-btn">
                                <span class="btn-text">Sign in</span>
                                <div class="btn-loader">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="2"
                                            opacity="0.25" />
                                        <path d="M16 9a7 7 0 01-7 7" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round">
                                            <animateTransform attributeName="transform" type="rotate" dur="1s"
                                                values="0 9 9;360 9 9" repeatCount="indefinite" />
                                        </path>
                                    </svg>
                                </div>
                            </button>

                            <a href="{{ route('home') }}" class="submit-btn"
                                style="background-color: red; color: white; border: none;">
                                <span class="btn-text">Kembali</span>
                                <div class="btn-loader">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="2"
                                            opacity="0.25" />
                                        <path d="M16 9a7 7 0 01-7 7" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round">
                                            <animateTransform attributeName="transform" type="rotate" dur="1s"
                                                values="0 9 9;360 9 9" repeatCount="indefinite" />
                                        </path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </span>

            <div class="success-message mb-0" id="successMessage">
                <div class="success-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="12" fill="#635BFF" />
                        <path d="M8 12l3 3 5-5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <h3>Welcome back!</h3>
                <p>Redirecting to your dashboard...</p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
