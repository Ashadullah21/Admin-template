@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-time-tracker.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Time Tracker</li>
@endsection

@section('page-title', 'Time Tracker')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-light bg-white border shadow-sm px-3"><i class="bi bi-download me-1"></i> Export Report</button>
    </div>

    <!-- Active Timer -->
    <div class="card bg-primary text-white tracker-card mb-4 position-relative overflow-hidden">
        <div class="position-absolute end-0 top-0 opacity-10" style="width: 300px; height: 300px; background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0) 70%); transform: translate(30%, -30%);"></div>
        <div class="card-body p-4 p-md-5 d-flex flex-column flex-md-row justify-content-between align-items-center position-relative z-1">
            <div class="mb-4 mb-md-0 d-flex align-items-center gap-4">
                <button class="btn btn-light text-primary play-btn shadow-lg">
                    <i class="bi bi-stop-fill"></i>
                </button>
                <div>
                    <h5 class="fw-bold mb-1 opacity-75">Currently working on</h5>
                    <div class="d-flex align-items-center gap-3">
                        <h2 class="fw-bold mb-0">Ash Dashboard UI Update</h2>
                        <span class="badge bg-white text-primary rounded-pill">UI/UX</span>
                    </div>
                </div>
            </div>
            <div class="text-center text-md-end">
                <p class="text-white-50 small text-uppercase fw-bold mb-1">Elapsed Time</p>
                <h1 class="display-4 stat-timer mb-0">02:45:12</h1>
            </div>
        </div>
    </div>

    <div class="row g-4 d-flex align-items-stretch">
        <!-- Weekly Summary -->
        <div class="col-lg-4 d-flex">
            <div class="card tracker-card flex-fill">
                <div class="card-header bg-white border-bottom p-4">
                    <h6 class="fw-bold mb-0">Weekly Summary</h6>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <p class="text-muted small mb-1">Total Tracked</p>
                            <h4 class="fw-bold">34h 15m</h4>
                        </div>
                        <div class="text-end">
                            <p class="text-muted small mb-1">Billable</p>
                            <h4 class="fw-bold text-success">28h 00m</h4>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>UI/UX Design</span>
                            <span>15h 30m</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary" style="width: 45%;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Frontend Dev</span>
                            <span>12h 45m</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-info" style="width: 35%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Meetings</span>
                            <span>6h 00m</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-warning" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Logs -->
        <div class="col-lg-8 d-flex">
            <div class="card tracker-card flex-fill">
                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">Today's Logs</h6>
                    <span class="text-muted small">Total: 6h 30m</span>
                </div>
                <div class="card-body p-0">
                    <div class="timeline-row">
                        <div class="timeline-dot bg-info"></div>
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Landing Page Development</h6>
                            <p class="text-muted small mb-0">Ash Marketing Site</p>
                        </div>
                        <div class="text-end me-4">
                            <span class="badge bg-light text-dark border">Billable</span>
                        </div>
                        <div class="text-end" style="width: 120px;">
                            <h6 class="fw-bold mb-1">03:15:00</h6>
                            <p class="text-muted small mb-0">09:00 - 12:15</p>
                        </div>
                        <div class="ms-3">
                            <button class="btn btn-sm btn-light border rounded-circle"><i class="bi bi-play-fill text-primary"></i></button>
                        </div>
                    </div>
                    
                    <div class="timeline-row">
                        <div class="timeline-dot bg-warning"></div>
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Daily Standup Sync</h6>
                            <p class="text-muted small mb-0">Internal Team</p>
                        </div>
                        <div class="text-end me-4">
                            <span class="badge bg-light text-muted border border-dashed">Non-Billable</span>
                        </div>
                        <div class="text-end" style="width: 120px;">
                            <h6 class="fw-bold mb-1">00:30:00</h6>
                            <p class="text-muted small mb-0">12:30 - 13:00</p>
                        </div>
                        <div class="ms-3">
                            <button class="btn btn-sm btn-light border rounded-circle"><i class="bi bi-play-fill text-primary"></i></button>
                        </div>
                    </div>
                    
                    <div class="timeline-row">
                        <div class="timeline-dot bg-primary"></div>
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Ash Dashboard UI Update</h6>
                            <p class="text-muted small mb-0">Ash Admin Panel</p>
                        </div>
                        <div class="text-end me-4">
                            <span class="badge bg-light text-dark border">Billable</span>
                        </div>
                        <div class="text-end" style="width: 120px;">
                            <h6 class="fw-bold text-primary mb-1">02:45:12</h6>
                            <p class="text-muted small mb-0">14:00 - Now</p>
                        </div>
                        <div class="ms-3">
                            <button class="btn btn-sm border-primary text-primary rounded-circle" style="background:#eff6ff;"><i class="bi bi-stop-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
