<?php

namespace App\Services;

class SeoService
{
    public static function generateMeta(array $data = []): array
    {
        $defaults = [
            'title' => config('seo.default_title'),
            'description' => config('seo.default_description'),
            'keywords' => config('seo.default_keywords'),
            'image' => config('seo.default_image'),
            'url' => request()->url(),
            'type' => 'website',
            'twitter_card' => 'summary_large_image',
        ];

        $meta = array_merge($defaults, $data);
        
        // Add title suffix if not already present
        if (!str_contains($meta['title'], config('seo.title_suffix'))) {
            $meta['title'] .= config('seo.title_suffix');
        }

        return $meta;
    }

    public static function generateJsonLd(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => config('company.name'),
            'url' => config('app.url'),
            'logo' => config('app.url') . '/images/logo.png',
            'foundingDate' => config('company.founded_year'),
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => config('company.contact.phone'),
                'contactType' => 'customer service',
                'email' => config('company.contact.email'),
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => config('company.contact.address'),
                'addressCountry' => 'ID',
            ],
            'sameAs' => array_values(config('company.social')),
        ];
    }
}