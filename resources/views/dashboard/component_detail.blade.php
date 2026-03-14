@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.components') }}">Components</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
@endsection

@section('page-title', $title)

@section('content')
<div class="container-fluid">
    
    @if($type === 'inputs')
    <!-- Inputs Component -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Basic Inputs</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Disabled input</label>
                        <input class="form-control" type="text" placeholder="Disabled input" disabled>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Readonly input</label>
                        <input class="form-control" type="text" value="Readonly input here" aria-label="readonly input example" readonly>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Checkboxes & Radios</h5>
                </div>
                <div class="card-body">
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                    </div>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Input Groups</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light">@</span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username">
                        <span class="input-group-text bg-light">@example.com</span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light">$</span>
                        <input type="text" class="form-control">
                        <span class="input-group-text bg-light">.00</span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Button ad-on">
                        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Switches & Selects</h5>
                </div>
                <div class="card-body">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch mb-4">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                    </div>

                    <select class="form-select mb-3">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    @elseif($type === 'data-display')
    <!-- Data Display Component -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Responsive Table</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0 bg-transparent text-muted small fw-bold">ID</th>
                                    <th class="border-0 bg-transparent text-muted small fw-bold">Name</th>
                                    <th class="border-0 bg-transparent text-muted small fw-bold">Email</th>
                                    <th class="border-0 bg-transparent text-muted small fw-bold">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>#1002</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#1003</td>
                                    <td>Bob Johnson</td>
                                    <td>bob@example.com</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Banned</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Avatars</h5>
                </div>
                <div class="card-body d-flex gap-3 align-items-center flex-wrap">
                    <img class="rounded-circle border border-2 border-white shadow-sm" style="width: 48px; height: 48px;" src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="avatar">
                    <img class="rounded-circle border border-2 border-white shadow-sm" style="width: 64px; height: 64px;" src="https://api.dicebear.com/7.x/avataaars/svg?seed=Mia" alt="avatar">
                    <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-bold border border-2 border-white shadow-sm" style="width: 48px; height: 48px;">
                        JD
                    </div>
                     <div class="rounded-circle bg-success-subtle text-success d-flex align-items-center justify-content-center fw-bold border border-2 border-white shadow-sm" style="width: 64px; height: 64px;">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Chips / Badges</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="badge rounded-pill text-bg-primary py-2 px-3 fw-normal">Primary</span>
                        <span class="badge rounded-pill text-bg-secondary py-2 px-3 fw-normal">Secondary</span>
                        <span class="badge rounded-pill text-bg-success py-2 px-3 fw-normal">Success</span>
                        <span class="badge rounded-pill text-bg-danger py-2 px-3 fw-normal">Danger</span>
                        <span class="badge rounded-pill text-bg-warning py-2 px-3 fw-normal">Warning</span>
                        <span class="badge rounded-pill text-bg-info py-2 px-3 fw-normal text-white">Info</span>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill py-2 px-3 fw-medium">Subtle Primary</span>
                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill py-2 px-3 fw-medium">Subtle Success</span>
                        <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill py-2 px-3 fw-medium">Subtle Danger</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif($type === 'feedback')
    <!-- Feedback Component -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Alerts</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="bi bi-info-circle-fill me-3 fs-5"></i>
                        <div>A simple primary alert—check it out!</div>
                    </div>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <i class="bi bi-check-circle-fill me-3 fs-5"></i>
                        <div>A simple success alert—check it out!</div>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-3 fs-5"></i>
                        <div>A simple warning alert with a close button!</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Progress Bars</h5>
                </div>
                <div class="card-body">
                    <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar w-25" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-success w-50" role="progressbar" aria-label="Success example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-info w-75" role="progressbar" aria-label="Info example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-100" role="progressbar" aria-label="Warning example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Spinners</h5>
                </div>
                <div class="card-body">
                    <div class="spinner-border text-primary me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-success me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @elseif($type === 'navigation')
    <!-- Navigation Component -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Tabs</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" disabled>Disabled</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-muted small" id="home-tab-pane" role="tabpanel">This is some placeholder content the Home tab's associated content.</div>
                        <div class="tab-pane fade text-muted small" id="profile-tab-pane" role="tabpanel">This is some placeholder content the Profile tab's associated content.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Pagination</h5>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    @elseif($type === 'layout')
    <!-- Layout Component -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Grid System & Containers</h5>
                </div>
                <div class="card-body">
                    <div class="container text-center mb-4">
                      <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                          <div class="p-3 bg-light border text-muted small rounded">Row column</div>
                        </div>
                        <div class="col">
                          <div class="p-3 bg-light border text-muted small rounded">Row column</div>
                        </div>
                        <div class="col">
                          <div class="p-3 bg-light border text-muted small rounded">Row column</div>
                        </div>
                        <div class="col">
                          <div class="p-3 bg-light border text-muted small rounded">Row column</div>
                        </div>
                        <div class="col">
                          <div class="p-3 bg-light border text-muted small rounded">Row column</div>
                        </div>
                      </div>
                    </div>
                    
                    <h6 class="fw-bold fs-6">Dividers</h6>
                    <hr class="my-4 text-primary border-2 opacity-50">
                    <p class="text-muted small">Standard content separation with text align</p>
                    <div class="d-flex align-items-center">
                        <hr class="flex-grow-1 border-secondary">
                        <span class="px-3 text-muted small fw-medium">OR</span>
                        <hr class="flex-grow-1 border-secondary">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @elseif($type === 'surfaces')
    <!-- Surfaces Component -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-img-top rounded-top-4 d-flex align-items-center justify-content-center" style="height: 200px; background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%);">
                    <div class="text-center text-white">
                        <i class="bi bi-box-seam" style="font-size: 2.5rem; opacity: 0.9;"></i>
                        <div class="mt-2 fw-semibold small opacity-75">Product</div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Card Title</h5>
                    <p class="card-text text-muted small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary rounded-pill px-4">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-transparent border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">Accordion</h5>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item border rounded mb-2">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted small">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class.</div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded mb-2">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                                Accordion Item #2
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted small">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @elseif($type === 'utils')
    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <h5 class="fw-bold mb-4">Typography Utility Classes</h5>
                <p class="fs-1">.fs-1 text</p>
                <p class="fs-2">.fs-2 text</p>
                <p class="fs-3">.fs-3 text</p>
                <p class="fs-4">.fs-4 text</p>
                <p class="fs-5">.fs-5 text</p>
                <p class="fs-6">.fs-6 text</p>
                
                <hr class="my-4">
                
                <p class="fw-bold">Bold text.</p>
                <p class="fw-bolder">Bolder weight text (relative to the parent element).</p>
                <p class="fw-normal">Normal weight text.</p>
                <p class="fw-light">Light weight text.</p>
                <p class="fw-lighter">Lighter weight text (relative to the parent element).</p>
                <p class="fst-italic">Italic text.</p>
            </div>
        </div>
    </div>
    
    @elseif($type === 'lab')
    <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
        <div class="display-1 text-primary mb-3">
            <i class="bi bi-flask-fill"></i>
        </div>
        <h3 class="fw-bold">Experimental Lab Components</h3>
        <p class="text-muted">This section holds experimental UI components like advanced timelines, drag-and-drop lists, and rich text editors. These elements are currently in testing phase.</p>
    </div>
    
    @elseif($type === 'mui-x')
    <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
        <div class="display-1 text-primary mb-3">
            <i class="bi bi-table"></i>
        </div>
        <h3 class="fw-bold">Advanced DataGrid & Pickers</h3>
        <p class="text-muted">Enterprise-grade tables, calendars, and advanced UI elements inspired by Material UI X elements.</p>
    </div>
    
    @elseif($type === 'extra')
    <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
        <div class="mx-auto d-flex align-items-center justify-content-center mb-4" style="max-width: 200px; height: 200px;">
            <svg viewBox="0 0 120 160" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;">
                <defs>
                    <linearGradient id="hgTop" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#667eea"/>
                        <stop offset="100%" style="stop-color:#764ba2"/>
                    </linearGradient>
                    <linearGradient id="hgBot" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#f093fb"/>
                        <stop offset="100%" style="stop-color:#f5576c"/>
                    </linearGradient>
                </defs>
                <!-- Frame top & bottom bars -->
                <rect x="10" y="10" width="100" height="12" rx="6" fill="url(#hgTop)"/>
                <rect x="10" y="138" width="100" height="12" rx="6" fill="url(#hgBot)"/>
                <!-- Top sand -->
                <path d="M20 22 L100 22 L65 78 L55 78 Z" fill="url(#hgTop)" opacity="0.85"/>
                <!-- Bottom sand -->
                <path d="M55 82 L65 82 L95 138 L25 138 Z" fill="url(#hgBot)" opacity="0.85"/>
                <!-- Neck -->
                <ellipse cx="60" cy="80" rx="8" ry="4" fill="#a78bfa"/>
                <!-- Shine -->
                <ellipse cx="45" cy="40" rx="8" ry="5" fill="white" opacity="0.15" transform="rotate(-20 45 40)"/>
            </svg>
        </div>
        <h3 class="fw-bold">Extra UI Blocks</h3>
        <p class="text-muted">Empty states, 404 SVGs, 500 error illustrations, success confetti wrappers, and more.</p>
        <button class="btn btn-primary rounded-pill px-4 mt-3">See Examples</button>
    </div>

    @else
    <!-- Fallback -->
    <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
        <h3 class="fw-bold">Component Not Found</h3>
        <p class="text-muted">The requested component library does not exist or is currently being updated.</p>
    </div>
    @endif
</div>
@endsection
