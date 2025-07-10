<footer class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <h4 class="text-white mb-4">{{ config('company.name') }}</h4>
                <p class="text-white-50">Providing innovative solutions for all your needs with cutting-edge technology and professional service.</p>
                <div class="d-flex mt-4">
                    @foreach(config('company.social') as $platform => $url)
                        <a href="{{ $url }}" class="social-icon" aria-label="Visit our {{ ucfirst($platform) }} page">
                            <i class="fab fa-{{ $platform === 'twitter' ? 'twitter' : $platform }}-{{ $platform === 'linkedin' ? 'in' : ($platform === 'facebook' ? 'f' : '') }} text-white"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2 footer-links">
                <h5 class="text-white mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#home" aria-label="Go to Home section">Home</a></li>
                    <li><a href="#about" aria-label="Go to About section">About</a></li>
                    <li><a href="#services" aria-label="Go to Services section">Services</a></li>
                    <li><a href="#contact" aria-label="Go to Contact section">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 footer-links">
                <h5 class="text-white mb-4">Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#services" aria-label="Learn about Web Development">Web Development</a></li>
                    <li><a href="#services" aria-label="Learn about App Development">App Development</a></li>
                    <li><a href="#services" aria-label="Learn about UI/UX Design">UI/UX Design</a></li>
                    <li><a href="#services" aria-label="Learn about Consulting">Consulting</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="text-white mb-4">Contact Info</h5>
                <address class="list-unstyled text-white-50">
                    <div class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt me-3 mt-1" aria-hidden="true"></i>
                        <span>{{ config('company.contact.address') }}</span>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope me-3 mt-1" aria-hidden="true"></i>
                        <a href="mailto:{{ config('company.contact.email') }}" class="text-white-50">{{ config('company.contact.email') }}</a>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-phone-alt me-3 mt-1" aria-hidden="true"></i>
                        <a href="tel:{{ config('company.contact.phone') }}" class="text-white-50">{{ config('company.contact.phone') }}</a>
                    </div>
                </address>
            </div>
        </div>
        <hr class="mt-4 bg-white-50">
        <div class="text-center text-white-50 mt-4">
            <p>&copy; {{ date('Y') }} {{ config('company.name') }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>