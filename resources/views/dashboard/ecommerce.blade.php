@extends('layouts.dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app-ecommerce.css') }}">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">E-commerce</li>
@endsection

@section('page-title', 'Overview')

@section('content')
<div class="container-fluid">
    <div class="greeting-section">
        <span class="current-date">Saturday, Mar 07, 2026</span>
        <h2 class="greeting-text">Good morning, Captain!</h2>
    </div>

    <!-- Top Row: Stats, Orders, Revenue Charts -->
    <div class="row">
        <!-- Dashboard Stats and Orders (Left Column) -->
        <div class="col-lg-4">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="stat-card-icon icon-visitors">
                                <i class="bi bi-people"></i>
                            </div>
                            <div>
                                <div class="stat-value">2,110</div>
                                <div class="stat-label">Visitors</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="stat-card-icon icon-earnings">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div>
                                <div class="stat-value">$8.2M</div>
                                <div class="stat-label">Earnings</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="stat-card-icon icon-orders">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div>
                                <div class="stat-value">1,124</div>
                                <div class="stat-label">Orders</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-3 text-muted opacity-25">

                <div class="mt-2">
                    <p class="small fw-semibold text-muted mb-3">You have 16 orders today.</p>
                    <div class="order-list">
                        <div class="order-item">
                            <div class="order-img">
                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=C" alt="C">
                            </div>
                            <div class="order-info">
                                <h6>Advanced Soft Couch</h6>
                                <span>$427</span>
                            </div>
                            <div class="order-action">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-img">
                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=H" alt="H">
                            </div>
                            <div class="order-info">
                                <h6>Handmade Cotton Chair</h6>
                                <span>$472</span>
                            </div>
                            <div class="order-action">
                                <i class="bi bi-truck"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Charts and Promo -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="chart-header">
                                <div>
                                    <h6 class="fw-bold mb-1">Monthly Earnings</h6>
                                    <p class="small text-muted mb-0">Total profit gained</p>
                                </div>
                                <i class="bi bi-three-dots"></i>
                            </div>
                            <div class="mt-3">
                                <h4 class="fw-bold mb-1">$25,049</h4>
                                <span class="growth-badge growth-positive">+4.33%</span>
                                <span class="small text-muted ms-1">vs last month</span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="earningsChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="chart-header">
                                <div>
                                    <h6 class="fw-bold mb-1">Visitor Value</h6>
                                    <p class="small text-muted mb-0">Avg. income per site visit</p>
                                </div>
                                <i class="bi bi-three-dots"></i>
                            </div>
                            <div class="mt-3">
                                <h4 class="fw-bold mb-1">$63.02</h4>
                                <span class="growth-badge growth-negative">-1.03%</span>
                                <span class="small text-muted ms-1">vs last month</span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="visitorChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card promo-card p-4">
                        <div class="promo-content">
                            <h3>Grow your store confidently</h3>
                            <p>Access advanced tools and proven strategies to grow your business faster and smarter.</p>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary rounded-pill px-4">Upgrade Now</button>
                                <button class="btn-purchase">Purchase Now</button>
                            </div>
                        </div>
                        <div class="promo-rocket">
                            <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 20C100 20 60 80 60 120C60 142.091 77.9086 160 100 160C122.091 160 140 142.091 140 120C140 80 100 20 100 20Z" fill="#3b82f6" fill-opacity="0.1"/>
                                <circle cx="100" cy="110" r="20" fill="#3b82f6" fill-opacity="0.2"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row: Top Products Table -->
    <div class="row">
        <div class="col-12">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">Top Products</h6>
                    <button class="btn btn-sm btn-light border">Show all</button>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Vendors</th>
                                <th>Margin</th>
                                <th>Sold</th>
                                <th>Stock</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="order-img">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <span class="fw-semibold">Shanty Cotton Seat</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="vendor-avatars">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=A" alt="V">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=B" alt="V">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=C" alt="V">
                                        <div class="avatar-more">+2</div>
                                    </div>
                                </td>
                                <td>$981.00</td>
                                <td>29,536</td>
                                <td><span class="badge-stock badge-in-stock">In Stock</span></td>
                                <td><i class="bi bi-three-dots"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="order-img">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <span class="fw-semibold">Practical Soft Couch</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="vendor-avatars">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=D" alt="V">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=E" alt="V">
                                    </div>
                                </td>
                                <td>$199.00</td>
                                <td>27,700</td>
                                <td><span class="badge-stock badge-in-stock">In Stock</span></td>
                                <td><i class="bi bi-three-dots"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="order-img">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <span class="fw-semibold">Rustic Rubber Chair</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="vendor-avatars">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=F" alt="V">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=G" alt="V">
                                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=H" alt="V">
                                    </div>
                                </td>
                                <td>$609.00</td>
                                <td>21,778</td>
                                <td><span class="badge-stock badge-low-stock">Low Stock</span></td>
                                <td><i class="bi bi-three-dots"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Third Row: Storage Usage -->
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h6 class="fw-bold mb-1">Storage Usage</h6>
                        <p class="small text-muted mb-0">Product categories occupying warehouse space</p>
                    </div>
                    <button class="btn-purchase">Purchase Now</button>
                </div>
                <div class="storage-progress mb-3">
                    <div class="progress-bar-bed" style="width: 40%"></div>
                    <div class="progress-bar-table" style="width: 25%"></div>
                    <div class="progress-bar-couch" style="width: 20%"></div>
                    <div class="progress-bar-unoccupied" style="width: 15%"></div>
                </div>
                <div class="d-flex gap-4">
                    <div class="d-flex align-items-center gap-2">
                        <div class="share-color-dot progress-bar-bed"></div>
                        <span class="small text-muted">Bed</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="share-color-dot progress-bar-table"></div>
                        <span class="small text-muted">Table</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="share-color-dot progress-bar-couch"></div>
                        <span class="small text-muted">Couch</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="share-color-dot progress-bar-unoccupied"></div>
                        <span class="small text-muted">Unoccupied</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Row: Market Share & Recent Activities -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="chart-header">
                        <div>
                            <h6 class="fw-bold mb-1">Market Share</h6>
                            <p class="small text-muted mb-0">Amount of revenue in one month</p>
                        </div>
                        <i class="bi bi-three-dots"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div id="marketShareChart"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="market-share-list mt-3 mt-sm-0">
                                <div class="market-share-item">
                                    <div class="share-color-dot" style="background-color: #3b82f6;"></div>
                                    <span class="share-label">Alligator</span>
                                    <span class="share-percent">29.7%</span>
                                    <span class="share-growth growth-positive">6.01%</span>
                                </div>
                                <div class="market-share-item">
                                    <div class="share-color-dot" style="background-color: #ef4444;"></div>
                                    <span class="share-label">CheckMark</span>
                                    <span class="share-percent">31.9%</span>
                                    <span class="share-growth growth-positive">4.12%</span>
                                </div>
                                <div class="market-share-item">
                                    <div class="share-color-dot" style="background-color: #f97316;"></div>
                                    <span class="share-label">Stripes</span>
                                    <span class="share-percent">23%</span>
                                    <span class="share-growth growth-negative">-3.91%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <h6 class="fw-bold mb-1">Recent activities</h6>
                        <p class="small text-muted mb-0">Details on shopping composition</p>
                    </div>
                    <select class="form-select form-select-sm w-auto">
                        <option>Last month</option>
                    </select>
                </div>
                <div class="card-body mt-4">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon"><i class="bi bi-tag"></i></div>
                            <div class="timeline-content">
                                <h6>An item was sold!</h6>
                                <p>See track and monitor product purchase details...</p>
                            </div>
                            <span class="timeline-time">2s ago</span>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon bg-warning"><i class="bi bi-cart"></i></div>
                            <div class="timeline-content">
                                <h6>Product out on the Amazon Market</h6>
                                <p>Organize your inventory, track and monitor...</p>
                            </div>
                            <span class="timeline-time">5m ago</span>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon bg-info"><i class="bi bi-question-circle"></i></div>
                            <div class="timeline-content">
                                <h6>You responded to a support ticket</h6>
                                <p>Get updates on resolved and unresolved tickets...</p>
                            </div>
                            <span class="timeline-time">2hr ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fifth Row: Most Clients -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h6 class="fw-bold mb-1">Most clients</h6>
                        <p class="small text-muted mb-0">Our client number based on their primary location</p>
                    </div>
                    <select class="form-select form-select-sm w-auto">
                        <option>Last month</option>
                    </select>
                </div>
                <div class="row g-4 mt-2">
                    <div class="col-lg-8">
                        <div class="map-container overflow-hidden position-relative">
                            <!-- SVG World Map - original artwork, no external dependencies -->
                            <svg viewBox="0 0 800 420" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" style="opacity:0.92; background: linear-gradient(180deg, #e8f4fd 0%, #dbeafe 100%);">
                                <!-- Ocean grid lines -->
                                <g stroke="#bfdbfe" stroke-width="0.5" opacity="0.6">
                                    <line x1="0" y1="70" x2="800" y2="70"/>
                                    <line x1="0" y1="140" x2="800" y2="140"/>
                                    <line x1="0" y1="210" x2="800" y2="210"/>
                                    <line x1="0" y1="280" x2="800" y2="280"/>
                                    <line x1="0" y1="350" x2="800" y2="350"/>
                                    <line x1="100" y1="0" x2="100" y2="420"/>
                                    <line x1="200" y1="0" x2="200" y2="420"/>
                                    <line x1="300" y1="0" x2="300" y2="420"/>
                                    <line x1="400" y1="0" x2="400" y2="420"/>
                                    <line x1="500" y1="0" x2="500" y2="420"/>
                                    <line x1="600" y1="0" x2="600" y2="420"/>
                                    <line x1="700" y1="0" x2="700" y2="420"/>
                                </g>
                                <!-- North America -->
                                <path d="M80 60 L160 55 L195 70 L210 95 L205 130 L185 155 L175 175 L155 185 L130 190 L110 175 L90 160 L75 130 L70 100 Z" fill="#3b82f6" opacity="0.75"/>
                                <!-- Greenland -->
                                <path d="M190 20 L230 18 L245 35 L235 55 L210 58 L195 45 Z" fill="#60a5fa" opacity="0.6"/>
                                <!-- South America -->
                                <path d="M155 210 L195 205 L215 225 L220 260 L210 295 L195 325 L175 340 L155 330 L140 305 L135 270 L140 235 Z" fill="#3b82f6" opacity="0.7"/>
                                <!-- Europe -->
                                <path d="M330 55 L380 50 L400 65 L405 85 L390 100 L370 105 L345 100 L330 85 Z" fill="#6366f1" opacity="0.75"/>
                                <!-- Scandinavia bump -->
                                <path d="M355 35 L375 30 L385 48 L360 52 Z" fill="#6366f1" opacity="0.6"/>
                                <!-- Africa -->
                                <path d="M335 120 L390 115 L415 140 L420 180 L415 225 L400 265 L375 285 L350 280 L330 255 L320 215 L318 170 L325 140 Z" fill="#10b981" opacity="0.7"/>
                                <!-- Asia (main block) -->
                                <path d="M415 50 L540 45 L590 60 L615 80 L620 110 L600 135 L560 145 L510 150 L460 140 L430 120 L415 95 Z" fill="#6366f1" opacity="0.65"/>
                                <!-- India -->
                                <path d="M490 150 L520 148 L530 175 L515 200 L495 195 L482 170 Z" fill="#6366f1" opacity="0.65"/>
                                <!-- SE Asia -->
                                <path d="M560 155 L595 150 L610 170 L600 190 L575 185 L558 170 Z" fill="#6366f1" opacity="0.6"/>
                                <!-- Australia -->
                                <path d="M600 270 L680 265 L710 285 L715 320 L695 345 L655 350 L620 335 L600 310 L595 285 Z" fill="#f59e0b" opacity="0.7"/>
                                <!-- Japan -->
                                <path d="M645 100 L660 95 L668 110 L658 125 L644 120 Z" fill="#6366f1" opacity="0.6"/>
                                <!-- UK -->
                                <path d="M322 58 L333 54 L336 68 L326 72 Z" fill="#6366f1" opacity="0.65"/>
                                <!-- Dot markers for key regions -->
                                <circle cx="145" cy="130" r="7" fill="#1d4ed8" opacity="0.9"/>
                                <circle cx="365" cy="78" r="6" fill="#4338ca" opacity="0.9"/>
                                <circle cx="510" cy="100" r="6" fill="#4338ca" opacity="0.9"/>
                                <!-- Pulse rings on US -->
                                <circle cx="145" cy="130" r="14" fill="none" stroke="#1d4ed8" stroke-width="1.5" opacity="0.4"/>
                                <circle cx="145" cy="130" r="22" fill="none" stroke="#1d4ed8" stroke-width="1" opacity="0.2"/>
                                <!-- Labels -->
                                <text x="128" y="133" font-family="Inter,sans-serif" font-size="9" fill="#1e3a8a" font-weight="600">65%</text>
                                <text x="353" y="81" font-family="Inter,sans-serif" font-size="8" fill="#312e81" font-weight="600">22%</text>
                                <text x="498" y="103" font-family="Inter,sans-serif" font-size="8" fill="#312e81" font-weight="600">13%</text>
                            </svg>
                            <div class="position-absolute bottom-0 start-0 p-3 w-100" style="background: linear-gradient(transparent, var(--bg-card)); z-index: 2;">
                                <div class="d-flex justify-content-between align-items-center small fw-medium">
                                    <span>United States: 65%</span>
                                    <span>Europe: 22%</span>
                                    <span>Asia: 13%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="clientsBarChart" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script src="{{ asset('js/app-ecommerce.js') }}"></script>
@endsection
