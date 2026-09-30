("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".service-btn");

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      alert("Learn More clicked!");
    });
  });
});