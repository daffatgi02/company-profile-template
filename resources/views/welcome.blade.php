@extends('layouts.landing')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-2">
                        <span class="text-primary">Boost Your Business</span>
                    </h1>
                    <h2 class="display-5 fw-bold mb-4">
                        <span class="highlight-text">Through smart, scalable, and future-ready solutions.</span>
                    </h2>
                    {{-- <p class="lead mb-5">We deliver cutting-edge technology solutions to help your business thrive in the
                        digital era. Partner with us to transform your vision into reality.</p> --}}
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-4 me-3">Get Started</a>
                        <a href="#services" class="btn btn-outline-primary btn-lg rounded-pill px-4">Explore Services</a>
                    </div>

                    <!-- Stats Counter -->
                    <div class="row mt-5 stats-container">
                        <div class="col-4">
                            <div class="d-flex flex-column">
                                <div class="stats-counter" data-target="95">0</div>
                                <div class="stats-text">Client Satisfaction</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column">
                                <div class="stats-counter" data-target="120">0</div>
                                <div class="stats-text">Projects Completed</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column">
                                <div class="stats-counter" data-target="15">0</div>
                                <div class="stats-text">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative" data-aos="fade-left" data-aos-delay="300">
                    <div class="hero-image-wrapper">
                        <div class="hero-shape1"></div>
                        <div class="hero-shape2"></div>
                        <img src="https://images.unsplash.com/photo-1534307671554-9a6d81f4d629?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Digital Transformation" class="img-fluid hero-image rounded-4">
                        <div class="floating-card">
                            <div class="card-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="card-content">
                                <h5>Boost Your Business</h5>
                                <p>Increase efficiency by 75%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 my-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Our Features</h2>
                <p class="text-muted">Discover what makes our services stand out from the competition</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card feature-card h-100 p-4">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-rocket fa-2x text-primary"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Fast Performance</h4>
                            <p class="card-text text-muted">Our solutions are optimized for speed and efficiency, ensuring
                                your systems run smoothly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card feature-card h-100 p-4">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-shield-alt fa-2x text-primary"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Robust Security</h4>
                            <p class="card-text text-muted">We implement the latest security protocols to keep your data
                                and
                                systems protected.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card feature-card h-100 p-4">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-sync-alt fa-2x text-primary"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Continuous Support</h4>
                            <p class="card-text text-muted">Our team is always ready to assist you with any issues or
                                questions you might have.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="About Us" class="img-fluid about-img">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <h2 class="fw-bold mb-4">About Santek.id</h2>
                    <p class="lead mb-4">PT Sistem Andalan Nusantara Teknologi</p>
                    <p class="text-muted mb-4">Founded in 2025, Santek.id has quickly grown to become one of the leading
                        technology companies in Indonesia. Our mission is to help businesses transform and thrive in the
                        digital era through cutting-edge solutions and exceptional service.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Professional Team</h5>
                                    <p class="text-muted mb-0">Experts in their fields</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Quality Assurance</h5>
                                    <p class="text-muted mb-0">Rigorous testing process</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Innovative Solutions</h5>
                                    <p class="text-muted mb-0">Always ahead of the curve</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Customer Focus</h5>
                                    <p class="text-muted mb-0">Your success is our priority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <!-- Services Section -->
    <section id="services" class="services py-5 my-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-6 mx-auto">
                    <span class="badge bg-primary-subtle text-primary mb-2">What We Offer</span>
                    <h2 class="fw-bold display-5 mb-3">Our Services</h2>
                    <p class="text-muted">We deliver exceptional digital solutions tailored to your business needs</p>
                </div>
            </div>

            <!-- Services Cards -->
            <div class="row g-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-4">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3 class="card-title h4 mb-3">Web Development</h3>
                            <p class="card-text mb-4">Custom websites and web applications built with the latest
                                technologies to meet your unique business requirements.</p>
                            <div class="service-features">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Responsive Design</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>SEO Optimization</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Performance Tuning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-4">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3 class="card-title h4 mb-3">Mobile App Development</h3>
                            <p class="card-text mb-4">Native and cross-platform mobile applications that provide seamless
                                experiences across all devices.</p>
                            <div class="service-features">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>iOS & Android Support</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Offline Functionality</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Push Notifications</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-4">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3 class="card-title h4 mb-3">UI/UX Design</h3>
                            <p class="card-text mb-4">Intuitive and engaging user interfaces that enhance user experience
                                and drive conversion rates.</p>
                            <div class="service-features">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>User Research</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Wireframing & Prototyping</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Usability Testing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Service -->
            <div class="row align-items-center featured-service mt-5" data-aos="fade-up">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Custom Software Development" class="img-fluid rounded-4 featured-img">
                        <div class="service-badge">
                            <span>Most Popular</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <span class="badge bg-primary-subtle text-primary mb-2">Featured Service</span>
                    <h3 class="fw-bold mb-4">Custom Software Development</h3>
                    <p class="lead mb-4">Tailored software solutions designed to optimize your business processes and drive
                        growth.</p>
                    <p class="text-muted mb-4">Our expert team develops scalable, secure, and high-performance software
                        that adapts to your evolving business needs. We follow agile methodologies to ensure transparent
                        communication and timely delivery.</p>

                    <div class="row mt-4 mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-server"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 h6">Cloud Integration</h5>
                                    <p class="text-muted mb-0 small">AWS, Azure, Google Cloud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 h6">Security First</h5>
                                    <p class="text-muted mb-0 small">OWASP compliant code</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 h6">Analytics Integration</h5>
                                    <p class="text-muted mb-0 small">Data-driven decisions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 h6">API Development</h5>
                                    <p class="text-muted mb-0 small">Seamless integrations</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="btn btn-primary rounded-pill px-4 py-2">Request a Quote</a>
                </div>
            </div>

            <!-- Process Steps -->
            <div class="row mt-5 pt-5" data-aos="fade-up">
                <div class="col-12 text-center mb-5">
                    <h3 class="fw-bold">Our Development Process</h3>
                    <p class="text-muted">How we transform your ideas into reality</p>
                </div>

                <div class="col-12">
                    <div class="process-container">
                        <div class="process-step">
                            <div class="process-icon">
                                <span>1</span>
                            </div>
                            <h4>Discovery</h4>
                            <p>We analyze your requirements and business objectives</p>
                        </div>

                        <div class="process-step">
                            <div class="process-icon">
                                <span>2</span>
                            </div>
                            <h4>Planning</h4>
                            <p>Detailed project scope, timeline and architecture design</p>
                        </div>

                        <div class="process-step">
                            <div class="process-icon">
                                <span>3</span>
                            </div>
                            <h4>Development</h4>
                            <p>Agile development with regular sprints and reviews</p>
                        </div>

                        <div class="process-step">
                            <div class="process-icon">
                                <span>4</span>
                            </div>
                            <h4>Testing</h4>
                            <p>Rigorous QA to ensure quality and performance</p>
                        </div>

                        <div class="process-step">
                            <div class="process-icon">
                                <span>5</span>
                            </div>
                            <h4>Deployment</h4>
                            <p>Smooth launch with complete technical documentation</p>
                        </div>

                        <div class="process-line"></div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="row mt-5 pt-4">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="cta-card text-center" data-aos="fade-up">
                        <h3 class="fw-bold mb-4">Ready to start your project?</h3>
                        <p class="mb-4">Let's discuss how our services can help your business grow</p>
                        <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-5">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">What Our Clients Say</h2>
                <p class="text-muted">Don't just take our word for it - hear what our clients have to say</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
                                class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">John Doe</h5>
                                <p class="text-muted mb-0">CEO, TechCorp</p>
                            </div>
                        </div>
                        <p class="mb-0">Working with Santek.id has been a game-changer for our business. Their team
                            delivered a solution that exceeded our expectations and helped us streamline our operations.</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client"
                                class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Jane Smith</h5>
                                <p class="text-muted mb-0">Marketing Director, BrandCo</p>
                            </div>
                        </div>
                        <p class="mb-0">The team at Santek.id is incredibly professional and knowledgeable. They took the
                            time to understand our needs and delivered a website that perfectly represents our brand.</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="Client"
                                class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">David Johnson</h5>
                                <p class="text-muted mb-0">CTO, InnovateTech</p>
                            </div>
                        </div>
                        <p class="mb-0">Santek.id's mobile app development team is top-notch. They developed an app that
                            has received excellent feedback from our users and has significantly increased our customer
                            engagement.</p>
                        <div class="mt-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start" data-aos="fade-right">
                    <h2 class="fw-bold mb-3">Ready to transform your business?</h2>
                    <p class="lead mb-0">Contact us today to learn how our solutions can help you achieve your goals.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="#contact" class="btn btn-light text-primary fw-bold px-4 py-2 rounded-pill">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Contact Us</h2>
                <p class="text-muted">Reach out to us for any inquiries or to discuss your project</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your email">
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="p-4 bg-light rounded-3 h-100">
                        <h4 class="fw-bold mb-4">Get In Touch</h4>
                        <p class="text-muted mb-4">Have questions or need more information? Feel free to contact us using
                            the form or through any of the following methods.</p>
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Our Location</h5>
                                <p class="text-muted mb-0">123 Business Street, Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Email Address</h5>
                                <p class="text-muted mb-0">info@santek.id</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone Number</h5>
                                <p class="text-muted mb-0">+62 123 4567 890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endsection
