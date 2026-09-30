(function () {
    "use strict";

    const cards = document.querySelectorAll('.rating-card-3');

    cards.forEach(function (card, index) {
        setTimeout(function () {
            card.classList.add('visible');
        }, 200 + index * 200);
    });

    console.log("✅ Component3 loaded — " + cards.length + " cards");

    const isDesktop = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    if (isDesktop) {
        cards.forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const cx = rect.width / 2;
                const cy = rect.height / 2;

                const rotateY = ((x - cx) / cx) * 12;
                const rotateX = -((y - cy) / cy) * 12;

                card.style.transform =
                    'translateY(-14px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale(1.04)';
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
            });
        });
    }
})();