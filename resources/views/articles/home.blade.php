@extends('layouts.app')

@section('title', 'Explore my exclusive articles')

@section('content')
    <div x-show="currentPage === 'blog'">
        <section id="lets-get-started"
            class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 dark:from-gray-800 dark:via-gray-900 dark:to-black py-16 sm:py-20 lg:py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h1
                        class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        Stories That Inspire & Inform</h1>
                    <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">Discover
                        thoughtful articles on design, technology, lifestyle, and everything in between. Written by
                        passionate creators for curious minds.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button
                            @@click="currentPage = 'blog'; currentSection = 'world-of-articles'; setTimeout(() => document.getElementById('world-of-articles').scrollIntoView({behavior: 'smooth'}), 100)"
                            class="px-8 py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors">Explore
                            Articles</button>
                        <button
                            @@click="currentSection = 'world-of-articles'; window.location = '{{ route('portfolio.me') }}'"
                            class="px-8 py-3 bg-white dark:bg-gray-800 text-indigo-600 dark:text-indigo-400 font-medium rounded-lg border-2 border-indigo-600 dark:border-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-700 transition-colors">My
                            Portfolio</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured-article" class="py-12 sm:py-16 lg:py-20 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white">
                        Featured Story
                    </h2>
                </div>
                <div @@click="currentPage = 'post'"
                    class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center cursor-pointer group">
                    <div class="relative overflow-hidden rounded-2xl h-64 sm:h-80 lg:h-96">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1200" alt="Featured"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 px-3 py-1 bg-indigo-600 text-white text-xs font-medium rounded-full">
                            Featured</div>
                    </div>
                    <div class="space-y-4 sm:space-y-6">
                        <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                            <span
                                class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 rounded-full font-medium">Design</span>
                            <span>Mar 15, 2024</span>
                            <span>8 min read</span>
                        </div>
                        <h3
                            class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                            The Future of Web Design in 2024</h3>
                        <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 leading-relaxed">Exploring
                            emerging trends and technologies shaping the digital landscape. From AI-powered design tools
                            to immersive 3D experiences, discover what's next in web design.</p>
                        <div class="flex flex-wrap gap-4 pt-2">
                            <span
                                class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">#Web
                                Design</span>
                            <span
                                class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">#Trends</span>
                            <span
                                class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">#UI/UX</span>
                            <span
                                class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">#Technology</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="world-of-articles" class="py-12 sm:py-16 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-8">
                <div class="text-center">
                    <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        Explore Featured Catalog
                    </h2>
                    <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300">
                        Find articles that match your interests
                    </p>
                </div>
                <span class="text-center">
                    <p
                        class="explore-wrapper text-base sm:text-lg text-gray-600 dark:text-gray-200 font-bold pt-6 text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 hover:dark:text-indigo-500">
                        <span onclick="window.location = '{{ route('articles.index') }}'">Explore More</span>
                        <span class="arrow font-bold"></span>
                    </p>
                </span>
            </div>
            <featured-article-catalog />
        </section>

        <section id="unleash-newsletter"
            class="py-16 sm:py-20 bg-gradient-to-br from-indigo-600 to-purple-600 dark:from-indigo-800 dark:to-purple-800">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 bg-white/20 backdrop-blur-sm rounded-full mb-6">
                    <i class="fas fa-envelope text-white text-xl sm:text-2xl"></i>
                </div>
                <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-4">Never Miss an Article
                </h2>
                <p class="text-base sm:text-lg text-indigo-100 dark:text-indigo-200 mb-8">Get the latest articles
                    delivered straight to your inbox every week</p>
                <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email"
                        class="flex-1 px-4 sm:px-6 py-3 sm:py-4 rounded-lg text-gray-900 dark:text-white dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white">
                    <button
                        class="px-6 sm:px-8 py-3 sm:py-4 bg-white dark:bg-gray-800 text-indigo-600 dark:text-indigo-400 font-medium rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors whitespace-nowrap">Subscribe</button>
                </div>
            </div>
        </section>

        @include('articles.includes.auth-modal')
    </div>
@endsection
