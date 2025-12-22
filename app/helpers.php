<?php

use Illuminate\Support\Arr;

if (!function_exists('get_app_domains')) {
    function get_app_domains(?string $type = null)
    {
        $domains = match (config('app.env')) {
            'local' => [
                'portfolio' => 'dev.santanupradhan.in',
                'articles' => 'dev.articles.santanupradhan.in'
            ],
            'production' => [
                'portfolio' => 'santanupradhan.in',
                'articles' => 'articles.santanupradhan.in'
            ],
            'staging' => [
                'portfolio' => 'staging.santanupradhan.in',
                'articles' => 'staging.articles.santanupradhan.in'
            ]
        };
        return $type ? Arr::get($domains, $type, null) : $domains;
    }
}

if (!function_exists('get_header_title')) {
    function get_header_title(): string
    {
        $host = request()->getHost();
        $domains = get_app_domains();
        return match ($host) {
            $domains['portfolio'] => 'My Portfolio',
            $domains['articles'] => 'Articles By Santanu'
        };
    }
}

if (!function_exists('get_header_link')) {
    function get_header_link(): string
    {
        $host = request()->getHost();
        $domains = get_app_domains();
        return match ($host) {
            $domains['portfolio'] => route('portfolio.me'),
            $domains['articles'] => route('articles.home')
        };
    }
}

if (!function_exists('get_domain_type')) {
    function get_domain_type(): string
    {
        $host = request()->getHost();
        $domains = get_app_domains();
        return match ($host) {
            $domains['portfolio'] => 'portfolio',
            $domains['articles'] => 'articles'
        };
    }
}
