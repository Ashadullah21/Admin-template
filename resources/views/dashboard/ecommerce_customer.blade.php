@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-ecommerce-customer.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">E-commerce</li>
    <li class="breadcrumb-item active" aria-current="page">Customer</li>
@endsection

@section('page-title', 'Customers Overview')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary px-4 shadow-sm rounded-pill"><i class="bi bi-download me-1"></i> Export Data</button>
    </div>

    <!-- Quick Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card customer-card h-100 p-3">
                <div class="d-flex align-items-center mb-3 text-muted fw-bold text-uppercase small">
                    Total Customers <i class="bi bi-info-circle ms-auto"></i>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-bg bg-primary-subtle text-primary"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">34,512</h3>
                        <span class="small badge bg-success-subtle text-success"><i class="bi bi-arrow-up-right"></i> 14.2%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card customer-card h-100 p-3">
                <div class="d-flex align-items-center mb-3 text-muted fw-bold text-uppercase small">
                    Active Subscriptions <i class="bi bi-info-circle ms-auto"></i>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-bg bg-success-subtle text-success"><i class="bi bi-check-circle-fill"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">21,044</h3>
                        <span class="small badge bg-success-subtle text-success"><i class="bi bi-arrow-up-right"></i> 8.1%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card customer-card h-100 p-3">
                <div class="d-flex align-items-center mb-3 text-muted fw-bold text-uppercase small">
                    Churn Rate <i class="bi bi-info-circle ms-auto"></i>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-bg bg-danger-subtle text-danger"><i class="bi bi-graph-down"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">4.2%</h3>
                        <span class="small badge bg-success-subtle text-success"><i class="bi bi-arrow-down-right"></i> -1.0%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card customer-card h-100 p-3">
                <div class="d-flex align-items-center mb-3 text-muted fw-bold text-uppercase small">
                    Avg. LTV <i class="bi bi-info-circle ms-auto"></i>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-bg bg-warning-subtle text-warning"><i class="bi bi-cash-stack"></i></div>
                    <div>
                        <h3 class="fw-bold mb-0">$1,240</h3>
                        <span class="small badge bg-success-subtle text-success"><i class="bi bi-arrow-up-right"></i> 5.4%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <!-- Customer Growth Chart -->
        <div class="col-lg-8">
            <div class="card customer-card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold mb-0">Customer Growth</h6>
                    <select class="form-select border-0 shadow-sm bg-light form-select-sm w-auto">
                        <option>This Year</option>
                        <option>Last Year</option>
                    </select>
                </div>
                <div id="customerGrowthChart" style="height: 300px;"></div>
            </div>
        </div>
        <!-- Segmentation -->
        <div class="col-lg-4">
            <div class="card customer-card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold mb-0">Demographics</h6>
                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                </div>
                <div id="demographicsChart" style="height: 250px;"></div>
                <div class="d-flex justify-content-center gap-4 mt-3">
                    <div class="text-center">
                        <div class="fw-bold text-primary">45%</div>
                        <small class="text-muted">Enterprise</small>
                    </div>
                    <div class="text-center">
                        <div class="fw-bold text-success">35%</div>
                        <small class="text-muted">SMB</small>
                    </div>
                    <div class="text-center">
                        <div class="fw-bold text-warning">20%</div>
                        <small class="text-muted">Startup</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Customers Table -->
    <div class="card table-container">
        <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold mb-0">Recent Customers</h6>
            <div class="input-group input-group-sm w-auto">
                <span class="input-group-text bg-light border-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" class="form-control bg-light border-0" placeholder="Search...">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Plan</th>
                        <th>Status</th>
                        <th>Spent</th>
                        <th>Joined</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $customers = [
                            ['name' => 'Acme Corp', 'email' => 'admin@acme.inc', 'plan' => 'Enterprise', 'status' => 'Active', 'spent' => '$4,200', 'joined' => 'Mar 01, 2026', 'seed' => 'acme', 'status_color' => 'success'],
                            ['name' => 'Globex Ltd', 'email' => 'billing@globex.co', 'plan' => 'Pro', 'status' => 'Active', 'spent' => '$1,850', 'joined' => 'Feb 28, 2026', 'seed' => 'globex', 'status_color' => 'success'],
                            ['name' => 'Initech', 'email' => 'peter@initech.net', 'plan' => 'Basic', 'status' => 'Past Due', 'spent' => '$450', 'joined' => 'Feb 24, 2026', 'seed' => 'initech', 'status_color' => 'warning'],
                            ['name' => 'Soylent Corp', 'email' => 'human@soylent.org', 'plan' => 'Pro', 'status' => 'Active', 'spent' => '$2,100', 'joined' => 'Feb 20, 2026', 'seed' => 'soylent', 'status_color' => 'success'],
                            ['name' => 'Umbrella Inc', 'email' => 'wesker@umbrella.com', 'plan' => 'Enterprise', 'status' => 'Cancelled', 'spent' => '$12,000', 'joined' => 'Jan 15, 2026', 'seed' => 'umbrella', 'status_color' => 'danger'],
                        ];
                    @endphp
                    @foreach($customers as $c)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://api.dicebear.com/7.x/identicon/svg?seed={{ $c['seed'] }}" class="customer-avatar bg-light border p-1 border-white shadow-sm">
                                <span class="fw-bold">{{ $c['name'] }}</span>
                            </div>
                        </td>
                        <td class="text-muted">{{ $c['email'] }}</td>
                        <td><span class="badge bg-light text-dark border">{{ $c['plan'] }}</span></td>
                        <td><span class="badge-status bg-{{ $c['status_color'] }}-subtle text-{{ $c['status_color'] }}">{{ $c['status'] }}</span></td>
                        <td class="fw-semibold">{{ $c['spent'] }}</td>
                        <td class="text-muted">{{ $c['joined'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-ecommerce-customer.js') }}"></script>
@endsection
