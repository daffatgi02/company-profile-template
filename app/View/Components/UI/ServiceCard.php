<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class ServiceCard extends Component
{
    public function __construct(
        public string $icon,
        public string $title,
        public string $description,
        public array $features = [],
        public string $delay = '0'
    ) {}

    public function render()
    {
        return view('components.ui.service-card');
    }
}