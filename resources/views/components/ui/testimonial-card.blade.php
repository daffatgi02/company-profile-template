<div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="testimonial-card h-100">
        <div class="d-flex align-items-center mb-4">
            <img src="{{ $image }}" alt="Portrait of {{ $name }}, {{ $position }} at {{ $company }}" 
                class="testimonial-img me-3" loading="lazy">
            <div>
                <h4 class="mb-0 h5">{{ $name }}</h4>
                <p class="text-muted mb-0">{{ $position }}, {{ $company }}</p>
            </div>
        </div>
        <blockquote class="mb-0">{{ $testimonial }}</blockquote>
        <div class="mt-3 text-warning" role="img" aria-label="Rating: {{ $rating }} out of 5 stars">
            @for($i = 1; $i <= 5; $i++)
                @if($i <= $rating)
                    <i class="fas fa-star" aria-hidden="true"></i>
                @elseif($i - 0.5 <= $rating)
                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                @else
                    <i class="far fa-star" aria-hidden="true"></i>
                @endif
            @endfor
        </div>
    </div>
</div>