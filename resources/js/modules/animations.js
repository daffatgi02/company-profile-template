document.addEventListener('DOMContentLoaded', function() {
    // Process steps animation
    const processSteps = document.querySelectorAll('.process-step');
    
    if (processSteps.length > 0) {
        const processObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('active');
                    }, index * 200);
                    processObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        processSteps.forEach(step => {
            processObserver.observe(step);
        });
    }

    // Form validation enhancement
    const forms = document.querySelectorAll('form[novalidate]');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
});