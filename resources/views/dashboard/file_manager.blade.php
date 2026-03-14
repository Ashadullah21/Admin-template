@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">File Manager</li>
@endsection

@section('page-title', 'File Manager')

@section('content')
<div class="container-fluid">
    <div class="row g-4">
        <!-- Sidebar Navigation -->
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-3">
                <button class="btn btn-primary rounded-pill mb-4 py-2 fw-bold">
                    <i class="bi bi-cloud-upload me-2"></i> Upload File
                </button>
                
                <h6 class="fw-bold small text-muted mb-3 px-2">NAVIGATE</h6>
                <nav class="nav flex-column mb-4">
                    <a class="nav-link active rounded-pill mb-1 d-flex align-items-center" href="#">
                        <i class="bi bi-folder2-open me-2"></i> All Files
                    </a>
                    <a class="nav-link text-muted rounded-pill mb-1 d-flex align-items-center" href="#">
                        <i class="bi bi-clock-history me-2"></i> Recent
                    </a>
                    <a class="nav-link text-muted rounded-pill mb-1 d-flex align-items-center" href="#">
                        <i class="bi bi-star me-2"></i> Starred
                    </a>
                    <a class="nav-link text-muted rounded-pill mb-1 d-flex align-items-center" href="#">
                        <i class="bi bi-trash me-2"></i> Trash
                    </a>
                </nav>

                <h6 class="fw-bold small text-muted mb-3 px-2">LABELS</h6>
                <nav class="nav flex-column mb-4">
                    <a class="nav-link text-muted small d-flex align-items-center" href="#">
                        <span class="bg-primary rounded-circle me-2" style="width: 8px; height: 8px;"></span> Documents
                    </a>
                    <a class="nav-link text-muted small d-flex align-items-center" href="#">
                        <span class="bg-success rounded-circle me-2" style="width: 8px; height: 8px;"></span> Images
                    </a>
                    <a class="nav-link text-muted small d-flex align-items-center" href="#">
                        <span class="bg-warning rounded-circle me-2" style="width: 8px; height: 8px;"></span> Media
                    </a>
                </nav>

                <div class="mt-auto px-2">
                    <div class="d-flex justify-content-between small mb-2">
                        <span class="text-muted">Storage</span>
                        <span class="fw-bold">65% used</span>
                    </div>
                    <div class="progress rounded-pill mb-2" style="height: 6px;">
                        <div class="progress-bar" role="progressbar" style="width: 65%;"></div>
                    </div>
                    <p class="smaller text-muted">12.5 GB / 20 GB</p>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-lg-9">
            <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
                    <div class="search-box flex-grow-1" style="max-width: 400px;">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control" placeholder="Search files, folders...">
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light border"><i class="bi bi-grid"></i></button>
                        <button class="btn btn-light border"><i class="bi bi-list-ul"></i></button>
                        <select class="form-select border-0 bg-light w-auto">
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Size</option>
                        </select>
                    </div>
                </div>

                <!-- Folders Row -->
                <h6 class="fw-bold mb-3">Quick Access</h6>
                <div class="row g-3 mb-4">
                    <div class="col-md-3 col-sm-6">
                        <div class="card border p-3 rounded-4 shadow-none folder-card">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <i class="bi bi-folder-fill text-warning fs-1"></i>
                                <div class="dropdown">
                                    <i class="bi bi-three-dots-vertical cursor-pointer" data-bs-toggle="dropdown"></i>
                                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                                        <li><a class="dropdown-item" href="#">Open</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6 class="fw-bold mb-1">Projects</h6>
                            <p class="smaller text-muted mb-0">32 files • 1.2 GB</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card border p-3 rounded-4 shadow-none folder-card">
                            <i class="bi bi-folder-fill text-primary fs-1 mb-3"></i>
                            <h6 class="fw-bold mb-1">Documents</h6>
                            <p class="smaller text-muted mb-0">124 files • 450 MB</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card border p-3 rounded-4 shadow-none folder-card">
                            <i class="bi bi-folder-fill text-success fs-1 mb-3"></i>
                            <h6 class="fw-bold mb-1">Media</h6>
                            <p class="smaller text-muted mb-0">86 files • 4.8 GB</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card border p-3 rounded-4 shadow-none folder-card">
                            <i class="bi bi-folder-fill text-info fs-1 mb-3"></i>
                            <h6 class="fw-bold mb-1">Backup</h6>
                            <p class="smaller text-muted mb-0">12 files • 2.1 GB</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Files Table -->
                <h6 class="fw-bold mb-3">Recent Files</h6>
                <div class="table-responsive">
                    <table class="table align-middle border-top">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0 bg-transparent text-muted small fw-bold">FILE NAME</th>
                                <th class="border-0 bg-transparent text-muted small fw-bold">SIZE</th>
                                <th class="border-0 bg-transparent text-muted small fw-bold">DATE</th>
                                <th class="border-0 bg-transparent text-muted small fw-bold"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary-subtle rounded-3 p-2 me-3">
                                            <i class="bi bi-file-earmark-zip text-primary"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 small fw-bold">ash_test17.zip</h6>
                                            <p class="smaller text-muted mb-0">files / New folder / ash /</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="small text-muted">2.4 MB</span></td>
                                <td><span class="small text-muted">5 mins ago</span></td>
                                <td class="text-end">
                                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success-subtle rounded-3 p-2 me-3">
                                            <i class="bi bi-image text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 small fw-bold">Product image(11).webp</h6>
                                            <p class="smaller text-muted mb-0">files / ... / assets /</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="small text-muted">450 KB</span></td>
                                <td><span class="small text-muted">1 hour ago</span></td>
                                <td class="text-end">
                                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-danger-subtle rounded-3 p-2 me-3">
                                            <i class="bi bi-file-earmark-pdf text-danger"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 small fw-bold">User_Manual_v2.pdf</h6>
                                            <p class="smaller text-muted mb-0">files / Download /</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="small text-muted">1.2 MB</span></td>
                                <td><span class="small text-muted">Yesterday</span></td>
                                <td class="text-end">
                                    <i class="bi bi-three-dots text-muted cursor-pointer"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/file-manager.css') }}">
@endsection

