@extends('layouts.app')

@section('title', 'All Articles - Articles by Santanu')

@section('content')
    <section
        class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 
           dark:from-gray-800 dark:via-gray-900 dark:to-black
           py-16 sm:py-20 lg:py-28 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1
                    class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold 
                       text-gray-900 dark:text-white mb-6 leading-tight transition-colors duration-300">
                    Explore My Articles
                </h1>
                <p
                    class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 
                       leading-relaxed transition-colors duration-300">
                    Discover insightful stories, expert advice, and inspiring content across various topics
                </p>
            </div>
        </div>
    </section>
    <div id="complete-articles">
        <complete-article-catalog />
    </div>
@endsection
