(function () {
  "use strict";

  // 1. Fade-in cards on load with stagger
  const cards = document.querySelectorAll('.rating-card');
  cards.forEach((card, index) => {
    setTimeout(() => {
      card.classList.add('visible');
    }, 100 + index * 120);
  });

  // 2. Console log confirmation
  console.log("✅ Customer Ratings section loaded.");

  // 3. Accessibility: add aria labels
  cards.forEach((card) => {
    const review = card.querySelector('.rating-review')?.textContent || '';
    const client = card.querySelector('.rating-client')?.textContent || '';
    card.setAttribute('aria-label', `Rating from ${client}: ${review}`);
  });

  // 4. Log summary of ratings to console
  const starEls = document.querySelectorAll('.rating-stars');
  const nameEls = document.querySelectorAll('.rating-client');
  const ratings = [];

  starEls.forEach((starEl, idx) => {
    const text = starEl.textContent.trim();
    const filled = (text.match(/★/g) || []).length;
    const client = nameEls[idx]
      ? nameEls[idx].textContent.replace('-', '').trim()
      : 'unknown';
    ratings.push({ client, filled });
  });

  if (ratings.length) {
    const totalReviews = ratings.length;
    const avg = ratings.reduce((acc, r) => acc + r.filled, 0) / totalReviews;
    console.log(`⭐ ${totalReviews} reviews · average rating ${avg.toFixed(1)} / 5`);
  }
})();