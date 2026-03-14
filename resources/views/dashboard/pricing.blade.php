@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
@endsection

@section('page-title', 'Pricing')

@section('content')
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="fw-bold mb-3">Simple, predictable pricing</h2>
            <p class="text-muted mb-4 lead">No hidden fees. Choose the plan that best fits your needs.</p>
            <div class="d-inline-flex bg-white rounded-pill p-1 shadow-sm border mb-4">
                <button class="btn btn-primary rounded-pill px-4" id="monthlyBtn">Monthly</button>
                <button class="btn btn-white rounded-pill px-4 text-muted" id="annualBtn">Annual <span class="badge bg-success-subtle text-success rounded-pill ms-2">Save 20%</span></button>
            </div>
        </div>
    </div>

    <div class="row g-4 align-items-center mb-5">
        <!-- Basic Plan -->
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-xl-5">
                    <div class="text-center mb-4">
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3 fw-bold">Basic</span>
                        <h2 class="fw-bold mb-0" id="priceBasic">$19<span class="fs-6 text-muted fw-normal">/mo</span></h2>
                        <p class="text-muted mt-2 small">Perfect for individuals and small projects.</p>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> 1 User</li>
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> 5 Projects</li>
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> 10GB Storage</li>
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-x-circle text-muted opacity-50 me-2"></i> Custom Domain</li>
                        <li class="d-flex align-items-center text-muted"><i class="bi bi-x-circle text-muted opacity-50 me-2"></i> Premium Support</li>
                    </ul>
                    <div class="d-grid mt-auto">
                        <button class="btn btn-outline-primary rounded-3 py-2 fw-bold">Get Started</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pro Plan -->
        <div class="col-lg-4">
            <div class="card h-100 border-primary shadow-lg rounded-4 position-relative" style="transform: scale(1.05); z-index: 10;">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <span class="badge bg-primary rounded-pill px-3 py-2 text-white shadow fw-bold">Most Popular</span>
                </div>
                <div class="card-body p-4 p-xl-5">
                    <div class="text-center mb-4">
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3 fw-bold">Pro</span>
                        <h2 class="fw-bold mb-0" id="pricePro">$49<span class="fs-6 text-muted fw-normal">/mo</span></h2>
                        <p class="text-muted mt-2 small">Ideal for growing teams and startups.</p>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex align-items-center fw-medium"><i class="bi bi-check-circle-fill text-primary me-2"></i> 5 Users</li>
                        <li class="mb-3 d-flex align-items-center fw-medium"><i class="bi bi-check-circle-fill text-primary me-2"></i> 50 Projects</li>
                        <li class="mb-3 d-flex align-items-center fw-medium"><i class="bi bi-check-circle-fill text-primary me-2"></i> 100GB Storage</li>
                        <li class="mb-3 d-flex align-items-center fw-medium"><i class="bi bi-check-circle-fill text-primary me-2"></i> Custom Domain</li>
                        <li class="d-flex align-items-center fw-medium"><i class="bi bi-check-circle-fill text-primary me-2"></i> Priority Support</li>
                    </ul>
                    <div class="d-grid mt-auto">
                        <button class="btn btn-primary rounded-3 py-2 fw-bold">Upgrade to Pro</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enterprise Plan -->
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-xl-5">
                    <div class="text-center mb-4">
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3 fw-bold">Enterprise</span>
                        <h2 class="fw-bold mb-0" id="priceEnterprise">$99<span class="fs-6 text-muted fw-normal">/mo</span></h2>
                        <p class="text-muted mt-2 small">For large organizations with advanced needs.</p>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> Unlimited Users</li>
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> Unlimited Projects</li>
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> 1TB Storage</li>
                        <li class="mb-3 d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> Custom Domain</li>
                        <li class="d-flex align-items-center text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> 24/7 Dedicated Support</li>
                    </ul>
                    <div class="d-grid mt-auto">
                        <button class="btn btn-outline-primary rounded-3 py-2 fw-bold">Contact Sales</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 text-center">
            <h4 class="fw-bold mb-4">Have questions? We have answers.</h4>
            <a href="{{ route('dashboard.faq') }}" class="btn btn-light border fw-bold rounded-pill px-4">Visit FAQ Page</a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const monthlyBtn = document.getElementById('monthlyBtn');
        const annualBtn = document.getElementById('annualBtn');
        const priceBasic = document.getElementById('priceBasic');
        const pricePro = document.getElementById('pricePro');
        const priceEnterprise = document.getElementById('priceEnterprise');

        let isAnnual = false;

        function updatePrices() {
            if (isAnnual) {
                // Approximate 20% discount prices
                priceBasic.innerHTML = '$15<span class="fs-6 text-muted fw-normal">/mo</span>';
                pricePro.innerHTML = '$39<span class="fs-6 text-muted fw-normal">/mo</span>';
                priceEnterprise.innerHTML = '$79<span class="fs-6 text-muted fw-normal">/mo</span>';
                
                monthlyBtn.classList.replace('btn-primary', 'btn-white');
                monthlyBtn.classList.add('text-muted');
                annualBtn.classList.replace('btn-white', 'btn-primary');
                annualBtn.classList.remove('text-muted');
            } else {
                priceBasic.innerHTML = '$19<span class="fs-6 text-muted fw-normal">/mo</span>';
                pricePro.innerHTML = '$49<span class="fs-6 text-muted fw-normal">/mo</span>';
                priceEnterprise.innerHTML = '$99<span class="fs-6 text-muted fw-normal">/mo</span>';
                
                annualBtn.classList.replace('btn-primary', 'btn-white');
                annualBtn.classList.add('text-muted');
                monthlyBtn.classList.replace('btn-white', 'btn-primary');
                monthlyBtn.classList.remove('text-muted');
            }
        }

        monthlyBtn.addEventListener('click', () => { isAnnual = false; updatePrices(); });
        annualBtn.addEventListener('click', () => { isAnnual = true; updatePrices(); });
    });
</script>
@endsection
