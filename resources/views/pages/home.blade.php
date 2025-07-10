@extends('layouts.app')

@section('content')
    <x-layout.hero />

    {{-- Features Section --}}
    <section id="features" class="py-5 my-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Our Features</h2>
                <p class="text-muted">Discover what makes our services stand out from the competition</p>
            </div>
            <div class="row g-4">
                <x-ui.feature-card icon="fas fa-rocket" title="Fast Performance"
                    description="Our solutions are optimized for speed and efficiency, ensuring your systems run smoothly."
                    delay="100" />

                <x-ui.feature-card icon="fas fa-shield-alt" title="Robust Security"
                    description="We implement the latest security protocols to keep your data and systems protected."
                    delay="200" />

                <x-ui.feature-card icon="fas fa-sync-alt" title="Continuous Support"
                    description="Our team is always ready to assist you with any issues or questions you might have."
                    delay="300" />
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="Team collaboration and business meeting" class="img-fluid about-img" loading="lazy">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <h2 class="fw-bold mb-4">About {{ config('company.name') }}</h2>
                    <p class="lead mb-4">PT Sistem Andalan Nusantara Teknologi</p>
                    <p class="text-muted mb-4">Founded in {{ config('company.founded_year') }}, {{ config('company.name') }}
                        has quickly grown to become one of the leading technology companies in Indonesia. Our mission is to
                        help businesses transform and thrive in the digital era through cutting-edge solutions and
                        exceptional service.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="mb-1 h5">Professional Team</h3>
                                    <p class="text-muted mb-0">Experts in their fields</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="mb-1 h5">Quality Assurance</h3>
                                    <p class="text-muted mb-0">Rigorous testing process</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="mb-1 h5">Innovative Solutions</h3>
                                    <p class="text-muted mb-0">Always ahead of the curve</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="mb-1 h5">Customer Focus</h3>
                                    <p class="text-muted mb-0">Your success is our priority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="services" class="services py-5 my-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-6 mx-auto">
                    <span class="badge bg-primary-subtle text-primary mb-2">What We Offer</span>
                    <h2 class="fw-bold display-5 mb-3">Our Services</h2>
                    <p class="text-muted">We deliver exceptional digital solutions tailored to your business needs</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <x-ui.service-card icon="fas fa-laptop-code" title="Web Development"
                    description="Custom websites and web applications built with the latest technologies to meet your unique business requirements."
                    :features="['Responsive Design', 'SEO Optimization', 'Performance Tuning']" delay="100" />

                <x-ui.service-card icon="fas fa-mobile-alt" title="Mobile App Development"
                    description="Native and cross-platform mobile applications that provide seamless experiences across all devices."
                    :features="['iOS & Android Support', 'Offline Functionality', 'Push Notifications']" delay="200" />

                <x-ui.service-card icon="fas fa-palette" title="UI/UX Design"
                    description="Intuitive and engaging user interfaces that enhance user experience and drive conversion rates."
                    :features="['User Research', 'Wireframing & Prototyping', 'Usability Testing']" delay="300" />
            </div>

            {{-- Featured Service --}}
            <div class="row align-items-center featured-service mt-5" data-aos="fade-up">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Custom software development workspace with multiple monitors"
                            class="img-fluid rounded-4 featured-img" loading="lazy">
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
                    <p class="text-muted mb-4">Our expert team develops scalable, secure, and high-performance software that
                        adapts to your evolving business needs. We follow agile methodologies to ensure transparent
                        communication and timely delivery.</p>

                    <div class="row mt-4 mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-server" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1 h6">Cloud Integration</h4>
                                    <p class="text-muted mb-0 small">AWS, Azure, Google Cloud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1 h6">Security First</h4>
                                    <p class="text-muted mb-0 small">OWASP compliant code</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-chart-line" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1 h6">Analytics Integration</h4>
                                    <p class="text-muted mb-0 small">Data-driven decisions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-sync-alt" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1 h6">API Development</h4>
                                    <p class="text-muted mb-0 small">Seamless integrations</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="btn btn-primary rounded-pill px-4 py-2"
                        aria-label="Request a quote for custom software development">Request a Quote</a>
                </div>
            </div>

            {{-- Process Steps --}}
            <div class="row mt-5 pt-5" data-aos="fade-up">
                <div class="col-12 text-center mb-5">
                    <h3 class="fw-bold">Our Development Process</h3>
                    <p class="text-muted">How we transform your ideas into reality</p>
                </div>

                <div class="col-12">
                    <div class="process-container">
                        @php
                            $processSteps = [
                                [
                                    'number' => '1',
                                    'title' => 'Discovery',
                                    'description' => 'We analyze your requirements and business objectives',
                                ],
                                [
                                    'number' => '2',
                                    'title' => 'Planning',
                                    'description' => 'Detailed project scope, timeline and architecture design',
                                ],
                                [
                                    'number' => '3',
                                    'title' => 'Development',
                                    'description' => 'Agile development with regular sprints and reviews',
                                ],
                                [
                                    'number' => '4',
                                    'title' => 'Testing',
                                    'description' => 'Rigorous QA to ensure quality and performance',
                                ],
                                [
                                    'number' => '5',
                                    'title' => 'Deployment',
                                    'description' => 'Smooth launch with complete technical documentation',
                                ],
                            ];
                        @endphp

                        @foreach ($processSteps as $step)
                            <div class="process-step">
                                <div class="process-icon">
                                    <span>{{ $step['number'] }}</span>
                                </div>
                                <h4>{{ $step['title'] }}</h4>
                                <p>{{ $step['description'] }}</p>
                            </div>
                        @endforeach

                        <div class="process-line"></div>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="row mt-5 pt-4">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="cta-card text-center" data-aos="fade-up">
                        <h3 class="fw-bold mb-4">Ready to start your project?</h3>
                        <p class="mb-4">Let's discuss how our services can help your business grow</p>
                        <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-5"
                            aria-label="Contact us to start your project">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section id="testimonials" class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">What Our Clients Say</h2>
                <p class="text-muted">Don't just take our word for it - hear what our clients have to say</p>
            </div>
            <div class="row g-4">
                <x-ui.testimonial-card name="John Doe" position="CEO" company="TechCorp"
                    image="https://randomuser.me/api/portraits/men/32.jpg"
                    testimonial="Working with NAMA_PERUSAHAAN-MU has been a game-changer for our business. Their team delivered a solution that exceeded our expectations and helped us streamline our operations."
                    :rating="5.0" delay="100" />

                <x-ui.testimonial-card name="Jane Smith" position="Marketing Director" company="BrandCo"
                    image="https://randomuser.me/api/portraits/women/44.jpg"
                    testimonial="The team at NAMA_PERUSAHAAN-MU is incredibly professional and knowledgeable. They took the time to understand our needs and delivered a website that perfectly represents our brand."
                    :rating="5.0" delay="200" />

                <x-ui.testimonial-card name="David Johnson" position="CTO" company="InnovateTech"
                    image="https://randomuser.me/api/portraits/men/62.jpg"
                    testimonial="NAMA_PERUSAHAAN-MU's mobile app development team is top-notch. They developed an app that has received excellent feedback from our users and has significantly increased our customer engagement."
                    :rating="4.5" delay="300" />
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start" data-aos="fade-right">
                    <h2 class="fw-bold mb-3">Ready to transform your business?</h2>
                    <p class="lead mb-0">Contact us today to learn how our solutions can help you achieve your goals.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="#contact" class="btn btn-light text-primary fw-bold px-4 py-2 rounded-pill"
                        aria-label="Get in touch with our team">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Contact Us</h2>
                <p class="text-muted">Reach out to us for any inquiries or to discuss your project</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <form action="{{ route('contact.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" placeholder="Your name"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" placeholder="Your email"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject"
                                    required>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                    placeholder="Your message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="p-4 bg-light rounded-3 h-100">
                        <h3 class="fw-bold mb-4">Get In Touch</h3>
                        <p class="text-muted mb-4">Have questions or need more information? Feel free to contact us using
                            the form or through any of the following methods.</p>
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-map-marker-alt fa-2x" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4 class="mb-1 h5">Our Location</h4>
                                <p class="text-muted mb-0">{{ config('company.contact.address') }}</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-envelope fa-2x" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4 class="mb-1 h5">Email Address</h4>
                                <p class="text-muted mb-0">
                                    <a
                                        href="mailto:{{ config('company.contact.email') }}">{{ config('company.contact.email') }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-phone-alt fa-2x" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4 class="mb-1 h5">Phone Number</h4>
                                <p class="text-muted mb-0">
                                    <a
                                        href="tel:{{ config('company.contact.phone') }}">{{ config('company.contact.phone') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
