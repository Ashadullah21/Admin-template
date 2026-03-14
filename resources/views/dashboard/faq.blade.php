@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
@endsection

@section('page-title', 'Frequently Asked Questions')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <div class="d-inline-flex bg-primary fs-3 text-white rounded-circle align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="bi bi-question-lg"></i>
                </div>
                <h2 class="fw-bold mb-3">How can we help you?</h2>
                <p class="text-muted lead">Search our knowledge base or browse frequently asked questions below.</p>
                <div class="position-relative mt-4 mx-auto" style="max-width: 500px;">
                    <input type="text" class="form-control form-control-lg rounded-pill ps-5 border-0 shadow-sm" placeholder="Search for answers...">
                    <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted" style="left: 20px;"></i>
                </div>
            </div>

            <!-- FAQ Accordion -->
            <div class="accordion accordion-flush bg-card rounded-4 shadow-sm border p-3" id="faqAccordion">
                
                <!-- Category 1 -->
                <h6 class="text-primary text-uppercase fw-bold mb-3 mt-2 ms-3 small">Account & Billing</h6>
                
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold rounded-3 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1">
                            How do I change my subscription plan?
                        </button>
                    </h2>
                    <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted pt-0 pb-4">
                            You can change your subscription plan at any time by navigating to your Account Settings and selecting the 'Billing' tab. From there, you can view available plans and upgrade or downgrade as needed. Changes take effect on your next billing cycle.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold rounded-3 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2">
                            What payment methods do you accept?
                        </button>
                    </h2>
                    <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted pt-0 pb-4">
                            We accept all major credit cards including Visa, Mastercard, American Express, and Discover. We also support payments via PayPal and Stripe.
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <h6 class="text-primary text-uppercase fw-bold mb-3 mt-4 ms-3 small">Technical Support</h6>

                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold rounded-3 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3">
                            How do I integrate the API into my project?
                        </button>
                    </h2>
                    <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted pt-0 pb-4">
                            Detailed instructions for API integration can be found in our Developer Documentation. You'll need to generate an API key from your Developer Dashboard to authenticate your requests.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold rounded-3 bg-transparent text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4">
                            Is dashboard data updated in real-time?
                        </button>
                    </h2>
                    <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted pt-0 pb-3">
                            Yes, most dashboard widgets reflect real-time data using WebSockets. However, some complex analytical reports may have a slightly longer caching period (e.g., 5-15 minutes) for performance reasons.
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5 mb-4">
                <p class="text-muted mb-2">Can't find the answer you're looking for?</p>
                <a href="#" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">Contact Support</a>
            </div>

        </div>
    </div>
</div>
@endsection
