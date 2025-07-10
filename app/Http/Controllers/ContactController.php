<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\SeoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        // Here you would handle the contact form submission
        // For example: send email, store in database, etc.
        
        return redirect()
            ->route('contact.success')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function success(): View
    {
        $seoData = SeoService::generateMeta([
            'title' => 'Thank You - Contact Success',
            'description' => 'Thank you for contacting ' . config('company.name') . '. We will respond to your inquiry as soon as possible.',
        ]);

        return view('pages.contact.success', compact('seoData'));
    }
}