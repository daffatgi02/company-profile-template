<?php

return [
    'default_title' => getenv('SEO_DEFAULT_TITLE') ?: 'NAMA_PERUSAHAAN-MU - Smart Solutions for Your Business',
    'title_suffix' => getenv('SEO_TITLE_SUFFIX') ?: ' | NAMA_PERUSAHAAN-MU',
    'default_description' => getenv('SEO_DEFAULT_DESCRIPTION') ?: 'Professional technology solutions and digital services to help your business thrive in the digital era.',
    'default_keywords' => getenv('SEO_DEFAULT_KEYWORDS') ?: 'web development, mobile apps, UI/UX design, software development, technology solutions',
    'default_image' => getenv('SEO_DEFAULT_IMAGE') ?: '/images/og-default.jpg',
    'twitter_site' => getenv('SEO_TWITTER_SITE') ?: '@NAMA_PERUSAHAAN-MU',
    'facebook_app_id' => getenv('SEO_FACEBOOK_APP_ID') ?: '',
];