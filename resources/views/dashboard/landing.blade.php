@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-landing.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Landing</li>
@endsection

@section('page-title', 'Welcome to Ash')

@section('content')
<div class="container-fluid">
    <!-- Hero Section -->
    <div class="landing-hero shadow-sm mb-5">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 mb-3 fw-bold">v2.0 Now Available</span>
        <h1 class="display-5 fw-bold text-dark mb-3" style="letter-spacing: -0.02em; z-index: 1; position: relative;">
            The Ultimate <span class="text-primary">Admin Dashboard</span> for Modern Teams
        </h1>
        <p class="lead text-muted mb-4 mx-auto" style="max-width: 600px; z-index: 1; position: relative;">
            Ash provides a seamless, lightning-fast experience for managing your business operations, analytics, and team collaborations all in one place.
        </p>
        <div class="d-flex justify-content-center gap-3" style="z-index: 1; position: relative;">
            <button class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">Get Started</button>
            <button class="btn btn-outline-primary bg-white btn-lg rounded-pill px-4 fw-bold shadow-sm"><i class="bi bi-play-circle me-2"></i> Watch Demo</button>
        </div>
    </div>

    <!-- Features -->
    <div class="text-center mb-5 mt-5 pt-3">
        <h3 class="fw-bold mb-2">Everything You Need</h3>
        <p class="text-muted">A complete toolkit engineered for speed and aesthetic perfection.</p>
    </div>

    <div class="row g-4 mb-5 pb-4">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-rocket-takeoff"></i></div>
                <h5 class="fw-bold mb-3">Lightning Fast</h5>
                <p class="text-muted small mb-0">Engineered with optimized assets and modern caching to ensure your dashboard loads instantly on any device.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon bg-success-subtle text-success"><i class="bi bi-palette"></i></div>
                <h5 class="fw-bold mb-3">Premium Design</h5>
                <p class="text-muted small mb-0">Crafted with a meticulous attention to detail, featuring beautiful typography, glassmorphism, and smooth animations.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon bg-warning-subtle text-warning"><i class="bi bi-grid-1x2"></i></div>
                <h5 class="fw-bold mb-3">Highly Customizable</h5>
                <p class="text-muted small mb-0">Tweak UI components, switch themes, and organize layouts to perfectly fit your company's operational needs.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="card bg-dark text-white border-0 rounded-4 overflow-hidden mb-4 shadow" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
        <div class="card-body p-5 text-center">
            <h3 class="fw-bold mb-3">Ready to transform your workflow?</h3>
            <p class="text-white-50 mb-4 mx-auto" style="max-width: 500px;">Join over 10,000 teams who use Ash to streamline their operations and scale their business efficiently.</p>
            <button class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-lg">Purchase License Now</button>
        </div>
    </div>
    
    <div class="text-center text-muted small pb-4">
        &copy; 2026 Ash UI Framework. All rights reserved.
    </div>
</div>
@endsection
