(function () {
    "use strict";

    const cards = document.querySelectorAll('.rating-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add('visible');
        }, 150 + index * 160);
    });

    console.log("✅ Component1 loaded.");

    cards.forEach((card) => {
        const review = card.querySelector('.rating-review')?.textContent || '';
        const client = card.querySelector('.rating-client')?.textContent || '';
        card.setAttribute('aria-label', `Rating from ${client}: ${review}`);
    });

    const isDesktop = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    if (isDesktop) {
        cards.forEach((card) => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const cx = rect.width / 2;
                const cy = rect.height / 2;

                const rotateY = ((x - cx) / cx) * 10;
                const rotateX = -((y - cy) / cy) * 10;

                card.style.transform =
                    `translateY(-12px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });
    }
})();