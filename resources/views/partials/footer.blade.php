@if (get_domain_type() == 'articles')
    <footer class="bg-gray-900 dark:bg-black text-white py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (!request()->routeIs('portfolio.me'))
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-10 text-center md:text-left">
                    <div class="flex flex-col items-center md:items-start">
                        <div class="flex items-center space-x-2 mb-4 justify-center md:justify-start">
                            <i class="fas fa-feather-alt text-white text-base"></i>
                            <span @@click="currentPage = 'blog'; currentSection = 'lets-get-started'; setTimeout(() => document.getElementById('lets-get-started').scrollIntoView({behavior: 'smooth'}), 100)" class="font-serif text-xl font-bold text-white cursor-pointer">
                                Articles By Santanu
                            </span>
                        </div>
                        <p class="max-w-sm text-sm text-gray-500 dark:text-gray-400 leading-relaxed">
                            A modern platform for writers and readers to connect through meaningful stories.
                        </p>
                    </div>
                    <div class="flex flex-col items-center md:items-end md:text-right">
                        <h4 class="font-semibold text-white mb-4">
                            Legal
                        </h4>
                        <ul
                            class="grid grid-cols-1 md:grid-cols-2 lg:gap-x-10 gap-y-2 gap-x-6 text-sm text-gray-400 place-items-center md:place-items-end">
                            <li>
                                <a href="#" class="dark:hover:text-white transition hover:underline underline-offset-4 transition-transform hover:-translate-y-0.5">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dark:hover:text-white transition hover:underline underline-offset-4 transition-transform hover:-translate-y-0.5">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dark:hover:text-white transition hover:underline underline-offset-4 transition-transform hover:-translate-y-0.5">
                                    Guidelines
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dark:hover:text-white transition hover:underline underline-offset-4 transition-transform hover:-translate-y-0.5">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif

            <div
                class="border-t border-gray-800 dark:border-gray-800 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm">Copyright © {{ date('Y') }} •
                    <b @@click="currentPage = 'blog'; currentSection = 'lets-get-started'; setTimeout(() => document.getElementById('lets-get-started').scrollIntoView({behavior: 'smooth'}), 100)"
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
