@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Documentation</li>
@endsection

@section('page-title', 'Getting Started')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 sticky-top" style="top: 90px; z-index: 1;">
                <h6 class="fw-bold mb-3 px-2">Table of Contents</h6>
                <nav class="nav flex-column">
                    <a class="nav-link text-primary fw-medium" href="#introduction">Introduction</a>
                    <a class="nav-link text-muted" href="#installation">Installation</a>
                    <a class="nav-link text-muted" href="#file-structure">File Structure</a>
                    <a class="nav-link text-muted" href="#customization">Customization</a>
                    <a class="nav-link text-muted" href="#dark-mode">Dark Mode</a>
                    <a class="nav-link text-muted" href="#laravel-integration">Laravel Integration</a>
                </nav>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card border-0 shadow-sm rounded-4 p-5 mb-4">
                <section id="introduction" class="mb-5">
                    <h2 class="fw-bold mb-3">Introduction</h2>
                    <p class="text-muted lead">Welcome to Ash Dashboard, a premium, developer-friendly dashboard template built with Laravel, Bootstrap 5, and modern web technologies.</p>
                    <p class="text-muted">Ash is designed to be highly modular and easy to customize. Whether you're building a simple CRM or a complex E-commerce platform, Ash provides the components and layouts you need to succeed.</p>
                </section>

                <section id="installation" class="mb-5">
                    <h4 class="fw-bold mb-3">Installation</h4>
                    <p class="text-muted">To get started with Ash, follow these steps:</p>
                    <div class="bg-light p-3 rounded-3 mb-3 font-monospace small border">
                        1. Clone the repository: git clone ...<br>
                        2. Install dependencies: composer install && npm install<br>
                        3. Set up your environment: cp .env.example .env<br>
                        4. Generate app key: php artisan key:generate<br>
                        5. Serve the application: php artisan serve
                    </div>
                </section>

                <section id="file-structure" class="mb-5">
                    <h4 class="fw-bold mb-3">File Structure</h4>
                    <p class="text-muted">A quick overview of the main directories in the Ash package:</p>
                    <ul class="text-muted">
                        <li><code>app/Http/Controllers</code>: Core logic for the dashboard views.</li>
                        <li><code>resources/views/layouts</code>: Base layout and shell components.</li>
                        <li><code>resources/views/dashboard</code>: Specific page views.</li>
                        <li><code>public/css</code> and <code>public/js</code>: Static assets for styling and interactivity.</li>
                    </ul>
                </section>

                <section id="customization">
                    <h4 class="fw-bold mb-3">Customization</h4>
                    <p class="text-muted">Ash uses CSS Variables for easy color adjustments. You can modify these in <code>dashboard.css</code> or use the built-in Theme Customizer.</p>
                    <div class="alert alert-info border-0 rounded-4 shadow-sm mb-0">
                        <i class="bi bi-info-circle me-2"></i> Look for <code>:root</code> variables in <code>dashboard.css</code> to change the overall palette.
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
