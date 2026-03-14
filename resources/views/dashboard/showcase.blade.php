@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Showcase</li>
@endsection

@section('page-title', 'Showcase')

@section('content')
<div class="container-fluid">
    <div class="row align-items-center bg-primary rounded-4 shadow-sm p-4 p-md-5 mb-5 text-white position-relative overflow-hidden" style="min-height: 250px;">
        <div class="col-lg-6 z-1">
            <span class="badge bg-white text-primary rounded-pill mb-3 fw-bold px-3 py-2 shadow-sm">Ash Showcase</span>
            <h2 class="display-5 fw-bold mb-3 d-flex align-items-center">Premium Pre-built Dashboards</h2>
            <p class="fs-5 opacity-75 mb-0">Explore our carefully crafted dashboard templates designed for various industries. Stop building from scratch.</p>
        </div>
        <div class="col-lg-6 position-absolute end-0 top-0 h-100 opacity-25" style="background-image: radial-gradient(circle, #6366f1 1px, transparent 1px); background-size: 24px 24px; z-index: 0;"></div>
    </div>

    <!-- Filter Buttons -->
    <div class="d-flex flex-wrap gap-2 justify-content-center mb-5">
        <button class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">All</button>
        <button class="btn btn-outline-secondary text-muted rounded-pill px-4 bg-white shadow-sm border-0">E-Commerce</button>
        <button class="btn btn-outline-secondary text-muted rounded-pill px-4 bg-white shadow-sm border-0">CRM</button>
        <button class="btn btn-outline-secondary text-muted rounded-pill px-4 bg-white shadow-sm border-0">Analytics</button>
        <button class="btn btn-outline-secondary text-muted rounded-pill px-4 bg-white shadow-sm border-0">Management</button>
    </div>

    <!-- Showcase Grid -->
    <div class="row g-4">
        <!-- E-Commerce -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group-hover-effect">
                <div class="position-relative overflow-hidden" style="height: 220px;">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <div class="text-center text-white px-3">
                            <i class="bi bi-cart3" style="font-size: 2.5rem; opacity: 0.9;"></i>
                            <div class="mt-2 fw-semibold small opacity-75">E-Commerce Interface</div>
                        </div>
                    </div>
                    <div class="position-absolute top-0 end-0 m-3 d-flex align-items-center gap-2">
                         <span class="badge bg-danger rounded-pill shadow-sm">Hot</span>
                         <span class="badge bg-dark rounded-pill shadow-sm opacity-75"><i class="bi bi-eye"></i> 15k</span>
                    </div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="fw-bold mb-0">E-Commerce Platform</h5>
                    </div>
                    <p class="text-muted small mb-4">A complete frontend setup for store owners, including revenue charts, order tracking, and inventory tables.</p>
                    <div class="mt-auto d-flex gap-2">
                        <a href="{{ route('dashboard.ecommerce') }}" class="btn btn-light border flex-grow-1 fw-bold rounded-3">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Management -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group-hover-effect">
                <div class="position-relative overflow-hidden" style="height: 220px;">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                        <div class="text-center text-white px-3">
                            <i class="bi bi-kanban" style="font-size: 2.5rem; opacity: 0.9;"></i>
                            <div class="mt-2 fw-semibold small opacity-75">Project Manager</div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-2">Project Manager</h5>
                    <p class="text-muted small mb-4">Designed for teams. Features include project timelines, task assignments, and workload distribution charts.</p>
                    <div class="mt-auto d-flex gap-2">
                        <a href="{{ route('dashboard.project') }}" class="btn btn-light border flex-grow-1 fw-bold rounded-3">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CRM Layout -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group-hover-effect">
                <div class="position-relative overflow-hidden" style="height: 220px;">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <div class="text-center text-white px-3">
                            <i class="bi bi-people" style="font-size: 2.5rem; opacity: 0.9;"></i>
                            <div class="mt-2 fw-semibold small opacity-75">CRM Dashboard</div>
                        </div>
                    </div>
                    <div class="position-absolute top-0 end-0 m-3">
                         <span class="badge bg-primary rounded-pill shadow-sm">Trending</span>
                    </div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-2">CRM Dashboard</h5>
                    <p class="text-muted small mb-4">Manage customer relationships with lead pipelines, contact lists, and activity feeds all in one view.</p>
                    <div class="mt-auto d-flex gap-2">
                        <a href="{{ route('dashboard.crm') }}" class="btn btn-light border flex-grow-1 fw-bold rounded-3">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics Overview -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group-hover-effect">
                <div class="position-relative overflow-hidden" style="height: 220px;">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <div class="text-center text-white px-3">
                            <i class="bi bi-bar-chart-line" style="font-size: 2.5rem; opacity: 0.9;"></i>
                            <div class="mt-2 fw-semibold small opacity-75">Data Analytics</div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-2">Data Analytics</h5>
                    <p class="text-muted small mb-4">Deep dive into data with complex charting, real-time widget updates, and comprehensive reporting.</p>
                    <div class="mt-auto d-flex gap-2">
                        <a href="{{ route('dashboard.analytics') }}" class="btn btn-light border flex-grow-1 fw-bold rounded-3">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- File Manager -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group-hover-effect">
                <div class="position-relative overflow-hidden bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                    <i class="bi bi-folder-fill text-primary" style="font-size: 5rem; opacity: 0.8;"></i>
                    <i class="bi bi-file-earmark-image position-absolute text-warning" style="font-size: 2.5rem; top: 30%; right: 30%;"></i>
                    <i class="bi bi-file-earmark-pdf position-absolute text-danger" style="font-size: 2rem; bottom: 25%; left: 35%;"></i>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-2">Cloud File Manager</h5>
                    <p class="text-muted small mb-4">A clean interface for managing cloud storage files, folders, and documents with grid and list views.</p>
                    <div class="mt-auto d-flex gap-2">
                        <a href="{{ route('dashboard.file_manager') }}" class="btn btn-light border flex-grow-1 fw-bold rounded-3">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kanban Board -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group-hover-effect">
                <div class="position-relative overflow-hidden bg-primary d-flex align-items-center justify-content-center gap-2" style="height: 220px; opacity: 0.9;">
                    <div class="bg-white rounded-3 shadow" style="width: 60px; height: 120px; opacity: 0.8;"></div>
                    <div class="bg-white rounded-3 shadow" style="width: 60px; height: 140px;"></div>
                    <div class="bg-white rounded-3 shadow" style="width: 60px; height: 90px; opacity: 0.8;"></div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-2">Agile Kanban</h5>
                    <p class="text-muted small mb-4">Drag-and-drop task management board perfect for tracking workflows and agile team sprints.</p>
                    <div class="mt-auto d-flex gap-2">
                        <a href="{{ route('dashboard.kanban') }}" class="btn btn-light border flex-grow-1 fw-bold rounded-3">Live Preview</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Call to Action -->
    <div class="text-center my-5 py-4 border-top">
        <h4 class="fw-bold mb-3">Ready to build your masterpiece?</h4>
        <p class="text-muted mb-4">Get started right away with the components page to build your custom layouts.</p>
        <a href="{{ route('dashboard.components') }}" class="btn btn-primary rounded-pill px-5 fw-bold shadow-sm py-2"><i class="bi bi-layers me-2"></i> Browse Components</a>
    </div>

</div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/showcase.css') }}">
@endsection

