@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Settings</li>
@endsection

@section('page-title', 'Account Settings')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary px-4 rounded-pill shadow-sm">Save Changes</button>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="settings-nav mb-4">
                <a href="#" class="settings-nav-item active">
                    <i class="bi bi-person"></i> General Profile
                </a>
                <a href="#" class="settings-nav-item">
                    <i class="bi bi-bell"></i> Notifications
                </a>
                <a href="#" class="settings-nav-item">
                    <i class="bi bi-shield-lock"></i> Security & Privacy
                </a>
                <a href="#" class="settings-nav-item">
                    <i class="bi bi-credit-card"></i> Billing Details
                </a>
                <a href="#" class="settings-nav-item">
                    <i class="bi bi-plug"></i> Integrations
                </a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card mb-4 border-0 shadow-sm rounded-4">
                <div class="card-header bg-white border-bottom p-4">
                    <h5 class="fw-bold mb-0">Personal Information</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center mb-5 pb-4 border-bottom">
                        <div class="col-auto">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Captain" width="80" height="80" class="rounded-circle border" alt="Avatar">
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-primary btn-sm me-2 fw-medium rounded-pill px-3">Change Avatar</button>
                            <button class="btn btn-light btn-sm fw-medium rounded-pill px-3 text-danger border">Remove</button>
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="form-label fw-medium small text-muted">First Name</label>
                            <input type="text" class="form-control" value="Jerry">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium small text-muted">Last Name</label>
                            <input type="text" class="form-control" value="Alexander">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium small text-muted">Email Address</label>
                            <input type="email" class="form-control" value="jerry@ash.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-medium small text-muted">Phone Number</label>
                            <input type="text" class="form-control" value="+1 (555) 123-4567">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-medium small text-muted">Bio</label>
                            <textarea class="form-control" rows="3">Passionate product designer with over 8 years of experience building modern web applications.</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white border-bottom p-4">
                    <h5 class="fw-bold mb-0">Preferences</h5>
                </div>
                <div class="card-body p-4">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <div class="settings-param-title">Email Notifications</div>
                            <p class="settings-param-desc">Receive updates about activity on your projects.</p>
                        </div>
                        <div class="form-check form-switch m-0">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <div class="settings-param-title">Weekly Report</div>
                            <p class="settings-param-desc">Get a summary view of your team's performance every Monday.</p>
                        </div>
                        <div class="form-check form-switch m-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <div class="settings-param-title">Dark Mode</div>
                            <p class="settings-param-desc">Enable dark theme across the dashboard interfaces.</p>
                        </div>
                        <div class="form-check form-switch m-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="settings-param-title">Two-Factor Authentication</div>
                            <p class="settings-param-desc">Add an extra layer of security to your account.</p>
                        </div>
                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-medium">Enable 2FA</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
