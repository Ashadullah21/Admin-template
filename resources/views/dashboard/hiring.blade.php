@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-hiring.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Hiring</li>
@endsection

@section('page-title', 'Hiring & Recruitment')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary px-4 shadow-sm rounded-pill"><i class="bi bi-briefcase me-1"></i> Post a Job</button>
    </div>

    <div class="row g-4 mb-4">
        <!-- Active Job Postings -->
        <div class="col-lg-7">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">Active Job Postings</h6>
                    <a href="#" class="text-primary small text-decoration-none fw-medium">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="job-list-item">
                        <div>
                            <h6 class="fw-bold mb-1">Senior Laravel Developer</h6>
                            <div class="d-flex gap-3 small text-muted">
                                <span><i class="bi bi-geo-alt me-1"></i> Remote</span>
                                <span><i class="bi bi-clock-history me-1"></i> Full-time</span>
                                <span><i class="bi bi-cash me-1"></i> $110k - $140k</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="fw-bold text-primary mb-1">45</h6>
                            <span class="text-muted small">Applicants</span>
                        </div>
                    </div>
                    <div class="job-list-item">
                        <div>
                            <h6 class="fw-bold mb-1">Product Designer (UI/UX)</h6>
                            <div class="d-flex gap-3 small text-muted">
                                <span><i class="bi bi-geo-alt me-1"></i> London, UK</span>
                                <span><i class="bi bi-clock-history me-1"></i> Full-time</span>
                                <span><i class="bi bi-cash me-1"></i> $80k - $100k</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="fw-bold text-primary mb-1">112</h6>
                            <span class="text-muted small">Applicants</span>
                        </div>
                    </div>
                    <div class="job-list-item border-bottom-0">
                        <div>
                            <h6 class="fw-bold mb-1">Marketing Specialist</h6>
                            <div class="d-flex gap-3 small text-muted">
                                <span><i class="bi bi-geo-alt me-1"></i> New York, US</span>
                                <span><i class="bi bi-clock-history me-1"></i> Contract</span>
                                <span><i class="bi bi-cash me-1"></i> $50/hr</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <h6 class="fw-bold text-primary mb-1">24</h6>
                            <span class="text-muted small">Applicants</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hiring Pipeline Pipeline -->
        <div class="col-lg-5">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-header bg-white border-bottom p-4">
                    <h6 class="fw-bold mb-0">Hiring Pipeline</h6>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold text-dark">Sourced</span>
                        <span class="text-muted">181</span>
                    </div>
                    <div class="progress mb-4" style="height: 8px;">
                        <div class="progress-bar bg-light text-dark" style="width: 100%;"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold text-dark">Screening</span>
                        <span class="text-muted">45</span>
                    </div>
                    <div class="progress mb-4" style="height: 8px;">
                        <div class="progress-bar bg-info" style="width: 45%;"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold text-dark">Interviewing</span>
                        <span class="text-muted">12</span>
                    </div>
                    <div class="progress mb-4" style="height: 8px;">
                        <div class="progress-bar bg-primary" style="width: 15%;"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold text-dark">Offers Extended</span>
                        <span class="text-muted">3</span>
                    </div>
                    <div class="progress mb-0" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 5%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Candidates -->
    <h5 class="fw-bold mb-3 mt-5">Top Candidates in Pipeline</h5>
    <div class="row g-4">
        @php
            $candidates = [
                ['name' => 'Michael Chang', 'role' => 'Senior Laravel Dev', 'stage' => 'Interviewing', 'status' => 'interview', 'rating' => 4, 'seed' => 'Michael'],
                ['name' => 'Sarah Jenkins', 'role' => 'Product Designer', 'stage' => 'Offer Extended', 'status' => 'offered', 'rating' => 5, 'seed' => 'Sarah'],
                ['name' => 'David OConnor', 'role' => 'Marketing Specialist', 'stage' => 'Reviewed', 'status' => 'reviewed', 'rating' => 3, 'seed' => 'David'],
                ['name' => 'Emma Watson', 'role' => 'Product Designer', 'stage' => 'Interviewing', 'status' => 'interview', 'rating' => 4, 'seed' => 'Emma']
            ];
        @endphp

        @foreach($candidates as $c)
        <div class="col-md-3">
            <div class="card candidate-card p-4">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $c['seed'] }}" class="candidate-avatar border shadow-sm">
                    <button class="btn btn-sm btn-light border rounded-circle text-muted"><i class="bi bi-three-dots"></i></button>
                </div>
                <h6 class="fw-bold mb-1">{{ $c['name'] }}</h6>
                <p class="text-muted small mb-3">{{ $c['role'] }}</p>
                <div class="mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="bi bi-star-fill {{ $i <= $c['rating'] ? 'text-warning' : 'text-light border-text' }}" style="-webkit-text-stroke: 1px #cbd5e1; font-size: 0.8rem;"></i>
                    @endfor
                </div>
                <div class="d-flex justify-content-between align-items-center mt-auto border-top pt-3">
                    <span class="status-badge status-{{ $c['status'] }}">{{ $c['stage'] }}</span>
                    <a href="#" class="btn btn-sm btn-light bg-white border"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
