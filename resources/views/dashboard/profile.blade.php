@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
@endsection

@section('page-title', 'User Profile')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card p-0 overflow-hidden">
                <div class="profile-header-bg"></div>
                <div class="card-body text-center position-relative profile-avatar-wrap">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Captain" class="profile-avatar rounded-circle border border-4 border-white shadow-sm mb-3">
                    <h4 class="fw-bold mb-1">Jerry Alexander</h4>
                    <p class="text-muted small mb-4">Lead Product Designer</p>
                    
                    <div class="d-flex justify-content-center gap-2 mb-4">
                        <button class="btn btn-primary px-4 rounded-pill">Follow</button>
                        <button class="btn btn-light px-4 rounded-pill border">Message</button>
                    </div>
                    
                    <div class="row g-0 border-top pt-4 mt-2">
                        <div class="col-4 border-end">
                            <h6 class="fw-bold mb-0">1.2k</h6>
                            <span class="text-muted small">Followers</span>
                        </div>
                        <div class="col-4 border-end">
                            <h6 class="fw-bold mb-0">450</h6>
                            <span class="text-muted small">Following</span>
                        </div>
                        <div class="col-4">
                            <h6 class="fw-bold mb-0">82</h6>
                            <span class="text-muted small">Projects</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-4 mt-4">
                <h6 class="fw-bold mb-3">About Me</h6>
                <p class="text-muted small line-height-lg mb-0">
                    Passionate product designer with over 8 years of experience building modern web applications. Specialized in UI/UX systems and React-based dashboards.
                </p>
                <div class="mt-4">
                    <h6 class="fw-bold mb-2 small text-uppercase profile-skills-title">Skills</h6>
                    <div class="d-flex flex-wrap gap-2 pt-1">
                        <span class="badge bg-light text-dark border p-2 px-3">UI/UX Design</span>
                        <span class="badge bg-light text-dark border p-2 px-3">Laravel</span>
                        <span class="badge bg-light text-dark border p-2 px-3">React</span>
                        <span class="badge bg-light text-dark border p-2 px-3">Illustrator</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card p-4">
                <ul class="nav nav-tabs border-0 mb-4" id="profileTabs">
                    <li class="nav-item">
                        <a class="nav-link active border-0 border-bottom border-primary border-3 fw-bold px-4 py-3 profile-tab-link" href="#">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-0 text-muted px-4 py-3" href="{{ route('dashboard.settings') }}">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-0 text-muted px-4 py-3" href="#">Security</a>
                    </li>
                </ul>
                
                <div class="timeline p-3">
                    <div class="timeline-item">
                        <div class="timeline-icon"><i class="bi bi-briefcase"></i></div>
                        <div class="timeline-content">
                            <h6>Started working at Ash Theme</h6>
                            <p>Assigned to the eCommerce Dashboard project.</p>
                            <span class="timeline-time">2h ago</span>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon bg-success"><i class="bi bi-check2"></i></div>
                        <div class="timeline-content">
                            <h6>Released version 2.4.0</h6>
                            <p>Successfully deployed major update including dark mode.</p>
                            <span class="timeline-time">Yesterday</span>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon bg-warning"><i class="bi bi-image"></i></div>
                        <div class="timeline-content">
                            <h6>Added 5 new assets</h6>
                            <p>Uploaded new product photography for the winter collection.</p>
                            <span class="timeline-time">3 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
