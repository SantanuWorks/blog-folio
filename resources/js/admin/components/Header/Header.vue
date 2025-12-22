<template>
  <header
    class="bg-white dark:bg-gray-800/90 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50 backdrop-blur-xl transition-all duration-300"
  >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16 sm:h-20">
        <div class="flex items-center justify-center space-x-2 cursor-pointer">
          <i
            class="header-icon fas fa-feather-alt text-stone-900 dark:text-white text-sm sm:text-base"
          ></i>
          <h1
            class="text-2xl font-display font-bold text-stone-900 dark:text-white tracking-tight"
          >
            Santanu's Dashboard
          </h1>
        </div>

        <nav class="hidden md:flex items-center space-x-8">
          <Nav />

          <button
            class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition"
          >
            <i class="fas fa-moon"></i>
          </button>

          <DesktopProfileDropdown />
        </nav>

        <button
          class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"
        >
          <i class="fas text-xl fa-bars"></i>
        </button>
      </div>

      <div class="md:hidden py-4 border-t border-gray-200 dark:border-gray-700">
        <nav class="flex flex-col space-y-4">
          <Nav />

          <button
            class="text-gray-600 dark:text-gray-300 text-sm font-medium text-left flex items-center space-x-2"
          >
            <i class="fas fa-sun"></i>
            <span x-text="$store.theme.dark ? 'Dark Mode' : 'Light Mode'"></span>
          </button>

          <MobileProfileDropdown />
        </nav>
      </div>
    </div>
  </header>
</template>
<script>
import DesktopProfileDropdown from "./DesktopProfileDropdown.vue";
import MobileProfileDropdown from "./MobileProfileDropdown.vue";
import Nav from "./Nav.vue";
export default {
  name: "AdminHeader",
  components: {
    Nav,
    DesktopProfileDropdown,
    MobileProfileDropdown,
  },
};
</script>
