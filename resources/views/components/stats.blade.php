<!-- ✅ CSS FILE CALL -->
<link rel="stylesheet" href="{{ asset('css/statsbar.css') }}">

<section class="statsbar-section" id="statsbar">
  <div class="statsbar-container">
    <div class="statsbar-grid">

      <!-- Stat 1 -->
      <div class="statsbar-card">
        <h2 class="statsbar-number" data-target="10000" data-suffix="+">0</h2>
        <p class="statsbar-label">Businesses Trust Us</p>
      </div>

      <!-- Stat 2 -->
      <div class="statsbar-card">
        <h2 class="statsbar-number" data-target="99.9" data-decimal="1" data-suffix="%">0</h2>
        <p class="statsbar-label">Uptime Guarantee</p>
      </div>

      <!-- Stat 3 -->
      <div class="statsbar-card">
        <h2 class="statsbar-number" data-text="24/7">24/7</h2>
        <p class="statsbar-label">Customer Support</p>
      </div>

      <!-- Stat 4 -->
      <div class="statsbar-card">
        <h2 class="statsbar-number" data-target="50" data-suffix="+">0</h2>
        <p class="statsbar-label">Countries Worldwide</p>
      </div>

    </div>
  </div>
</section>

<!-- ✅ JS FILE CALL -->
<script src="{{ asset('js/statsbar.js') }}"></script>