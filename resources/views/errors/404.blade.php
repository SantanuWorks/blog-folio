<!DOCTYPE html>
<html lang="en" style="height: auto; min-height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        (function() {
            const saved = localStorage.getItem("theme");
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const shouldBeDark = saved === "dark" || (!saved && prefersDark);

            if (shouldBeDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.store("theme", {
                dark: document.documentElement.classList.contains('dark'),
            });
        });
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="height: auto; min-height: 100%;"
    class="bg-gradient-to-br from-purple-50 via-blue-50 to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-colors duration-300">

    <div class="flex flex-col items-center justify-center min-h-screen px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-2xl text-center">
            <div class="mb-8">
                <h1
                    class="text-8xl sm:text-9xl md:text-[12rem] font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600 dark:from-purple-400 dark:via-blue-400 dark:to-pink-400 animate-pulse">
                    404
                </h1>
            </div>
            <div class="mb-8 flex justify-center">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-400 dark:from-purple-600 dark:to-pink-600 rounded-full blur-3xl opacity-30 animate-pulse">
                    </div>
                    <div
                        class="relative bg-white dark:bg-gray-800 rounded-full p-8 shadow-2xl dark:shadow-purple-900/50 transition-colors duration-300">
                        <i class="fas fa-search text-6xl sm:text-7xl md:text-8xl text-gray-400 dark:text-gray-500"></i>
                    </div>
                </div>
            </div>
            <div class="mb-8 space-y-4">
                <h2
                    class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-4 transition-colors duration-300">
                    Ain't you lost?
                </h2>
                <p
                    class="text-base sm:text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-md mx-auto px-4 transition-colors duration-300">
                    The page you're looking for seems to have wandered off into the digital wilderness. Let's get you
                    back on track!
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base sm:text-lg font-semibold text-white bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-500 dark:to-blue-500 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-home mr-2"></i>
                    Go to Homepage
                </a>
                <button onclick="window.history.back()"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base sm:text-lg font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 border-2 border-gray-200 dark:border-gray-700">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </button>
            </div>
            <div class="mt-12 flex justify-center gap-4 opacity-50">
                <div class="w-3 h-3 bg-purple-500 dark:bg-purple-400 rounded-full animate-bounce"
                    style="animation-delay: 0s;"></div>
                <div class="w-3 h-3 bg-blue-500 dark:bg-blue-400 rounded-full animate-bounce"
                    style="animation-delay: 0.2s;"></div>
                <div class="w-3 h-3 bg-pink-500 dark:bg-pink-400 rounded-full animate-bounce"
                    style="animation-delay: 0.4s;"></div>
            </div>
        </div>
    </div>
</body>

</html>
