document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stats-counter');

    if (counters.length === 0) return;

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    function animateCounter(counter) {
        const target = +counter.getAttribute('data-target');
        const duration = 2000; // milliseconds
        const startTime = performance.now();

        function updateCounter(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const value = Math.floor(progress * target);

            counter.textContent = value;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;

                // Add suffixes based on data attributes or target values
                if (target === 95) {
                    counter.textContent += '%';
                } else if (target === 15) {
                    counter.textContent += '+';
                }
            }
        }

        requestAnimationFrame(updateCounter);
    }

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
});