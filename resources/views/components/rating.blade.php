@extends('layout.app')

@section('content')
<section class="rating-section">
  <div class="rating-container">
    <h2 class="rating-heading">Customer Ratings</h2>
    <p class="rating-subheading">What our clients say about us</p>

    <div class="rating-grid">
      <!-- Card 1 -->
      <div class="rating-card">
        <div class="rating-stars">★★★★★</div>
        <p class="rating-review">"Excellent service! Highly recommended."</p>
        <h4 class="rating-client">- roman</h4>
      </div>

      <!-- Card 2 -->
      <div class="rating-card">
        <div class="rating-stars">★★★★☆</div>
        <p class="rating-review">"Very good quality and fast delivery."</p>
        <h4 class="rating-client">- fiza</h4>
      </div>

      <!-- Card 3 -->
      <div class="rating-card">
        <div class="rating-stars">★★★★★</div>
        <p class="rating-review">"Amazing experience, will come back again."</p>
        <h4 class="rating-client">- mahnoor</h4>
      </div>
    </div>
  </div>
</section>
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/rating.css') }}">
@endpush

@push('scripts')
  <link rel="stylesheet" href="{{ asset('js/rating.js') }}">
@endpush