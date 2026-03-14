@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-hrm.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">HRM</li>
@endsection

@section('page-title', 'Human Resources')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary px-4 shadow-sm rounded-pill"><i class="bi bi-plus-lg me-1"></i> Add Employee</button>
    </div>

    <!-- Quick Stats -->
    <div class="row g-4 mb-4">
        @php
            $stats = [
                ['title' => 'Total Employees', 'count' => '142', 'icon' => 'bi-people', 'color' => 'primary'],
                ['title' => 'New Hires', 'count' => '12', 'icon' => 'bi-person-plus', 'color' => 'success'],
                ['title' => 'On Leave', 'count' => '5', 'icon' => 'bi-calendar-minus', 'color' => 'warning'],
                ['title' => 'Open Roles', 'count' => '8', 'icon' => 'bi-briefcase', 'color' => 'info'],
            ];
        @endphp
        @foreach($stats as $stat)
        <div class="col-md-3">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-{{ $stat['color'] }}-subtle text-{{ $stat['color'] }} rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px; font-size: 1.25rem;">
                        <i class="bi {{ $stat['icon'] }}"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0">{{ $stat['count'] }}</h4>
                        <p class="text-muted small mb-0 text-uppercase fw-bold">{{ $stat['title'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Employee Directory -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold mb-0">Employee Directory</h6>
            <div class="d-flex gap-2">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <span class="input-group-text bg-light border-0"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" class="form-control bg-light border-0" placeholder="Search employees...">
                </div>
                <button class="btn btn-sm btn-light border"><i class="bi bi-filter"></i> Filter</button>
            </div>
        </div>
        <div class="card-body p-4 bg-light">
            <div class="row g-4">
                @php
                    $employees = [
                        ['name' => 'Alice Freeman', 'role' => 'Lead Developer', 'dep' => 'Engineering', 'seed' => 'Alice'],
                        ['name' => 'Bob Martin', 'role' => 'Product Manager', 'dep' => 'Product', 'seed' => 'Bob'],
                        ['name' => 'Charlie Davis', 'role' => 'UI/UX Designer', 'dep' => 'Design', 'seed' => 'Charlie'],
                        ['name' => 'Diana Prince', 'role' => 'HR Specialist', 'dep' => 'HR', 'seed' => 'Diana'],
                        ['name' => 'Edgar Wright', 'role' => 'Marketing Head', 'dep' => 'Marketing', 'seed' => 'Edgar'],
                        ['name' => 'Fiona Apple', 'role' => 'Backend Dev', 'dep' => 'Engineering', 'seed' => 'Fiona'],
                        ['name' => 'George Lucas', 'role' => 'Data Analyst', 'dep' => 'Data', 'seed' => 'George'],
                        ['name' => 'Hannah Baker', 'role' => 'Frontend Dev', 'dep' => 'Engineering', 'seed' => 'Hannah']
                    ];
                @endphp
                @foreach($employees as $emp)
                <div class="col-md-3">
                    <div class="card employee-card text-center h-100 pb-3">
                        <div class="card-cover"></div>
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $emp['seed'] }}" class="employee-avatar">
                        <h6 class="fw-bold mb-1">{{ $emp['name'] }}</h6>
                        <p class="text-muted small mb-3">{{ $emp['role'] }}</p>
                        <div class="px-3">
                            <span class="badge bg-light text-dark border w-100 py-2">{{ $emp['dep'] }}</span>
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-3 px-3">
                            <button class="btn btn-sm btn-light border w-50"><i class="bi bi-envelope"></i> Message</button>
                            <button class="btn btn-sm btn-light border w-50"><i class="bi bi-person"></i> Profile</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-light border shadow-sm px-4 rounded-pill small fw-medium">Load More Employees</button>
            </div>
        </div>
    </div>
</div>
@endsection
