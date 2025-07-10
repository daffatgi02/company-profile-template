<?php

namespace App\Http\Controllers;

use App\Services\SeoService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $seoData = SeoService::generateMeta([
            'title' => 'Home - Smart Solutions for Your Business',
            'description' => 'Transform your business with cutting-edge technology solutions. Web development, mobile apps, and digital services by ' . config('company.name', 'NAMA_PERUSAHAAN-MU'),
            'keywords' => 'home, technology solutions, web development, mobile apps, digital transformation',
        ]);

        $jsonLd = SeoService::generateJsonLd();

        return view('pages.home', compact('seoData', 'jsonLd'));
    }
}