@if (request()->routeIs('portfolio.me'))
    <a href="{{ route('portfolio.me') }}"
        class="{{ request()->routeIs('portfolio.me')
            ? 'text-sm font-medium cursor-pointer transition-colors text-indigo-600 dark:text-indigo-400'
            : 'text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }}">I'm
        Santanu</a>

    <a href="#"
        class="{{ request()->routeIs('portfolio.projects')
            ? 'text-sm font-medium cursor-pointer transition-colors text-indigo-600 dark:text-indigo-400'
            : 'text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }}">
        Building Projects</a>

    <a href="#"
        class="{{ request()->routeIs('articles.home')
            ? 'text-sm font-medium cursor-pointer transition-colors text-indigo-600 dark:text-indigo-400'
            : 'text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }}">My
        Articles</a>

    <a href="#"
        class="{{ request()->routeIs('articles.home')
            ? 'text-sm font-medium cursor-pointer transition-colors text-indigo-600 dark:text-indigo-400'
            : 'text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' }}">Creative
        Hands</a>

    <a href="#"
        class="text-sm
                    font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900
                    dark:hover:text-white">Let's
        Connect</a>
@else
    <a @@click="currentPage = 'blog'; currentSection = 'lets-get-started'; setTimeout(() => document.getElementById('lets-get-started').scrollIntoView({behavior: 'smooth'}), 100)"
        :class="currentSection === 'lets-get-started' ? 'text-indigo-600 dark:text-indigo-400' :
            'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'"
        class="text-sm font-medium cursor-pointer transition-colors">Let's
        Get Started</a>

    <a @@click="currentPage = 'blog'; currentSection = 'featured-article'; setTimeout(() => document.getElementById('featured-article').scrollIntoView({behavior: 'smooth'}), 100)"
        :class="currentSection === 'featured-article' ? 'text-indigo-600 dark:text-indigo-400' :
            'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'"
        class="text-sm font-medium cursor-pointer transition-colors">Featured Article</a>

    <a @@click="currentPage = 'blog'; currentSection = 'world-of-articles'; setTimeout(() => document.getElementById('world-of-articles').scrollIntoView({behavior: 'smooth'}), 100)"
        :class="currentSection === 'world-of-articles' ? 'text-indigo-600 dark:text-indigo-400' :
            'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'"
        class="text-sm font-medium cursor-pointer transition-colors">World
        of Articles</a>

    <a @@click="currentPage = 'blog'; currentSection = 'unleash-newsletter'; setTimeout(() => document.getElementById('unleash-newsletter').scrollIntoView({behavior: 'smooth'}), 100)"
        :class="currentSection === 'unleash-newsletter' ? 'text-indigo-600 dark:text-indigo-400' :
            'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'"
        class="text-sm font-medium cursor-pointer transition-colors">Unleash
        Newsletter</a>

    <button @@click="currentPage = 'write'" :class="isAdmin ? '' : 'hidden'"
        class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition-colors">Write</button>
@endif
