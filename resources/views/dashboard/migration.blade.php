@extends('layouts.dashboard')

@section('breadcrumb-items')
    <li class="breadcrumb-item active" aria-current="page">Migration</li>
@endsection

@section('page-title', 'Migration Guide')

@section('content')
<div class="container-fluid">
    <div class="card border-0 shadow-sm rounded-4 p-5 mb-4">
        <h2 class="fw-bold mb-4">Migrating to Ash Dashboard</h2>
        <p class="text-muted lead">Learn how to easily migrate your existing projects or earlier versions of this template to the new Ash architecture.</p>
        
        <hr class="my-5 opacity-50">

        <h4 class="fw-bold mb-3">1. Layout Restructuring</h4>
        <p class="text-muted">In the new version, the main layout has been consolidated into <code>layouts.dashboard</code>. Ensure your views use the updated <code>@@extends</code> and <code>@@section</code> patterns.</p>
        <div class="bg-dark text-light p-3 rounded-4 mb-4 small">
            <pre class="mb-0"><code>// Old:
@@extends('layouts.app')

// New:
@@extends('layouts.dashboard')</code></pre>
        </div>

        <h4 class="fw-bold mb-3">2. Theme Variable Names</h4>
        <p class="text-muted">We have renamed some CSS variables to avoid conflicts with Bootstrap defaults and to provide better theme support.</p>
        <div class="table-responsive">
            <table class="table table-bordered rounded-3 overflow-hidden">
                <thead class="bg-light">
                    <tr>
                        <th class="fw-bold">Old Variable</th>
                        <th class="fw-bold">New Ash Variable</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>--bg-light</code></td>
                        <td><code>--bg-body</code></td>
                    </tr>
                    <tr>
                        <td><code>--bg-white</code></td>
                        <td><code>--bg-card</code></td>
                    </tr>
                    <tr>
                        <td><code>--text-dark</code></td>
                        <td><code>--text-main</code></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h4 class="fw-bold mb-3 mt-5">3. Component Updates</h4>
        <p class="text-muted">Many components now use standard Bootstrap 5 classes combined with Ash utilities. Check the <code>Components</code> page for the latest markup examples.</p>
        <div class="alert alert-warning border-0 rounded-4 shadow-sm mb-0">
            <i class="bi bi-exclamation-triangle me-2"></i> Note: Inline scripts have been deprecated. Please move all page-specific JS to separate script files or use the <code>&#64;section('scripts')</code> block.
        </div>
    </div>
</div>
@endsection
