@if (!request()->routeIs('articles.view'))
    <header
        class="bg-white dark:bg-gray-800/90 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50 backdrop-blur-xl transition-all duration-300">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20">

                <div class="flex items-center justify-center space-x-2 cursor-pointer">
                    @if (!request()->routeIs('portfolio.me'))
                        <i
                            class="header-icon fas fa-feather-alt text-stone-900 dark:text-white text-sm sm:text-base"></i>
                    @endif
                    <h1 onclick="window.location = '{{ get_header_link() }}'"
                        class="text-2xl font-display font-bold text-stone-900 dark:text-white tracking-tight">
                        {{ get_header_title() }}
                    </h1>
                </div>

                <nav class="hidden md:flex items-center space-x-8">
                    @include('partials.includes.nav')

                    <button @@click="$store.theme.toggle()"
                        class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition">
                        <i :class="$store.theme.dark ? 'fas fa-moon' : 'fas fa-sun'"></i>
                    </button>

                    @if (!request()->routeIs('portfolio.me'))
                        <button @@click="authModal = true; mode = 'signin'"
                            class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 transition text-sm font-medium">
                            Sign In
                        </button>

                        <button @@click="authModal = true; mode = 'signup'"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition text-sm font-medium">
                            Sign Up
                        </button>

                        <div x-show="isLoggedIn" x-data="{ open: false }" class="relative">
                            <img @@click="open = !open"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100"
                                class="w-10 h-10 rounded-full cursor-pointer border-2 border-gray-300 dark:border-gray-600 object-cover">
                            <div x-show="open" @@click.outside="open = false" x-transition
                                class="absolute mt-3 w-48 right-0 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl shadow-lg py-2 z-50">

                                <div
                                    class="absolute -top-2 right-2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-b-8 border-b-white dark:border-b-gray-800">
                                </div>
                                <div
                                    class="absolute -top-[9px] right-2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-b-8 border-b-gray-300 dark:border-b-gray-700">
                                </div>

                                <div class="flex items-center gap-3 px-4">
                                    <p class="font-semibold text-gray-800 dark:text-gray-100 text-lg">Hi, Santanu!</p>
                                </div>

                                <div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>

                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    My Profile
                                </a>

                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    Settings
                                </a>

                                <button
                                    class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20">
                                    Logout
                                </button>
                            </div>
                        </div>
                    @endif
                </nav>

                <button @@click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                    <i :class="mobileMenuOpen ? 'fa-times' : 'fa-bars'" class="fas text-xl"></i>
                </button>
            </div>

            <div x-show="mobileMenuOpen" x-transition
                class="md:hidden py-4 border-t border-gray-200 dark:border-gray-700">
                <nav class="flex flex-col space-y-4">
                    @include('partials.includes.nav')

                    <button @@click="$store.theme.toggle()"
                        class="text-gray-600 dark:text-gray-300 text-sm font-medium text-left flex items-center space-x-2">
                        <i :class="$store.theme.dark ? 'fas fa-moon' : 'fas fa-sun'"></i>
                        <span x-text="$store.theme.dark ? 'Dark Mode' : 'Light Mode'"></span>
                    </button>

                    @if (!request()->routeIs('portfolio.me'))
                        <button @@click="authModal = true; mode = 'signin'"
                            class="px-4 py-2 text-gray-700 dark:text-gray-200 border border-gray-300 dark:border-gray-600 rounded-lg">
                            Sign In
                        </button>
                        <button @@click="authModal = true; mode = 'signup'"
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                            Sign Up
                        </button>
                        <div x-show="isLoggedIn" x-data="{ openMobile: false }" class="">
                            <div class="flex items-center space-x-3">
                                <img @@click="openMobile = !openMobile"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100"
                                    class="w-10 h-10 rounded-full cursor-pointer border-2 border-gray-300 dark:border-gray-600 object-cover">
                                <span class="text-gray-700 dark:text-gray-200 font-medium">
                                    John Doe
                                </span>
                            </div>
                            <div x-show="openMobile" class="mt-3 space-y-2">
                                <a href="#"
                                    class="block py-2 pl-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200">
                                    My Profile
                                </a>
                                <a href="#"
                                    class="block py-2 pl-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200">
                                    Settings
                                </a>
                                <button
                                    class="w-full text-left py-2 pl-2 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-md">
                                    Logout
                                </button>
                            </div>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </header>
@endif
