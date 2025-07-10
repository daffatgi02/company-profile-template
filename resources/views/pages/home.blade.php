@extends('layouts.app')

@section('content')
    <x-sections.hero />
    <x-sections.features />
    <x-sections.about />
    <x-sections.services />
    <x-sections.testimonials />
    <x-sections.cta />
    <x-sections.contact />
@endsection

@section('scripts')
    <script>
        // Add smooth scrolling to all links (Preserved from original)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endsection