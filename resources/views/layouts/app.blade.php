<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $seoData['title'] ?? config('app.name', 'NAMA_PERUSAHAAN-MU') }}</title>
    <meta name="description" content="{{ $seoData['description'] ?? 'Professional technology solutions and digital services to help your business thrive in the digital era.' }}">
    <meta name="keywords" content="{{ $seoData['keywords'] ?? 'web development, mobile apps, UI/UX design, software development, technology solutions' }}">
    <link rel="canonical" href="{{ $seoData['url'] ?? request()->url() }}">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $seoData['title'] ?? config('app.name', 'NAMA_PERUSAHAAN-MU') }}">
    <meta property="og:description" content="{{ $seoData['description'] ?? 'Professional technology solutions and digital services to help your business thrive in the digital era.' }}">
    <meta property="og:image" content="{{ asset($seoData['image'] ?? '/images/og-default.jpg') }}">
    <meta property="og:url" content="{{ $seoData['url'] ?? request()->url() }}">
    <meta property="og:type" content="{{ $seoData['type'] ?? 'website' }}">
    <meta property="og:site_name" content="{{ config('company.name', 'NAMA_PERUSAHAAN-MU') }}">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ config('seo.twitter_site', '@NAMA_PERUSAHAAN-MU') }}">
    <meta name="twitter:title" content="{{ $seoData['title'] ?? config('app.name', 'NAMA_PERUSAHAAN-MU') }}">
    <meta name="twitter:description" content="{{ $seoData['description'] ?? 'Professional technology solutions and digital services to help your business thrive in the digital era.' }}">
    <meta name="twitter:image" content="{{ asset($seoData['image'] ?? '/images/og-default.jpg') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    {{-- External Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    {{-- Critical Inline Styles (Preserved Exactly) --}}
    <style>
        :root {
            --primary: #3490dc;
            --primary-light: #60a5fa;
            --primary-dark: #2779bd;
            --secondary: #6c757d;
            --light: #ffffff;
            --dark: #343a40;
            --accent: #4dabf7;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .bg-primary {
            background-color: var(--primary) !important;
        }

        .text-primary {
            color: var(--primary) !important;
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        /* Improved Navbar Styles */
        .navbar {
            transition: all 0.5s ease;
            background-color: rgba(255, 255, 255, 0.97);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .navbar .nav-link {
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            color: var(--dark);
            position: relative;
        }

        .navbar .nav-link:hover {
            color: var(--primary);
        }

        .navbar .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover::after {
            width: 70%;
        }

        .navbar .nav-link.active {
            color: var(--primary);
        }

        .navbar .nav-link.active::after {
            width: 70%;
        }

        /* Change navbar appearance on scroll */
        .navbar-scrolled {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            background-color: rgba(255, 255, 255, 0.97) !important;
        }

        /* Mobile navbar styling */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                padding: 1rem;
                margin-top: 1rem;
            }

            .navbar .nav-link {
                padding: 0.7rem 1rem;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .navbar .nav-link::after {
                display: none;
            }

            .navbar .nav-link:hover {
                background-color: rgba(52, 144, 220, 0.05);
                border-radius: 5px;
            }
        }

        /* Hero section */
        /* Updated Hero Section Styles */
        .hero {
            position: relative;
            padding: 120px 0;
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(240, 249, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .highlight-text {
            position: relative;
            z-index: 1;
        }

        .highlight-text:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 30%;
            background-color: rgba(52, 144, 220, 0.2);
            bottom: 0;
            left: 0;
            z-index: -1;
            transform: skewX(-15deg);
        }

        .hero-image-wrapper {
            position: relative;
            padding: 20px;
            z-index: 2;
        }

        .hero-image {
            position: relative;
            z-index: 3;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);
            transition: all 0.5s ease;
        }

        .hero-image:hover {
            transform: perspective(1000px) rotateY(0deg) rotateX(0deg);
        }

        .hero-shape1 {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(52, 144, 220, 0.1);
            border-radius: 50%;
            top: -50px;
            right: -50px;
            z-index: 1;
            animation: pulse 8s infinite alternate ease-in-out;
        }

        .hero-shape2 {
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(52, 144, 220, 0.15);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            bottom: 0;
            left: 0;
            z-index: 1;
            animation: morph 8s infinite alternate ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.2);
            }
        }

        @keyframes morph {
            0% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            100% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }
        }

        .floating-card {
            position: absolute;
            bottom: 30px;
            right: -20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 15px;
            display: flex;
            align-items: center;
            z-index: 4;
            animation: float 3s infinite alternate ease-in-out;
            max-width: 250px;
        }

        .card-icon {
            width: 45px;
            height: 45px;
            background: var(--primary);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 20px;
        }

        .card-content h5 {
            font-size: 16px;
            margin-bottom: 3px;
            color: var(--dark);
        }

        .card-content p {
            font-size: 14px;
            margin-bottom: 0;
            color: var(--primary);
            font-weight: 600;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-15px);
            }
        }

        /* Stats Counter */
        .stats-container {
            margin-top: 3rem;
        }

        .stats-counter {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        .stats-text {
            font-size: 0.9rem;
            color: var(--dark);
            opacity: 0.8;
        }

        /* Mobile Responsive */
        @media (max-width: 991.98px) {
            .hero {
                padding: 100px 0 50px;
                text-align: center;
            }

            .hero-image-wrapper {
                margin-top: 50px;
                margin-bottom: 30px;
            }

            .floating-card {
                right: 20px;
                bottom: -20px;
            }

            .stats-container {
                justify-content: center;
                margin-bottom: 40px;
            }
        }

        @keyframes wave {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Features section */
        .feature-card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(52, 144, 220, 0.1);
            border-radius: 50%;
            margin-bottom: 1.5rem;
        }

        /* About section */
        .about-img {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Testimonials */
        .testimonial-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .testimonial-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Footer */
        footer {
            background-color: var(--primary-dark);
            color: var(--light);
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--light);
            padding-left: 5px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        /* Services Section Styles */
        .services {
            position: relative;
            overflow: hidden;
        }

        .service-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
            border: 1px solid rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: linear-gradient(135deg, rgba(52, 144, 220, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
            transition: all 0.5s ease;
            z-index: -1;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .service-card:hover::before {
            height: 100%;
        }

        .service-icon {
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(52, 144, 220, 0.1);
            color: var(--primary);
            font-size: 26px;
            border-radius: 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background-color: var(--primary);
            color: white;
            transform: rotateY(360deg);
            transition: all 0.5s ease;
        }

        .service-features {
            padding-top: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Featured Service */
        .featured-service {
            padding: 50px 0;
            background-color: #f8fafc;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .featured-service::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: rgba(52, 144, 220, 0.05);
            border-radius: 50%;
            z-index: 0;
        }

        .featured-service::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: rgba(52, 144, 220, 0.05);
            border-radius: 50%;
            z-index: 0;
        }

        .featured-img {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            transform: perspective(1000px) rotateY(-5deg);
        }

        .featured-img:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .service-badge {
            position: absolute;
            top: 20px;
            right: -30px;
            background-color: var(--primary);
            color: white;
            padding: 5px 30px;
            transform: rotate(45deg);
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(52, 144, 220, 0.1);
            color: var(--primary);
            font-size: 16px;
            border-radius: 10px;
        }

        /* Process Steps */
        .process-container {
            display: flex;
            justify-content: space-between;
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        .process-line {
            position: absolute;
            top: 60px;
            left: 50px;
            right: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            z-index: 0;
        }

        .process-step {
            text-align: center;
            position: relative;
            z-index: 1;
            width: 18%;
        }

        .process-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            position: relative;
            box-shadow: 0 5px 15px rgba(52, 144, 220, 0.3);
        }

        .process-icon span {
            font-size: 24px;
            font-weight: 700;
        }

        .process-step h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .process-step p {
            font-size: 14px;
            color: var(--secondary);
            margin: 0;
        }

        /* CTA Card */
        .cta-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            border-radius: 20px;
            padding: 50px 30px;
            box-shadow: 0 15px 35px rgba(52, 144, 220, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-card::before,
        .cta-card::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            z-index: 0;
        }

        .cta-card::before {
            top: -150px;
            right: -150px;
        }

        .cta-card::after {
            bottom: -150px;
            left: -150px;
        }

        .cta-card h3,
        .cta-card p {
            position: relative;
            z-index: 1;
        }

        .cta-card .btn {
            background-color: white;
            color: var(--primary);
            font-weight: 600;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
            border: 2px solid white;
        }

        .cta-card .btn:hover {
            background-color: transparent;
            color: white;
        }

        /* Mobile Responsiveness */
        @media (max-width: 991.98px) {
            .process-container {
                flex-direction: column;
                align-items: center;
            }

            .process-step {
                width: 100%;
                max-width: 250px;
                margin-bottom: 30px;
            }

            .process-line {
                display: none;
            }

            .featured-service {
                padding: 30px 20px;
            }

            .featured-img {
                margin-bottom: 30px;
            }
        }

        /* For very small screens */
        @media (max-width: 575.98px) {
            .service-card {
                padding: 15px;
            }

            .cta-card {
                padding: 30px 20px;
            }
        }
    </style>

    {{-- JSON-LD Structured Data --}}
    @if(isset($jsonLd))
    <script type="application/ld+json">
        {!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endif

    @yield('styles')
</head>

<body>
    <header>
        <x-layout.navigation />
    </header>

    <main>
        @yield('content')
    </main>

    <x-layout.footer />

    {{-- External Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    {{-- Original JavaScript (Preserved Exactly) --}}
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Add this to your existing script section
        document.addEventListener('DOMContentLoaded', function() {
            // Get all sections
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.navbar .nav-link');

            function setActiveLink() {
                let currentSection = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= sectionTop - 100) {
                        currentSection = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', setActiveLink);

            // Set active on page load
            setActiveLink();
        });
        // Add this to your existing script section
        document.addEventListener('DOMContentLoaded', function() {
            // Counter animation
            const counters = document.querySelectorAll('.stats-counter');

            counters.forEach(counter => {
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

                        // Add the % sign to the first counter (client satisfaction)
                        if (counter.getAttribute('data-target') === '95') {
                            counter.textContent += '%';
                        }

                        // Add the + sign to the years of experience
                        if (counter.getAttribute('data-target') === '15') {
                            counter.textContent += '+';
                        }
                    }
                }

                requestAnimationFrame(updateCounter);
            });
        });

        // Add this to your existing script section
        document.addEventListener('DOMContentLoaded', function() {
            // Animate process steps on scroll
            const processSteps = document.querySelectorAll('.process-step');
            const processObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('active');
                        }, index * 200);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            processSteps.forEach(step => {
                processObserver.observe(step);
            });

            // Add CSS for the animation
            const style = document.createElement('style');
            style.textContent = `
        .process-step {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }

        .process-step.active {
            opacity: 1;
            transform: translateY(0);
        }
    `;
            document.head.appendChild(style);
        });
    </script>

    @yield('scripts')
</body>

</html>