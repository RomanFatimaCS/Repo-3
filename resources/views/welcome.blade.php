<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Website</title>

  <!-- ✅ CSS LINKS -->
  <link rel="stylesheet" href="{{ asset('css/Rating.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/OurServices.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/Stats.css') }}" />
</head>
<body>

  <!-- ==================== RATING SECTION ==================== -->
  <section class="rating-section">
    <div class="rating-container">
      <h2 class="rating-heading">Customer Ratings</h2>
      <p class="rating-subheading">What our clients say about us</p>

      <div class="rating-grid">
        <div class="rating-card">
          <div class="rating-stars">★★★★★</div>
          <p class="rating-review">"Excellent service! Highly recommended."</p>
          <h4 class="rating-client">- Ali Khan</h4>
        </div>

        <div class="rating-card">
          <div class="rating-stars">★★★★☆</div>
          <p class="rating-review">"Very good quality and fast delivery."</p>
          <h4 class="rating-client">- Sara Ahmed</h4>
        </div>

        <div class="rating-card">
          <div class="rating-stars">★★★★★</div>
          <p class="rating-review">"Amazing experience, will come back again."</p>
          <h4 class="rating-client">- Bilal Raza</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== OUR SERVICES SECTION ==================== -->
  <section class="services-section">
    <div class="services-container">
      <h2 class="services-heading">Our Services</h2>
      <p class="services-subheading">We provide the best solutions for your business</p>

      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon">🚀</div>
          <h3 class="service-title">Web Development</h3>
          <p class="service-desc">Modern and responsive websites built with the latest technologies.</p>
          <button class="service-btn">Learn More</button>
        </div>

        <div class="service-card">
          <div class="service-icon">📱</div>
          <h3 class="service-title">Mobile Apps</h3>
          <p class="service-desc">Cross-platform mobile applications for Android and iOS.</p>
          <button class="service-btn">Learn More</button>
        </div>

        <div class="service-card">
          <div class="service-icon">🎨</div>
          <h3 class="service-title">UI/UX Design</h3>
          <p class="service-desc">Creative and user-friendly designs that boost engagement.</p>
          <button class="service-btn">Learn More</button>
        </div>

        <div class="service-card">
          <div class="service-icon">📈</div>
          <h3 class="service-title">Digital Marketing</h3>
          <p class="service-desc">Grow your business with SEO, ads, and social media marketing.</p>
          <button class="service-btn">Learn More</button>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== STATS SECTION (GREEN) ==================== -->
  <section class="stats-section">
    <div class="stats-container">
      <div class="stats-grid">
        <div class="stat-card">
          <h2 class="stat-number" data-target="10000">0</h2>
          <p class="stat-label">Businesses Trust Us</p>
        </div>

        <div class="stat-card">
          <h2 class="stat-number" data-target="99.9" data-decimal="1">0</h2>
          <p class="stat-label">Uptime Guarantee</p>
        </div>

        <div class="stat-card">
          <h2 class="stat-number" data-text="24/7">24/7</h2>
          <p class="stat-label">Customer Support</p>
        </div>

        <div class="stat-card">
          <h2 class="stat-number" data-target="50">0</h2>
          <p class="stat-label">Countries Worldwide</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ JS LINKS -->
  <script src="{{ asset('js/Rating.js') }}"></script>
  <script src="{{ asset('js/OurServices.js') }}"></script>
  <script src="{{ asset('js/Stats.js') }}"></script>

</body>
</html>