@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-crm.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">CRM</li>
    <li class="breadcrumb-item active" aria-current="page">Deals</li>
@endsection

@section('page-title', 'CRM Overview')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <div class="d-flex gap-2">
            <select class="form-select border shadow-sm bg-white fw-semibold small px-3 py-2 rounded-pill w-auto" style="min-width: 150px;">
                <option>This Month</option>
                <option>Last Month</option>
                <option>This Year</option>
            </select>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card crm-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="text-muted small fw-bold mb-0 text-uppercase">Total Revenue</p>
                    <div class="badge bg-success-subtle text-success p-2 rounded-circle"><i class="bi bi-currency-dollar"></i></div>
                </div>
                <h3 class="fw-bold mb-1">$45,231</h3>
                <div class="text-success small fw-medium"><i class="bi bi-arrow-up-right"></i> +12% from last month</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card crm-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="text-muted small fw-bold mb-0 text-uppercase">Active Deals</p>
                    <div class="badge bg-primary-subtle text-primary p-2 rounded-circle"><i class="bi bi-briefcase"></i></div>
                </div>
                <h3 class="fw-bold mb-1">29</h3>
                <div class="text-success small fw-medium"><i class="bi bi-arrow-up-right"></i> +5% from last month</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card crm-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="text-muted small fw-bold mb-0 text-uppercase">Win Rate</p>
                    <div class="badge bg-info-subtle text-info p-2 rounded-circle"><i class="bi bi-trophy"></i></div>
                </div>
                <h3 class="fw-bold mb-1">68.5%</h3>
                <div class="text-warning small fw-medium"><i class="bi bi-arrow-right"></i> +0% from last month</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card crm-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="text-muted small fw-bold mb-0 text-uppercase">Lost Deals</p>
                    <div class="badge bg-danger-subtle text-danger p-2 rounded-circle"><i class="bi bi-x-circle"></i></div>
                </div>
                <h3 class="fw-bold mb-1">12</h3>
                <div class="text-danger small fw-medium"><i class="bi bi-arrow-down-left"></i> -2% from last month</div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card crm-card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">Revenue Overview</h6>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-download"></i></button>
                </div>
                <div id="revenueChart" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card crm-card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">Sales Pipeline</h6>
                    <i class="bi bi-three-dots text-muted"></i>
                </div>
                <div class="timeline mt-3">
                    <div class="mb-4 position-relative">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold small">Prospecting</span>
                            <span class="text-muted small">120 Deals</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="mb-4 position-relative">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold small mt-2">Qualification</span>
                            <span class="text-muted small mt-2">45 Deals</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-info" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="mb-4 position-relative">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold small mt-2">Proposal</span>
                            <span class="text-muted small mt-2">15 Deals</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold small mt-2">Negotiation</span>
                            <span class="text-muted small mt-2">8 Deals</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-secondary" style="width: 25%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Deals List -->
    <div class="card crm-card mb-4">
        <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold mb-0">Recent Deals</h6>
            <a href="#" class="btn btn-sm btn-light border fw-medium">View All</a>
        </div>
        <div class="card-body p-0">
            @php
                $deals = [
                    ['client' => 'Acme Corporation', 'contact' => 'Jane Smith', 'value' => '$12,000', 'stage' => 'Proposal', 'prob' => '75%', 'status_class' => 'badge-proposal', 'seed' => 'Jane'],
                    ['client' => 'Globex Ltd.', 'contact' => 'John Doe', 'value' => '$8,500', 'stage' => 'Negotiation', 'prob' => '50%', 'status_class' => 'badge-negotiation', 'seed' => 'John'],
                    ['client' => 'Initech', 'contact' => 'Peter Gibbons', 'value' => '$25,000', 'stage' => 'Won', 'prob' => '100%', 'status_class' => 'badge-won', 'seed' => 'Peter'],
                    ['client' => 'Soylent Corp', 'contact' => 'Robert Paulson', 'value' => '$4,200', 'stage' => 'Lost', 'prob' => '0%', 'status_class' => 'badge-lost', 'seed' => 'Robert'],
                ];
            @endphp
            @foreach($deals as $deal)
            <div class="deal-row">
                <img src="https://api.dicebear.com/7.x/notionists/svg?seed={{ $deal['seed'] }}" class="deal-avatar me-3 border shadow-sm p-1">
                <div class="flex-grow-1">
                    <h6 class="fw-bold mb-1">{{ $deal['client'] }}</h6>
                    <span class="small text-muted"><i class="bi bi-person me-1"></i>{{ $deal['contact'] }}</span>
                </div>
                <div class="text-end me-4" style="width: 100px;">
                    <h6 class="fw-bold mb-0 text-dark">{{ $deal['value'] }}</h6>
                </div>
                <div class="text-center me-4" style="width: 80px;">
                    <span class="fw-bold small">{{ $deal['prob'] }}</span>
                </div>
                <div class="text-end" style="width: 120px;">
                    <span class="deal-badge {{ $deal['status_class'] }}">{{ $deal['stage'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-crm.js') }}"></script>
@endsection
