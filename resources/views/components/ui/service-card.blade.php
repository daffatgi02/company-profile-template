<div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="service-card h-100">
        <div class="card-body p-4">
            <div class="service-icon mb-4">
                <i class="{{ $icon }}" aria-hidden="true"></i>
            </div>
            <h3 class="card-title h4 mb-3">{{ $title }}</h3>
            <p class="card-text mb-4">{{ $description }}</p>
            @if(count($features) > 0)
            <div class="service-features">
                @foreach($features as $feature)
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-check-circle text-primary me-2" aria-hidden="true"></i>
                    <span>{{ $feature }}</span>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>