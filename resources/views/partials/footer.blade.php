@if (!request()->routeIs('articles.composer'))
    <footer class="bg-gray-900 dark:bg-black text-white py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if (!request()->routeIs('portfolio.me'))
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-12 mb-8 sm:mb-12">
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <i
                                class="header-icon fas fa-feather-alt text-stone-900 dark:text-white text-sm sm:text-base"></i>
                            <span class="font-serif text-xl font-bold">Articles By Santanu</span>
                        </div>
                        <p class="text-sm text-gray-400 dark:text-gray-500 leading-relaxed">A modern platform for writers
                            and readers to connect through meaningful stories.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Explore</h4>
                        <ul class="space-y-2 text-sm text-gray-400 dark:text-gray-500">
                            <li><a href="#" class="hover:text-white transition-colors">Featured</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Categories</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Authors</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Popular</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Company</h4>
                        <ul class="space-y-2 text-sm text-gray-400 dark:text-gray-500">
                            <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Press</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Legal</h4>
                        <ul class="space-y-2 text-sm text-gray-400 dark:text-gray-500">
                            <li><a href="#" class="hover:text-white transition-colors">Privacy</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Terms</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Guidelines</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            @endif

            <div
                class="border-t border-gray-800 dark:border-gray-800 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm">Copyright © {{ date('Y') }} •
                    <b
                        class="copyright-tag">{{ request()->routeIs('portfolio.me') ? 'My Portfolio' : 'Articles By Santanu' }}</b>.
                    All rights reserved. Crafted with ❤️
                </p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>
@endif
