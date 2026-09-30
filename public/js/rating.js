// Rating cards par fade-in animation
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".rating-card");

  cards.forEach((card, index) => {
    card.style.opacity = "0";
    card.style.transform = "translateY(20px)";
    card.style.transition = "all 0.5s ease";

    setTimeout(() => {
      card.style.opacity = "1";
      card.style.transform = "translateY(0)";
    }, index * 200);
  });
});