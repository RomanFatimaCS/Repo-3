document.addEventListener("DOMContentLoaded", () => {
  const stats = document.querySelectorAll(".statsbar-number");

  // ===== Counting Animation =====
  const animateCount = (el) => {
    // Agar text wala stat hai (jaise "24/7") toh skip
    if (el.dataset.text) {
      el.textContent = el.dataset.text;
      return;
    }

    const target = parseFloat(el.dataset.target);
    const decimal = parseInt(el.dataset.decimal || 0);
    const suffix = el.dataset.suffix || "";
    let current = 0;
    const step = target / 60; // 60 frames

    const update = () => {
      current += step;

      if (current >= target) {
        current = target;
      }

      let display;
      if (decimal > 0) {
        display = current.toFixed(decimal);
      } else {
        display = Math.floor(current).toLocaleString();
      }

      el.textContent = display + suffix;

      if (current < target) {
        requestAnimationFrame(update);
      }
    };

    update();
  };

  // ===== Trigger on Scroll =====
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  stats.forEach((stat) => observer.observe(stat));
});