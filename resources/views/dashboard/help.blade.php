@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Help Center</li>
@endsection

@section('page-title', 'Help & Support')

@section('content')
<div class="container-fluid">
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="bg-primary-subtle text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <i class="bi bi-book fs-3"></i>
                </div>
                <h5 class="fw-bold">Knowledge Base</h5>
                <p class="text-muted small">Explore our detailed guides and tutorials to master Ash Dashboard.</p>
                <a href="{{ route('dashboard.docs') }}" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Go to Docs</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="bg-success-subtle text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <i class="bi bi-chat-dots fs-3"></i>
                </div>
                <h5 class="fw-bold">Community Forum</h5>
                <p class="text-muted small">Join discussions with other users and developers in our community.</p>
                <button class="btn btn-outline-success btn-sm rounded-pill mt-auto">Open Forum</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="bg-info-subtle text-info rounded-circle d-inline-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <i class="bi bi-envelope fs-3"></i>
                </div>
                <h5 class="fw-bold">Contact Support</h5>
                <p class="text-muted small">Need direct help? Our support team is available 24/7 for you.</p>
                <button class="btn btn-outline-info btn-sm rounded-pill mt-auto">Send Email</button>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-white border-bottom p-4">
            <h5 class="fw-bold mb-0">Frequently Asked Questions</h5>
        </div>
        <div class="card-body p-0">
            <div class="accordion accordion-flush" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            How do I change the primary color of the dashboard?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            You can change the primary color by clicking on the palette icon in the topbar. This will open the Theme Customizer where you can select your preferred color.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Is Ash Dashboard mobile responsive?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Yes, Ash is built with a mobile-first approach using Bootstrap 5, ensuring it looks great on all devices from smartphones to large monitors.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            How can I enable Dark Mode?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Dark Mode can be toggled via the Theme Customizer panel. Open it by clicking the palette icon next to your profile in the topbar.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
