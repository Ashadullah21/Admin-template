@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Components</li>
@endsection

@section('page-title', 'UI Components')

@section('content')
<div class="container-fluid">
    <div class="row g-4">
        <!-- Buttons Section -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-bottom p-4">
                    <h6 class="fw-bold mb-0">Buttons</h6>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <button class="btn btn-primary rounded-pill px-4">Primary</button>
                        <button class="btn btn-outline-primary rounded-pill px-4">Outline</button>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-sm btn-light border rounded-pill px-3">Small</button>
                        <button class="btn btn-lg btn-primary rounded-pill px-5">Large</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Badges Section -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-bottom p-4">
                    <h6 class="fw-bold mb-0">Badges & Status</h6>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-primary-subtle text-primary py-2 px-3 rounded-pill">Active</span>
                        <span class="badge bg-success-subtle text-success py-2 px-3 rounded-pill">Completed</span>
                        <span class="badge bg-warning-subtle text-warning py-2 px-3 rounded-pill">Pending</span>
                        <span class="badge bg-danger-subtle text-danger py-2 px-3 rounded-pill">Cancelled</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white border-bottom p-4">
                    <h6 class="fw-bold mb-0">Content Cards</h6>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card border shadow-none rounded-4 p-4 text-center">
                                <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                                <h6 class="fw-bold">Security First</h6>
                                <p class="text-muted small mb-0">Built-in protections against CSRF and injection.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border shadow-none rounded-4 p-4 text-center">
                                <i class="bi bi-lightning-charge text-warning fs-1 mb-3"></i>
                                <h6 class="fw-bold">Fast Rendering</h6>
                                <p class="text-muted small mb-0">Optimized Blade templates for performance.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border shadow-none rounded-4 p-4 text-center">
                                <i class="bi bi-palette text-success fs-1 mb-3"></i>
                                <h6 class="fw-bold">Easy Theme</h6>
                                <p class="text-muted small mb-0">Customizable CSS variables for rapid branding.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
