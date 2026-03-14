@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="container py-5">
    <div class="auth-card mx-auto">
        <div class="row g-0 h-100">
            <div class="col-md-5">
                <div class="auth-cover">
                    <a href="{{ route('dashboard.ecommerce') }}" class="auth-logo">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 4L2 12L16 20L30 12L16 4Z" fill="white"/>
                            <path d="M2 20L16 28L30 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 16L16 24L30 16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>ash</span>
                    </a>
                    <h2 class="fw-bold fs-3 mb-3">Join Us Today</h2>
                    <p class="mb-0 text-white-50">Create an account to unlock all features of the Ash Dashboard.</p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="auth-form-wrap">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold">Create an account</h4>
                        <p class="text-muted small">Fill in the form to get started</p>
                    </div>

                    <form action="#" method="POST" class="needs-validation" novalidate id="registerForm">
                        <div class="row g-2 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="John" required>
                                <div class="invalid-feedback">Required.</div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Doe" required>
                                <div class="invalid-feedback">Required.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="example@ash.com" required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control border-end-0" id="passwordInput" placeholder="••••••••" required minlength="8">
                                <button class="btn btn-outline-secondary border-start-0 bg-transparent text-muted" type="button" id="togglePasswordBtn">
                                    <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                                </button>
                                <div class="invalid-feedback">Minimum 8 characters.</div>
                            </div>
                        </div>
                        
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label small" for="terms">I agree to the <a href="#" class="text-primary text-decoration-none fw-medium">Terms and Conditions</a></label>
                            <div class="invalid-feedback">You must agree to continue.</div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>

                        <div class="text-center">
                            <p class="small text-muted mb-0">Already have an account? <a href="{{ route('dashboard.login') }}" class="text-primary text-decoration-none fw-medium">Log in</a></p>
                        </div>
                    </form>

                    <script>
                        (function () {
                            'use strict'
                            var forms = document.querySelectorAll('.needs-validation')
                            Array.prototype.slice.call(forms).forEach(function (form) {
                                form.addEventListener('submit', function (event) {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }
                                    form.classList.add('was-validated')
                                }, false)
                            });

                            // Toggle Password Visibility
                            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
                            const passwordInput = document.getElementById('passwordInput');
                            const togglePasswordIcon = document.getElementById('togglePasswordIcon');
                            
                            if (togglePasswordBtn && passwordInput) {
                                togglePasswordBtn.addEventListener('click', function () {
                                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                    passwordInput.setAttribute('type', type);
                                    togglePasswordIcon.classList.toggle('bi-eye');
                                    togglePasswordIcon.classList.toggle('bi-eye-slash');
                                });
                            }
                        })()
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
