<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ash</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    @yield('styles')
    <script src="https://quge5.com/88/tag.min.js" data-zone="225453" async data-cfasync="false"></script>
</head>
<body>
    <!-- Page Loader -->
    <div id="page-loader">
        <div class="loader-spinner"></div>
        <div class="loader-text">Loading Ash...</div>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-close" id="mobileSidebarClose">
            <i class="bi bi-x-lg"></i>
        </div>
        
        <a href="{{ route('dashboard.ecommerce') }}" class="sidebar-logo">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 4L2 12L16 20L30 12L16 4Z" fill="#3b82f6"/>
                <path d="M2 20L16 28L30 20" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 16L16 24L30 16" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>ash</span>
        </a>

        <div class="nav-label">Homepage</div>
        <ul class="nav-list p-0">
            <li class="nav-item">
                <a href="{{ route('dashboard.ecommerce') }}" class="nav-link {{ request()->routeIs('dashboard.ecommerce') ? 'active' : '' }}">
                    <i class="bi bi-cart3"></i>
                    <span>E-commerce</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.project') }}" class="nav-link {{ request()->routeIs('dashboard.project') ? 'active' : '' }}">
                    <i class="bi bi-briefcase"></i>
                    <span>Project</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.crm') }}" class="nav-link {{ request()->routeIs('dashboard.crm') ? 'active' : '' }}">
                    <i class="bi bi-people"></i>
                    <span>CRM</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.analytics') }}" class="nav-link {{ request()->routeIs('dashboard.analytics') ? 'active' : '' }}">
                    <i class="bi bi-graph-up"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.hrm') }}" class="nav-link {{ request()->routeIs('dashboard.hrm') ? 'active' : '' }}">
                    <i class="bi bi-person-badge"></i>
                    <span>HRM</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.time_tracker') }}" class="nav-link {{ request()->routeIs('dashboard.time_tracker') ? 'active' : '' }}">
                    <i class="bi bi-clock-history"></i>
                    <span>Time Tracker</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.hiring') }}" class="nav-link {{ request()->routeIs('dashboard.hiring') ? 'active' : '' }}">
                    <i class="bi bi-search"></i>
                    <span>Hiring</span>
                </a>
            </li>
        </ul>

        <div class="nav-label">Apps</div>
        <ul class="nav-list p-0">
            <li class="nav-item has-submenu {{ request()->routeIs('dashboard.ecommerce*') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="nav-link submenu-toggle {{ request()->routeIs('dashboard.ecommerce*') ? 'active' : '' }}">
                    <i class="bi bi-cart3"></i>
                    <span>E-commerce</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul class="submenu {{ request()->routeIs('dashboard.ecommerce*') ? 'show' : '' }}">
                    <li><a href="{{ route('dashboard.ecommerce') }}" class="nav-link small {{ request()->routeIs('dashboard.ecommerce') ? 'active' : '' }}">Admin</a></li>
                    <li><a href="{{ route('dashboard.ecommerce.customer') }}" class="nav-link small {{ request()->routeIs('dashboard.ecommerce.customer') ? 'active' : '' }}">Customer</a></li>
                </ul>
            </li>
            <li class="nav-item has-submenu {{ request()->routeIs('dashboard.crm*') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="nav-link submenu-toggle {{ request()->routeIs('dashboard.crm*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i>
                    <span>CRM</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul class="submenu {{ request()->routeIs('dashboard.crm*') ? 'show' : '' }}">
                    <li><a href="{{ route('dashboard.crm') }}" class="nav-link small {{ request()->routeIs('dashboard.crm') ? 'active' : '' }}">Deals</a></li>
                    <li><a href="{{ route('dashboard.crm.leads') }}" class="nav-link small {{ request()->routeIs('dashboard.crm.leads') ? 'active' : '' }}">Leads</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.chat') }}" class="nav-link {{ request()->routeIs('dashboard.chat') ? 'active' : '' }}">
                    <i class="bi bi-chat-dots"></i>
                    <span>Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.mail') }}" class="nav-link {{ request()->routeIs('dashboard.mail') ? 'active' : '' }}">
                    <i class="bi bi-envelope"></i>
                    <span>Email</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.kanban') }}" class="nav-link {{ request()->routeIs('dashboard.kanban') ? 'active' : '' }}">
                    <i class="bi bi-kanban"></i>
                    <span>Kanban</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.file_manager') }}" class="nav-link {{ request()->routeIs('dashboard.file_manager') ? 'active' : '' }}">
                    <i class="bi bi-folder2-open"></i>
                    <span>File Manager</span>
                </a>
            </li>
        </ul>

        <div class="nav-label">Pages</div>
        <ul class="nav-list p-0">
            <li class="nav-item">
                <a href="{{ route('dashboard.landing') }}" class="nav-link {{ request()->routeIs('dashboard.landing') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>Landing</span>
                </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="javascript:void(0)" class="nav-link submenu-toggle">
                    <i class="bi bi-shield-lock"></i>
                    <span>Authentication</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ route('dashboard.login') }}" class="nav-link small">Login</a></li>
                    <li><a href="{{ route('dashboard.register') }}" class="nav-link small">Register</a></li>
                </ul>
            </li>
        </ul>
        <div class="nav-label">MISC</div>
        <ul class="nav-list p-0">
            <li class="nav-item">
                <a href="{{ route('dashboard.pricing') }}" class="nav-link {{ request()->routeIs('dashboard.pricing') ? 'active' : '' }}">
                    <i class="bi bi-tag"></i>
                    <span>Pricing</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.faq') }}" class="nav-link {{ request()->routeIs('dashboard.faq') ? 'active' : '' }}">
                    <i class="bi bi-question-circle"></i>
                    <span>FAQ</span>
                </a>
            </li>
            <li class="nav-item has-submenu">
                <a href="javascript:void(0)" class="nav-link submenu-toggle">
                    <i class="bi bi-diagram-3"></i>
                    <span>Multi level</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul class="submenu">
                    <li><a href="#" class="nav-link small">Level 1a</a></li>
                    <li class="nav-item has-submenu sub-submenu">
                        <a href="javascript:void(0)" class="nav-link small submenu-toggle">
                            Level 1b
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul class="submenu ms-3 border-start">
                            <li><a href="#" class="nav-link small">Level 2a</a></li>
                            <li><a href="#" class="nav-link small">Level 2b</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.showcase') }}" class="nav-link {{ request()->routeIs('dashboard.showcase') ? 'active' : '' }}">
                    <i class="bi bi-laptop"></i>
                    <span>Showcase</span>
                </a>
            </li>
        </ul>

        <div class="nav-label">Documentation</div>
        <ul class="nav-list p-0">
            <li class="nav-item">
                <a href="{{ route('dashboard.docs') }}" class="nav-link {{ request()->routeIs('dashboard.docs') ? 'active' : '' }}">
                    <i class="bi bi-book"></i>
                    <span>Docs</span>
                </a>
            </li>
            <li class="nav-item has-submenu {{ request()->routeIs('dashboard.components*') || request()->routeIs('dashboard.component.detail*') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="nav-link submenu-toggle {{ request()->routeIs('dashboard.components*') || request()->routeIs('dashboard.component.detail*') ? 'active' : '' }}">
                    <i class="bi bi-layers"></i>
                    <span>Components</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul class="submenu {{ request()->routeIs('dashboard.components*') || request()->routeIs('dashboard.component.detail*') ? 'show' : '' }}">
                    <li><a href="{{ route('dashboard.component.detail', 'inputs') }}" class="nav-link small {{ request()->is('*/inputs') ? 'active' : '' }}">Inputs</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'data-display') }}" class="nav-link small {{ request()->is('*/data-display') ? 'active' : '' }}">Data Display</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'feedback') }}" class="nav-link small {{ request()->is('*/feedback') ? 'active' : '' }}">Feedback</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'navigation') }}" class="nav-link small {{ request()->is('*/navigation') ? 'active' : '' }}">Navigation</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'layout') }}" class="nav-link small {{ request()->is('*/layout') ? 'active' : '' }}">Layout</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'surfaces') }}" class="nav-link small {{ request()->is('*/surfaces') ? 'active' : '' }}">Surfaces</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'utils') }}" class="nav-link small {{ request()->is('*/utils') ? 'active' : '' }}">Utils</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'lab') }}" class="nav-link small {{ request()->is('*/lab') ? 'active' : '' }}">Lab</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'mui-x') }}" class="nav-link small {{ request()->is('*/mui-x') ? 'active' : '' }}">Mui X</a></li>
                    <li><a href="{{ route('dashboard.component.detail', 'extra') }}" class="nav-link small {{ request()->is('*/extra') ? 'active' : '' }}">Extra</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.changelog') }}" class="nav-link {{ request()->routeIs('dashboard.changelog') ? 'active' : '' }}">
                    <i class="bi bi-journal-text"></i>
                    <span>Changelog</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.migration') }}" class="nav-link {{ request()->routeIs('dashboard.migration') ? 'active' : '' }}">
                    <i class="bi bi-arrow-repeat"></i>
                    <span>Migration</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.help') }}" class="nav-link {{ request()->routeIs('dashboard.help') ? 'active' : '' }}">
                    <i class="bi bi-question-circle"></i>
                    <span>Help</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Topbar -->
    <header class="topbar">
        <div class="d-flex align-items-center">
            <div class="mobile-toggle" id="mobileSidebarToggle">
                <i class="bi bi-list"></i>
            </div>
            <div class="topbar-icon me-3 d-none d-lg-block" id="navbarSidebarToggle">
                <i class="bi bi-text-indent-left fs-4"></i>
            </div>
            <div class="position-relative search-container">
                <div class="search-box" id="searchBoxToggle">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search" id="searchInput">
                </div>
                <!-- Search Result Dropdown -->
                <div class="dropdown-menu border-0 shadow-sm rounded-4 p-0 mt-2 dropdown-search" id="searchDropdown">
                    <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                        <a href="#" class="text-primary small fw-bold text-decoration-none">Advanced search</a>
                    </div>
                    <div class="p-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small fw-bold">Recent</span>
                            <a href="#" class="text-primary small text-decoration-none">Clear history</a>
                        </div>
                        <div class="d-flex align-items-center mb-2 mt-3">
                            <span class="text-muted small me-2">•</span><a href="#" class="small text-decoration-none text-primary">App <span class="text-muted mx-1">/</span> <span class="text-muted">...</span> <span class="text-muted mx-1">/</span> Create new <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="text-muted small me-2">•</span><a href="#" class="small text-decoration-none text-primary">Homepage <span class="text-muted mx-1">/</span> E-commerce <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="text-muted small me-2">•</span><a href="#" class="small text-decoration-none text-primary">Pages <span class="text-muted mx-1">/</span> Starter <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <h6 class="text-muted small fw-bold mb-3">Files</h6>
                        <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                            <i class="bi bi-folder text-primary fs-3 me-3"></i>
                            <div>
                                <h6 class="mb-0 small fw-bold">ash_test17.zip</h6>
                                <span class="text-muted smaller">:: files / New folder / ash /</span>
                            </div>
                        </a>
                        <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                            <i class="bi bi-image text-warning fs-3 me-3"></i>
                            <div>
                                <h6 class="mb-0 small fw-bold">Product image(11).webp</h6>
                                <span class="text-muted smaller">:: files / ... / assets /</span>
                            </div>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                            <i class="bi bi-file-earmark-pdf text-primary fs-3 me-3"></i>
                            <div>
                                <h6 class="mb-0 small fw-bold text-truncate" style="max-width: 200px;">How_to_not_click_on_perfectly_innocent...</h6>
                                <span class="text-muted smaller">:: files / Download /</span>
                            </div>
                        </a>
                    </div>
                    <div class="p-3">
                        <h6 class="text-muted small fw-bold mb-3">Contacts</h6>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light border border-light-subtle text-dark rounded-pill py-1 px-2 d-flex align-items-center" style="font-weight: 500;"><img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Gojo" width="18" class="rounded-circle me-2 bg-white"> Gojo Satoru</span>
                            <span class="badge bg-light border border-light-subtle text-dark rounded-pill py-1 px-2 d-flex align-items-center" style="font-weight: 500;"><img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Nanami" width="18" class="rounded-circle me-2 bg-white"> Nanami Kento</span>
                            <span class="badge bg-light border border-light-subtle text-dark rounded-pill py-1 px-2 d-flex align-items-center" style="font-weight: 500;"><img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Nobara" width="18" class="rounded-circle me-2 bg-white"> Kugisaki Nobara</span>
                            <span class="badge bg-light border border-light-subtle text-dark rounded-pill py-1 px-2 d-flex align-items-center" style="font-weight: 500;"><img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Maki" width="18" class="rounded-circle me-2 bg-white"> Zenin Maki</span>
                            <span class="badge bg-light border border-light-subtle text-dark rounded-pill py-1 px-2 d-flex align-items-center" style="font-weight: 500;"><img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Todo" width="18" class="rounded-circle me-2 bg-white"> Todo Aoi</span>
                            <a href="#" class="small text-primary text-decoration-none mt-1 fw-bold">See All Contacts ></a>
                        </div>
                        <h6 class="text-muted small fw-bold mb-3">Popular tags</h6>
                        <div class="d-flex flex-wrap gap-2">
                             <span class="badge bg-light text-muted border rounded-pill py-1 px-2 fw-normal">Calendar</span>
                             <span class="badge bg-light text-muted border rounded-pill py-1 px-2 fw-normal">Starter</span>
                             <span class="badge bg-light text-muted border rounded-pill py-1 px-2 fw-normal">Docs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="topbar-actions">
            <div class="topbar-icon">
                <img src="https://flagcdn.com/w20/gb.png" alt="UK Flag" width="20">
            </div>
            <div class="topbar-icon" id="customizerToggle">
                <i class="bi bi-palette"></i>
            </div>
            <div class="position-relative">
                <div class="topbar-icon" id="notificationToggle">
                    <i class="bi bi-bell"></i>
                    <span class="notification-dot"></span>
                </div>
                <!-- Notifications Dropdown -->
                <div class="dropdown-notifications" id="notificationMenu">
                    <div class="notification-header">
                        <h6 class="mb-0 fw-bold">Notifications</h6>
                        <span class="badge bg-primary-subtle text-primary rounded-pill">3 New</span>
                    </div>
                    <div class="notification-list">
                        <a href="#" class="notification-item">
                            <div class="notif-icon bg-primary-subtle text-primary">
                                <i class="bi bi-cart-check"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold small text-dark">New order received!</h6>
                                <p class="mb-1 text-muted small">You have a new order from Ashley.</p>
                                <span class="text-muted smaller" style="font-size: 0.7rem;">5 min ago</span>
                            </div>
                        </a>
                        <a href="#" class="notification-item">
                            <div class="notif-icon bg-success-subtle text-success">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold small text-dark">New customer registered</h6>
                                <p class="mb-1 text-muted small">John Doe created a new account.</p>
                                <span class="text-muted smaller" style="font-size: 0.7rem;">1 hour ago</span>
                            </div>
                        </a>
                        <a href="#" class="notification-item">
                            <div class="notif-icon bg-warning-subtle text-warning">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold small text-dark">Storage limit reached</h6>
                                <p class="mb-1 text-muted small">Your project "Ash" is at 95% storage.</p>
                                <span class="text-muted smaller" style="font-size: 0.7rem;">2 hours ago</span>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top text-center">
                        <a href="#" class="text-primary small fw-bold text-decoration-none">View all notifications</a>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="user-avatar" id="profileDropdownToggle">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Captain" alt="Avatar">
                    <span class="status-dot"></span>
                </div>
                <div class="dropdown-profile" id="profileDropdownMenu">
                    <div class="px-3 py-2">
                        <h6 class="mb-0 fw-bold">Jerry Alexander</h6>
                        <p class="small text-muted mb-0">jerry@ash.com</p>
                    </div>
                    <div class="profile-divider"></div>
                    <a href="{{ route('dashboard.profile') }}"><i class="bi bi-person"></i> Profile</a>
                    <a href="{{ route('dashboard.settings') }}"><i class="bi bi-gear"></i> Settings</a>
                    <a href="{{ route('dashboard.help') }}"><i class="bi bi-question-circle"></i> Help</a>
                    <div class="profile-divider"></div>
                    <a href="{{ route('dashboard.login') }}" class="text-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
            </div>
        </div>
    </header>

    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    <!-- Main Content -->
    <main class="main-wrapper">
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.ecommerce') }}">Home</a></li>
                    @yield('breadcrumb-items')
                </ol>
            </nav>
            <h2 class="page-title">@yield('page-title')</h2>
        </div>
        @yield('content')
    </main>

    <!-- Theme Customizer -->
    <div class="customizer-backdrop" id="customizerBackdrop"></div>
    <div class="customizer-sidebar" id="customizerPanel">
        <div class="customizer-header">
            <h5 class="mb-0 text-white">Theme Customizer</h5>
            <i class="bi bi-x-lg text-white cursor-pointer" id="customizerClose"></i>
        </div>
        <div class="customizer-body">
            <div class="mb-4">
                <h6 class="fw-bold mb-3 small text-uppercase" style="letter-spacing: 0.05em;">Primary Color</h6>
                <div class="d-flex flex-wrap gap-2" id="primaryColorOptions">
                    <div class="color-option active" style="background-color: #3b82f6;" data-color="#3b82f6"></div>
                    <div class="color-option" style="background-color: #6366f1;" data-color="#6366f1"></div>
                    <div class="color-option" style="background-color: #8b5cf6;" data-color="#8b5cf6"></div>
                    <div class="color-option" style="background-color: #ec4899;" data-color="#ec4899"></div>
                    <div class="color-option" style="background-color: #f43f5e;" data-color="#f43f5e"></div>
                    <div class="color-option" style="background-color: #f97316;" data-color="#f97316"></div>
                    <div class="color-option" style="background-color: #eab308;" data-color="#eab308"></div>
                    <div class="color-option" style="background-color: #22c55e;" data-color="#22c55e"></div>
                    <div class="color-option" style="background-color: #06b6d4;" data-color="#06b6d4"></div>
                    <div class="color-option" style="background-color: #1e293b;" data-color="#1e293b"></div>
                </div>
            </div>

            <div class="mb-5">
                <h6 class="fw-bold mb-3 small text-uppercase" style="letter-spacing: 0.05em;">Theme Mode</h6>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="theme-mode-option active" data-theme="light">
                            <i class="bi bi-sun"></i>
                            <span class="small fw-semibold">Light</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="theme-mode-option" data-theme="dark">
                            <i class="bi bi-moon-stars"></i>
                            <span class="small fw-semibold">Dark</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-3 bg-light-hint rounded-3 mt-auto" style="background: rgba(0,0,0,0.03);">
                <p class="small text-muted mb-0"><i class="bi bi-info-circle me-1"></i> Preferences are saved to your browser's local storage.</p>
            </div>
            
            <button class="btn btn-outline-primary w-100 mt-4" id="resetCustomizer">Reset to Default</button>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- Apex Charts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

    <!-- Dashboard JS -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    
    @yield('scripts')
</body>
</html>
