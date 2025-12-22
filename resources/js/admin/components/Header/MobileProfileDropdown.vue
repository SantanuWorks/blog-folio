<template>
  <div>
    <div class="flex items-center space-x-3">
      <img
        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100"
        class="w-10 h-10 rounded-full cursor-pointer border-2 border-gray-300 dark:border-gray-600 object-cover"
      />
      <span class="text-gray-700 dark:text-gray-200 font-medium"> John Doe </span>
    </div>
    <div x-show="openMobile" class="mt-3 space-y-2">
      <a
        href="#"
        class="block py-2 pl-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200"
      >
        My Profile
      </a>
      <a
        href="#"
        class="block py-2 pl-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200"
      >
        Settings
      </a>
      <button
        class="w-full text-left py-2 pl-2 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-md"
      >
        Logout
      </button>
    </div>
  </div>
</template>
<script>
export default {
  name: "MobileProfileDropdown",
};
</script>
