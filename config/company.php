<?php

return [
    'name' => env('COMPANY_NAME', 'NAMA_PERUSAHAAN-MU'),
    'domain' => env('COMPANY_DOMAIN', 'NAMA_PERUSAHAAN-MU.id'),
    'tagline' => env('COMPANY_TAGLINE', 'Smart Solutions for Your Business'),
    'founded_year' => env('COMPANY_FOUNDED', '2025'),
    
    'contact' => [
        'email' => env('COMPANY_EMAIL', 'info@NAMA_PERUSAHAAN-MU.id'),
        'phone' => env('COMPANY_PHONE', '+62 123 4567 890'),
        'address' => env('COMPANY_ADDRESS', '123 Business Street, Jakarta, Indonesia'),
    ],
    
    'social' => [
        'facebook' => env('SOCIAL_FACEBOOK', '#'),
        'twitter' => env('SOCIAL_TWITTER', '#'),
        'instagram' => env('SOCIAL_INSTAGRAM', '#'),
        'linkedin' => env('SOCIAL_LINKEDIN', '#'),
    ],
    
    'stats' => [
        'satisfaction' => 95,
        'projects_completed' => 120,
        'years_experience' => 15,
    ],
];