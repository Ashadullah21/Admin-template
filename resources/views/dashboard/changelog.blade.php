@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Changelog</li>
@endsection

@section('page-title', 'Product Updates')

@section('content')
<div class="container-fluid">
    <div class="card border-0 shadow-sm rounded-4 p-5">
        <div class="timeline">
            <!-- Latest Version -->
            <div class="timeline-item">
                <div class="timeline-icon bg-primary">
                    <i class="bi bi-rocket"></i>
                </div>
                <div class="timeline-content">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="fw-bold mb-0">v1.2.0 - Brand Transformation</h5>
                        <span class="badge bg-primary rounded-pill ms-3">Latest</span>
                        <span class="ms-auto text-muted small">Mar 11, 2026</span>
                    </div>
                    <p class="text-muted mb-3">Major rebranding from Ash to **Ash Dashboard**. Added theme customizer and improved dark mode support.</p>
                    <ul class="text-muted small">
                        <li>Rebranded all UI elements to "Ash".</li>
                        <li>Implemented dynamic primary color switching.</li>
                        <li>Enhanced dark mode with deeper colors and better contrast.</li>
                        <li>Added Help, Docs, Components, and Roadmap pages.</li>
                        <li>Optimized sidebar for mobile responsiveness.</li>
                    </ul>
                </div>
            </div>

            <!-- Previous Version -->
            <div class="timeline-item">
                <div class="timeline-icon bg-secondary">
                    <i class="bi bi-patch-check"></i>
                </div>
                <div class="timeline-content">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="fw-bold mb-0">v1.1.0 - Apps Expansion</h5>
                        <span class="ms-auto text-muted small">Mar 05, 2026</span>
                    </div>
                    <p class="text-muted mb-3">Introduced core application modules including Chat, Mail, and Kanban.</p>
                    <ul class="text-muted small">
                        <li>New Chat application with real-time UI feel.</li>
                        <li>Advanced Email client module.</li>
                        <li>Kanban board for project management.</li>
                        <li>Fixed several UI bugs in CRM leads page.</li>
                    </ul>
                </div>
            </div>

            <!-- Launch -->
            <div class="timeline-item">
                <div class="timeline-icon bg-info">
                    <i class="bi bi-star"></i>
                </div>
                <div class="timeline-content">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="fw-bold mb-0">v1.0.0 - Initial Launch</h5>
                        <span class="ms-auto text-muted small">Feb 20, 2026</span>
                    </div>
                    <p class="text-muted mb-3">The first release of Ash Dashboard with basic eCommerce and Project layouts.</p>
                    <ul class="text-muted small">
                        <li>E-commerce dashboard with sales metrics.</li>
                        <li>Project management overview.</li>
                        <li>Profile and settings management.</li>
                        <li>Authentication flows (Login/Register).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/changelog.css') }}">
@endsection

