@extends('layout.app')

@section('content')
<section class="rating-section">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/component1.css') }}">

    <div class="rating-container">

        <h2 class="rating-heading">Our Services</h2>
        <p class="rating-subheading">What we offer to our clients</p>

        <div class="rating-grid">

            <!-- ================= ROW 1 ================= -->

            <!-- Card 1 — Double Entry Accounting -->
            <div class="rating-card">
                <div class="rating-stars">★★★★★</div>
                <h3 class="rating-title">Double Entry Accounting</h3>
                <p class="rating-review">
                    Maintain impeccable financial records with our industry-standard
                    double-entry ledger system, designed to ensure every transaction
                    is perfectly balanced and audit-ready for total compliance.
                </p>
            </div>

            <!-- Card 2 — Contract Management -->
            <div class="rating-card">
                <div class="rating-stars">★★★★★</div>
                <h3 class="rating-title">Contract Management</h3>
                <p class="rating-review">
                    Streamline your legal workflows by creating, tracking, and managing
                    all business contracts digitally. Set automated reminders for renewals
                    and keep all documents secure.
                </p>
            </div>

            <!-- Card 3 — Budget Planning -->
            <div class="rating-card">
                <div class="rating-stars">★★★★★</div>
                <h3 class="rating-title">Budget Planning</h3>
                <p class="rating-review">
                    Take command of your company's financial future with robust budgeting
                    tools. Analyze variance in real-time and adjust departmental allocations
                    to maximize efficiency.
                </p>
            </div>

            <!-- ================= ROW 2 ================= -->

            <!-- Card 4 — Asset Tracking -->
            <div class="rating-card">
                <div class="rating-stars">★★★★★</div>
                <h3 class="rating-title">Asset Tracking</h3>
                <p class="rating-review">
                    Gain complete visibility over your physical and functional assets.
                    Automatically calculate depreciation, track location history, and
                    schedule maintenance to prolong asset lifecycles.
                </p>
            </div>

            <!-- Card 5 — Goal Tracking -->
            <div class="rating-card">
                <div class="rating-stars">★★★★★</div>
                <h3 class="rating-title">Goal Tracking</h3>
                <p class="rating-review">
                    Define clear financial targets and monitor progress with dynamic,
                    real-time dashboards. Empower your teams to stay aligned with
                    organizational objectives through visual performance indicators.
                </p>
            </div>

            <!-- Card 6 — Retainer Invoicing -->
            <div class="rating-card">
                <div class="rating-stars">★★★★★</div>
                <h3 class="rating-title">Retainer Invoicing</h3>
                <p class="rating-review">
                    Simplify long-term client engagements with automated retainer
                    invoicing. Track usage against pre-paid amounts and generate
                    transparent reports to build trust with your clients.
                </p>
            </div>

        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/component1.js') }}" defer></script>

</section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/component1.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/component1.js') }}" defer></script>
@endpush