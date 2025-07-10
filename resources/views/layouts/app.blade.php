<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $seoData['title'] ?? config('seo.default_title') }}</title>
    <meta name="description" content="{{ $seoData['description'] ?? config('seo.default_description') }}">
    <meta name="keywords" content="{{ $seoData['keywords'] ?? config('seo.default_keywords') }}">
    <link rel="canonical" href="{{ $seoData['url'] ?? request()->url() }}">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $seoData['title'] ?? config('seo.default_title') }}">
    <meta property="og:description" content="{{ $seoData['description'] ?? config('seo.default_description') }}">
    <meta property="og:image" content="{{ asset($seoData['image'] ?? config('seo.default_image')) }}">
    <meta property="og:url" content="{{ $seoData['url'] ?? request()->url() }}">
    <meta property="og:type" content="{{ $seoData['type'] ?? 'website' }}">
    <meta property="og:site_name" content="{{ config('company.name') }}">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="{{ $seoData['twitter_card'] ?? 'summary_large_image' }}">
    <meta name="twitter:site" content="{{ config('seo.twitter_site') }}">
    <meta name="twitter:title" content="{{ $seoData['title'] ?? config('seo.default_title') }}">
    <meta name="twitter:description" content="{{ $seoData['description'] ?? config('seo.default_description') }}">
    <meta name="twitter:image" content="{{ asset($seoData['image'] ?? config('seo.default_image')) }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Preconnect for Performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    {{-- External CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- JSON-LD Structured Data --}}
    @if(isset($jsonLd))
    <script type="application/ld+json">
        {!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endif

    @stack('styles')
</head>
<body>
    <header>
        <x-layout.navigation />
    </header>

    <main>
        @yield('content')
    </main>

    <x-layout.footer />

    {{-- External Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    @stack('scripts')
</body>
</html>