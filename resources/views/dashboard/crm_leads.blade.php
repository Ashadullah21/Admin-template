@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-crm-leads.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">CRM</li>
    <li class="breadcrumb-item active" aria-current="page">Leads</li>
@endsection

@section('page-title', 'Lead Management')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <div class="d-flex gap-2">
            <button class="btn btn-light border bg-white shadow-sm"><i class="bi bi-funnel"></i> Filter</button>
            <button class="btn btn-primary px-4 shadow-sm rounded-pill"><i class="bi bi-person-plus me-1"></i> Add Lead</button>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card lead-card h-100 p-4 border-start border-primary border-4">
                <p class="text-muted small fw-bold text-uppercase mb-1">New Leads</p>
                <h3 class="fw-bold mb-0">1,245</h3>
                <div class="mt-2 text-success small"><i class="bi bi-arrow-up-right"></i> 12.5% this week</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card lead-card h-100 p-4 border-start border-warning border-4">
                <p class="text-muted small fw-bold text-uppercase mb-1">Contacted</p>
                <h3 class="fw-bold mb-0">842</h3>
                <div class="mt-2 text-success small"><i class="bi bi-arrow-up-right"></i> 5.0% this week</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card lead-card h-100 p-4 border-start border-info border-4">
                <p class="text-muted small fw-bold text-uppercase mb-1">Qualified</p>
                <h3 class="fw-bold mb-0">312</h3>
                <div class="mt-2 text-success small"><i class="bi bi-arrow-up-right"></i> 18.2% this week</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card lead-card h-100 p-4 border-start border-danger border-4">
                <p class="text-muted small fw-bold text-uppercase mb-1">Lost</p>
                <h3 class="fw-bold mb-0">124</h3>
                <div class="mt-2 text-danger small"><i class="bi bi-arrow-down-right"></i> 2.1% this week</div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card lead-card h-100">
                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">Leads Directory</h6>
                    <div class="input-group input-group-sm w-auto">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control bg-light border-0" placeholder="Search leads...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Contact Name</th>
                                <th>Company</th>
                                <th>Source</th>
                                <th>Status</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $leads = [
                                    ['name' => 'Alice Freeman', 'company' => 'Acme Corp', 'source' => 'Organic Search', 'status' => 'New', 'score' => 85, 'seed' => 'Alice', 'color' => 'primary'],
                                    ['name' => 'Bob Martin', 'company' => 'Globex Ltd', 'source' => 'Referral', 'status' => 'Qualified', 'score' => 92, 'seed' => 'Bob', 'color' => 'info'],
                                    ['name' => 'Charlie Davis', 'company' => 'Initech', 'source' => 'Social Media', 'status' => 'Contacted', 'score' => 64, 'seed' => 'Charlie', 'color' => 'warning'],
                                    ['name' => 'Diana Prince', 'company' => 'Soylent', 'source' => 'Direct Traffic', 'status' => 'New', 'score' => 78, 'seed' => 'Diana', 'color' => 'primary'],
                                    ['name' => 'Edgar Wright', 'company' => 'Umbrella', 'source' => 'Email Campaign', 'status' => 'Lost', 'score' => 21, 'seed' => 'Edgar', 'color' => 'danger'],
                                ];
                            @endphp
                            @foreach($leads as $lead)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="https://api.dicebear.com/7.x/notionists/svg?seed={{ $lead['seed'] }}" class="lead-avatar border shadow-sm">
                                        <div>
                                            <div class="fw-bold">{{ $lead['name'] }}</div>
                                            <div class="small text-muted">{{ strtolower(str_replace(' ', '.', $lead['name'])) }}@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="company-logo shadow-sm">{{ substr($lead['company'], 0, 1) }}</div>
                                        <span class="fw-semibold">{{ $lead['company'] }}</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-light text-dark border">{{ $lead['source'] }}</span></td>
                                <td><span class="status-badge bg-{{ $lead['color'] }}-subtle text-{{ $lead['color'] }}">{{ $lead['status'] }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="progress flex-grow-1" style="height: 6px; width: 60px;">
                                            <div class="progress-bar bg-{{ $lead['score'] > 80 ? 'success' : ($lead['score'] > 50 ? 'warning' : 'danger') }}" style="width: {{ $lead['score'] }}%;"></div>
                                        </div>
                                        <span class="small fw-bold">{{ $lead['score'] }}</span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card lead-card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold mb-0">Lead Sources</h6>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div id="sourcesChart" style="height: 250px;"></div>
                
                <h6 class="fw-bold mb-3 mt-4">Top Converting Sources</h6>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary-subtle text-primary rounded-circle p-2"><i class="bi bi-google"></i></span>
                        <span class="small fw-semibold">Organic Search</span>
                    </div>
                    <span class="fw-bold">14.2%</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-info-subtle text-info rounded-circle p-2"><i class="bi bi-envelope"></i></span>
                        <span class="small fw-semibold">Email Campaign</span>
                    </div>
                    <span class="fw-bold">8.5%</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-warning-subtle text-warning rounded-circle p-2"><i class="bi bi-twitter"></i></span>
                        <span class="small fw-semibold">Social Media</span>
                    </div>
                    <span class="fw-bold">4.1%</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-crm-leads.js') }}"></script>
@endsection
