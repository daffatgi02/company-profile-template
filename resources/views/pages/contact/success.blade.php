@extends('layouts.app')

@section('content')
<section class="py-5 my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="p-5 bg-light rounded-4">
                    <div class="mb-4">
                        <i class="fas fa-check-circle fa-5x text-success"></i>
                    </div>
                    <h1 class="fw-bold mb-4">Thank You!</h1>
                    <p class="lead mb-4">
                        {{ session('success', 'Thank you for your message! We will get back to you soon.') }}
                    </p>
                    <p class="text-muted mb-4">
                        Our team typically responds within 24 hours during business days.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4">
                            <i class="fas fa-home me-2"></i>Back to Home
                        </a>
                        <a href="#contact" class="btn btn-outline-primary rounded-pill px-4">
                            Send Another Message
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection