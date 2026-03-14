@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-analytics.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Analytics</li>
@endsection

@section('page-title', 'Analytics Dashboard')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <div>
            <select class="form-select bg-white shadow-sm border-0 rounded-pill">
                <option>Last 7 Days</option>
                <option>Last 30 Days</option>
                <option>This Year</option>
            </select>
        </div>
    </div>

    <!-- Key Metrics -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card analytics-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small fw-bold text-uppercase mb-1">Total Users</p>
                            <h3 class="fw-bold mb-0">84,254</h3>
                        </div>
                        <div class="stat-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                    <span class="badge bg-success-subtle text-success"><i class="bi bi-graph-up-arrow"></i> 12.5%</span> <span class="text-muted small">vs last week</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card analytics-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small fw-bold text-uppercase mb-1">Sessions</p>
                            <h3 class="fw-bold mb-0">12,420</h3>
                        </div>
                        <div class="stat-icon bg-info-subtle text-info">
                            <i class="bi bi-clock-history"></i>
                        </div>
                    </div>
                    <span class="badge bg-success-subtle text-success"><i class="bi bi-graph-up-arrow"></i> 8.2%</span> <span class="text-muted small">vs last week</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card analytics-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small fw-bold text-uppercase mb-1">Bounce Rate</p>
                            <h3 class="fw-bold mb-0">42.8%</h3>
                        </div>
                        <div class="stat-icon bg-warning-subtle text-warning">
                            <i class="bi bi-sign-turn-left"></i>
                        </div>
                    </div>
                    <span class="badge bg-danger-subtle text-danger"><i class="bi bi-graph-down-arrow"></i> 2.4%</span> <span class="text-muted small">vs last week</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card analytics-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small fw-bold text-uppercase mb-1">Conversion</p>
                            <h3 class="fw-bold mb-0">3.4%</h3>
                        </div>
                        <div class="stat-icon bg-success-subtle text-success">
                            <i class="bi bi-cart-check"></i>
                        </div>
                    </div>
                    <span class="badge bg-success-subtle text-success"><i class="bi bi-graph-up-arrow"></i> 1.2%</span> <span class="text-muted small">vs last week</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="row g-4 bg-white p-4 rounded-4 shadow-sm border-0 mb-4 mx-0">
        <div class="col-md-8 border-end">
            <h6 class="fw-bold mb-4">Traffic Overview</h6>
            <div id="trafficChart" style="min-height: 300px;"></div>
        </div>
        <div class="col-md-4">
            <h6 class="fw-bold mb-4">Device Usage</h6>
            <div id="deviceChart" style="min-height: 300px;"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-analytics.js') }}"></script>
@endsection
