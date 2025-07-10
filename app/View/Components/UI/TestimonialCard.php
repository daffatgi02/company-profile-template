<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class TestimonialCard extends Component
{
    public function __construct(
        public string $name,
        public string $position,
        public string $company,
        public string $image,
        public string $testimonial,
        public float $rating = 5.0,
        public string $delay = '0'
    ) {}

    public function render()
    {
        return view('components.ui.testimonial-card');
    }
}