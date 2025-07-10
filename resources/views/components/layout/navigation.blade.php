<nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <span class="text-primary">{{ explode('.', config('company.domain'))[0] }}</span>
            <span class="text-dark">.{{ explode('.', config('company.domain'))[1] ?? 'id' }}</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-primary"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1 rounded-pill" href="#home" aria-label="Go to Home section">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1 rounded-pill" href="#features" aria-label="Go to Features section">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1 rounded-pill" href="#about" aria-label="Go to About section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1 rounded-pill" href="#services" aria-label="Go to Services section">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1 rounded-pill" href="#testimonials" aria-label="Go to Testimonials section">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 mx-1 rounded-pill" href="#contact" aria-label="Go to Contact section">Contact</a>
                </li>
            </ul>
            <a href="#contact" class="btn btn-primary rounded-pill ms-lg-4 px-4 py-2 d-none d-lg-block" aria-label="Get started with our services">
                Get Started
            </a>
        </div>
    </div>
</nav>