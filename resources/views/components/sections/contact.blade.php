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
                                id="name" name="name" value="{{ old('name') }}" 
                                placeholder="Your name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                id="email" name="email" value="{{ old('email') }}" 
                                placeholder="Your email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                id="subject" name="subject" value="{{ old('subject') }}" 
                                placeholder="Subject" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                id="message" name="message" rows="5" 
                                placeholder="Your message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                            <i class="fas fa-map-marker-alt fa-2x" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Our Location</h5>
                            <p class="text-muted mb-0">{{ config('company.contact.address', '123 Business Street, Jakarta, Indonesia') }}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-3 text-primary">
                            <i class="fas fa-envelope fa-2x" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email Address</h5>
                            <p class="text-muted mb-0">
                                <a href="mailto:{{ config('company.contact.email', 'info@NAMA_PERUSAHAAN-MU.id') }}">{{ config('company.contact.email', 'info@NAMA_PERUSAHAAN-MU.id') }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-3 text-primary">
                            <i class="fas fa-phone-alt fa-2x" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone Number</h5>
                            <p class="text-muted mb-0">
                                <a href="tel:{{ config('company.contact.phone', '+62 123 4567 890') }}">{{ config('company.contact.phone', '+62 123 4567 890') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>