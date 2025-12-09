<div>
    <div x-show="authModal" x-transition.opacity
        class="fixed inset-0 bg-black/40 dark:bg-black/60 backdrop-blur-sm z-[999]"></div>

    <div x-show="authModal" x-transition
        class="fixed inset-0 flex items-center justify-center p-4 sm:p-6 lg:p-8 z-[1000] overflow-y-auto">

        <div
            class="bg-white dark:bg-gray-900 w-full 
                max-w-md sm:max-w-lg rounded-2xl shadow-xl p-6
                relative mx-auto">

            <button @@click="authModal = false"
                class="absolute top-4 right-6 text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 text-xl">
                ✕
            </button>

            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white text-center mb-6 mt-4"
                x-text="mode === 'signin' ? 'Welcome Back' : 'Create an Account'"></h2>

            <div class="space-y-3">

                <button
                    class="w-full flex items-center justify-center gap-3 py-2.5 
                        border border-gray-300 dark:border-gray-600 rounded-lg 
                        hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    <img src='https://www.svgrepo.com/show/355037/google.svg' class="w-5">
                    <span class="text-sm sm:text-base">Continue with Google</span>
                </button>

                <button
                    class="w-full flex items-center justify-center gap-3 py-2.5 
                        border border-blue-600 text-blue-600 rounded-lg 
                        hover:bg-blue-50 dark:hover:bg-blue-900/20 transition">
                    <img src='https://www.svgrepo.com/show/448234/linkedin.svg' class="w-5">
                    <span class="text-sm sm:text-base">Continue with LinkedIn</span>
                </button>

                <button
                    class="w-full flex items-center justify-center gap-3 py-2.5 
                        border border-gray-800 dark:border-white 
                        text-gray-900 dark:text-white rounded-lg 
                        hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    <img src='https://www.svgrepo.com/show/512317/github-142.svg' class="w-6">
                    <span class="text-sm sm:text-base">Continue with GitHub</span>
                </button>

            </div>

            <div class="my-6 flex items-center gap-4">
                <div class="flex-1 h-px bg-gray-300 dark:bg-gray-700"></div>
                <span class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">OR</span>
                <div class="flex-1 h-px bg-gray-300 dark:bg-gray-700"></div>
            </div>

            <form class="space-y-4">

                <div x-show="mode === 'signup'" x-transition>
                    <label class="text-gray-700 dark:text-gray-300 text-sm">Full Name</label>
                    <input type="text"
                        class="w-full mt-1 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-transparent text-gray-900 dark:text-white
                            focus:outline-none focus:ring-2 focus:ring-blue-500/50"
                        placeholder="Your Name">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-300 text-sm">Email</label>
                    <input type="email"
                        class="w-full mt-1 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-transparent text-gray-900 dark:text-white
                            focus:outline-none focus:ring-2 focus:ring-blue-500/50"
                        placeholder="you@example.com">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-300 text-sm">Password</label>
                    <input type="password"
                        class="w-full mt-1 px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-transparent text-gray-900 dark:text-white
                            focus:outline-none focus:ring-2 focus:ring-blue-500/50"
                        placeholder="••••••••">
                </div>

                <button
                    class="w-full py-2.5 bg-blue-600 text-white rounded-lg text-sm sm:text-base
                        hover:bg-blue-700 transition"
                    x-text="mode === 'signin' ? 'Sign In' : 'Sign Up'"></button>

            </form>

            <p class="text-center text-sm mt-4 text-gray-600 dark:text-gray-300">
                <span x-show="mode === 'signin'">
                    Don't have an account?
                    <button @@click="mode = 'signup'" class="text-blue-600 hover:underline">Sign
                        Up</button>
                </span>
                <span x-show="mode === 'signup'">
                    Already have an account?
                    <button @@click="mode = 'signin'" class="text-blue-600 hover:underline">Sign
                        In</button>
                </span>
            </p>

        </div>
    </div>
</div>
