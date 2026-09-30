<section class="rating-section-3">

    <link rel="stylesheet" href="{{ asset('css/component3.css') }}">

    <div class="rating-container-3">

        <h2 class="rating-heading-3">Business Solutions</h2>
        <p class="rating-subheading-3">Tools to grow your enterprise</p>

        <div class="rating-grid-3">

            <!-- Card 1 — Invoice Management -->
            <div class="rating-card-3">
                <div class="rating-stars-3">★★★★★</div>
                <h3 class="rating-title-3">Invoice Management</h3>
                <p class="rating-review-3">
                    Create, send, and track professional invoices in seconds.
                    Automate reminders for overdue payments and get paid faster
                    with integrated payment gateways.
                </p>
            </div>

            <!-- Card 2 — Payroll Processing -->
            <div class="rating-card-3">
                <div class="rating-stars-3">★★★★★</div>
                <h3 class="rating-title-3">Payroll Processing</h3>
                <p class="rating-review-3">
                    Run payroll in minutes, not hours. Calculate salaries, taxes,
                    and deductions automatically while staying fully compliant
                    with local regulations.
                </p>
            </div>

            <!-- Card 3 — Inventory Control -->
           

        </div>
    </div>

    <script src="{{ asset('js/component3.js') }}" defer></script>

</section>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/component3.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/component3.js') }}" defer></script>
@endpush