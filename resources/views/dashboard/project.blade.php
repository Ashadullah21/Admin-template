@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-project.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Project</li>
@endsection

@section('page-title', 'Projects Hub')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary px-4 shadow-sm rounded-pill"><i class="bi bi-plus-lg me-1"></i> New Project</button>
    </div>

    <!-- Quick Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="project-icon bg-primary-subtle text-primary"><i class="bi bi-briefcase"></i></div>
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Active Projects</p>
                        <h3 class="fw-bold mb-0">12</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="project-icon bg-warning-subtle text-warning"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Pending Tasks</p>
                        <h3 class="fw-bold mb-0">45</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="project-icon bg-success-subtle text-success"><i class="bi bi-check2-circle"></i></div>
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Completed</p>
                        <h3 class="fw-bold mb-0">128</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="project-icon bg-info-subtle text-info"><i class="bi bi-people"></i></div>
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Team Members</p>
                        <h3 class="fw-bold mb-0">24</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Active Projects</h6>
                <div class="btn-group">
                    <button class="btn btn-sm btn-light border bg-white"><i class="bi bi-grid"></i></button>
                    <button class="btn btn-sm btn-light border"><i class="bi bi-list"></i></button>
                </div>
            </div>
            
            <div class="row g-4">
                @php
                    $projects = [
                        ['title' => 'Ash UI Kit', 'client' => 'Internal', 'progress' => 85, 'status' => 'On Track', 'color' => 'success', 'due' => 'Mar 15, 2026', 'team' => 4],
                        ['title' => 'Mobile App Rebuild', 'client' => 'Acme Corp', 'progress' => 45, 'status' => 'Delayed', 'color' => 'danger', 'due' => 'Apr 02, 2026', 'team' => 3],
                        ['title' => 'Marketing Website', 'client' => 'Globex Ltd', 'progress' => 20, 'status' => 'At Risk', 'color' => 'warning', 'due' => 'May 20, 2026', 'team' => 2],
                        ['title' => 'Database Migration', 'client' => 'Initech', 'progress' => 60, 'status' => 'On Track', 'color' => 'success', 'due' => 'Mar 28, 2026', 'team' => 5],
                    ];
                @endphp

                @foreach($projects as $index => $project)
                <div class="col-md-6">
                    <div class="card project-card p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="status-badge bg-{{ $project['color'] }}-subtle text-{{ $project['color'] }}">{{ $project['status'] }}</span>
                            <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                        </div>
                        <h5 class="fw-bold mb-1"><a href="#" class="text-dark text-decoration-none">{{ $project['title'] }}</a></h5>
                        <p class="text-muted small mb-4">Client: {{ $project['client'] }}</p>
                        
                        <div class="d-flex justify-content-between small mb-1">
                            <span class="fw-semibold">Progress</span>
                            <span class="fw-bold">{{ $project['progress'] }}%</span>
                        </div>
                        <div class="progress progress-thin mb-4">
                            <div class="progress-bar bg-{{ $project['color'] }}" style="width: {{ $project['progress'] }}%"></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <div class="d-flex">
                                @for($i = 1; $i <= $project['team']; $i++)
                                    @if($i <= 3)
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $index }}{{ $i }}" class="team-avatar shadow-sm">
                                    @endif
                                @endfor
                                @if($project['team'] > 3)
                                    <div class="team-more shadow-sm">+{{ $project['team'] - 3 }}</div>
                                @endif
                            </div>
                            <div class="small text-muted fw-medium"><i class="bi bi-calendar me-1"></i> {{ $project['due'] }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card project-card p-4 mb-4">
                <h6 class="fw-bold mb-3">Tasks Priority Overview</h6>
                <div id="tasksChart" style="height: 250px;"></div>
            </div>

            <div class="card project-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold mb-0">Upcoming Deadlines</h6>
                    <a href="#" class="small text-decoration-none text-primary fw-medium">View Calendar</a>
                </div>
                
                <div class="d-flex gap-3 mb-3">
                    <div class="bg-danger-subtle text-danger rounded p-2 text-center" style="min-width: 50px;">
                        <div class="small fw-bold text-uppercase">Mar</div>
                        <h5 class="fw-bold mb-0">15</h5>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Ash UI Kit Delivery</h6>
                        <p class="text-muted small mb-0">Final review and hand-off</p>
                    </div>
                </div>
                
                <div class="d-flex gap-3 mb-3">
                    <div class="bg-warning-subtle text-warning rounded p-2 text-center" style="min-width: 50px;">
                        <div class="small fw-bold text-uppercase">Mar</div>
                        <h5 class="fw-bold mb-0">28</h5>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Database Migration Phase 1</h6>
                        <p class="text-muted small mb-0">Server setup and testing</p>
                    </div>
                </div>
                
                <div class="d-flex gap-3">
                    <div class="bg-primary-subtle text-primary rounded p-2 text-center" style="min-width: 50px;">
                        <div class="small fw-bold text-uppercase">Apr</div>
                        <h5 class="fw-bold mb-0">02</h5>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Mobile App Beta</h6>
                        <p class="text-muted small mb-0">Release to internal testers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-project.js') }}"></script>
@endsection
