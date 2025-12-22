<template>
  <div class="relative">
    <img
      src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100"
      class="w-10 h-10 rounded-full cursor-pointer border-2 border-gray-300 dark:border-gray-600 object-cover"
    />
    <div
      class="absolute mt-3 w-48 right-0 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl shadow-lg py-2 z-50"
    >
      <div
        class="absolute -top-2 right-2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-b-8 border-b-white dark:border-b-gray-800"
      ></div>
      <div
        class="absolute -top-[9px] right-2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-b-8 border-b-gray-300 dark:border-b-gray-700"
      ></div>

      <div class="flex items-center gap-3 px-4">
        <p class="font-semibold text-gray-800 dark:text-gray-100 text-lg">Hi, Santanu!</p>
      </div>

      <div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>

      <a
        href="#"
        class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"
      >
        My Profile
      </a>

      <a
        href="#"
        class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"
      >
        Settings
      </a>

      <button
        class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20"
      >
        Logout
      </button>
    </div>
  </div>
</template>
<script>
export default {
  name: "DesktopProfileDropdown",
};
</script>
