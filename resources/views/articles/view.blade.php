@extends('layouts.app')

@section('title', 'View — Write your blog')

@section('content')
    <div>
        <article class="bg-white dark:bg-gray-900">
            <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1600" alt="Post Hero"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <button @@click="currentPage = 'home'; window.location = '{{ route('articles.home') }}'"
                    class="absolute top-4 left-4 sm:top-6 sm:left-6 w-10 h-10 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-full flex items-center justify-center text-gray-900 dark:text-white hover:bg-white dark:hover:bg-gray-800 transition-colors">
                    <i class="fas fa-arrow-left"></i>
                </button>
            </div>

            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
                <div
                    class="flex flex-wrap items-center gap-3 sm:gap-4 mb-6 sm:mb-8 text-sm text-gray-500 dark:text-gray-400">
                    <span
                        class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 rounded-full font-medium">Design</span>
                    <span>Mar 15, 2024</span>
                    <span>•</span>
                    <span>8 min read</span>
                </div>

                <h1
                    class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6 sm:mb-8 leading-tight">
                    The Future of Web Design in 2024</h1>

                <div class="prose prose-sm sm:prose-base lg:prose-lg max-w-none dark:prose-invert">
                    <p class="text-lg sm:text-xl text-gray-700 dark:text-gray-300 leading-relaxed mb-6">The landscape
                        of
                        web design is evolving at an unprecedented pace. As we navigate through 2024, new technologies,
                        user expectations, and design philosophies are reshaping how we create digital experiences.</p>

                    <h2
                        class="font-serif text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mt-10 sm:mt-12 mb-4 sm:mb-6">
                        The Rise of AI-Powered Design</h2>
                    <p class="text-base sm:text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">Artificial
                        intelligence is no longer a futuristic concept—it's here, and it's transforming the way
                        designers work. From automated layout suggestions to intelligent color palette generation, AI
                        tools are becoming indispensable companions in the design process.</p>

                    <p class="text-base sm:text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">However, the
                        key is not to replace human creativity but to augment it. The best designs still come from
                        understanding user needs, empathy, and creative problem-solving—qualities that remain uniquely
                        human.</p>

                    <div
                        class="bg-indigo-50 dark:bg-indigo-900/30 border-l-4 border-indigo-600 dark:border-indigo-400 p-4 sm:p-6 my-8 rounded-r-lg">
                        <p class="text-base sm:text-lg text-gray-800 dark:text-gray-200 italic">"Design is not just
                            what
                            it looks like and feels like. Design is how it works." — Steve Jobs</p>
                    </div>

                    <h2
                        class="font-serif text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mt-10 sm:mt-12 mb-4 sm:mb-6">
                        Immersive 3D Experiences</h2>
                    <p class="text-base sm:text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                        Three-dimensional elements are becoming more prevalent in web design. With improved browser
                        capabilities and WebGL technologies, designers can create stunning 3D experiences that were once
                        only possible in native applications.</p>

                    <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=1200" alt="3D Design"
                        class="w-full h-64 sm:h-80 lg:h-96 object-cover rounded-2xl my-8 sm:my-10">

                    <h2
                        class="font-serif text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mt-10 sm:mt-12 mb-4 sm:mb-6">
                        Accessibility First</h2>
                    <p class="text-base sm:text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">Inclusive
                        design is no longer optional—it's essential. Modern web design prioritizes accessibility from
                        the ground up, ensuring that digital experiences are usable by everyone, regardless of their
                        abilities or the devices they use.</p>

                    <ul class="space-y-3 my-6 text-base sm:text-lg text-gray-700 dark:text-gray-300">
                        <li class="flex items-start"><i
                                class="fas fa-check-circle text-indigo-600 dark:text-indigo-400 mt-1 mr-3"></i><span>Semantic
                                HTML for better screen reader support</span></li>
                        <li class="flex items-start"><i
                                class="fas fa-check-circle text-indigo-600 dark:text-indigo-400 mt-1 mr-3"></i><span>High
                                contrast ratios for improved readability</span></li>
                        <li class="flex items-start"><i
                                class="fas fa-check-circle text-indigo-600 dark:text-indigo-400 mt-1 mr-3"></i><span>Keyboard
                                navigation for all interactive elements</span></li>
                        <li class="flex items-start"><i
                                class="fas fa-check-circle text-indigo-600 dark:text-indigo-400 mt-1 mr-3"></i><span>Responsive
                                design that works across all devices</span></li>
                    </ul>

                    <h2
                        class="font-serif text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mt-10 sm:mt-12 mb-4 sm:mb-6">
                        Conclusion</h2>
                    <p class="text-base sm:text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">The future of
                        web design is bright, innovative, and inclusive. As designers, our role is to embrace these new
                        technologies while staying grounded in the fundamental principles of good design: clarity,
                        usability, and empathy for our users.</p>
                </div>

                <div class="flex flex-wrap gap-2 mt-10 sm:mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <span
                        class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">Web
                        Design</span>
                    <span
                        class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">Trends</span>
                    <span
                        class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">UI/UX</span>
                    <span
                        class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full">Technology</span>
                </div>

                <div
                    class="flex flex-col sm:flex-row items-start sm:items-center justify-between mt-8 sm:mt-10 pt-8 border-t border-gray-200 dark:border-gray-700 gap-4">
                    <p class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white">Share this article</p>
                    <div class="flex items-center space-x-3 sm:space-x-4">
                        <button
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                        <button
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-800 dark:bg-gray-600 text-white rounded-full flex items-center justify-center hover:bg-gray-900 dark:hover:bg-gray-500 transition-colors">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
                </div>

                <div id="comment-section">
                    <comment-section />
                </div>
            </div>
        </article>
    </div>
@endsection
