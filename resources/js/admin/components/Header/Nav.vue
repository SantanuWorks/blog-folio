<template>
  <router-link
    :to="{ name: 'admin.dashboard' }"
    class="text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"
    active-class="text-indigo-600 dark:text-indigo-400"
    exact-active-class="text-indigo-600 dark:text-indigo-400"
  >
    Dashboard
  </router-link>

  <router-link
    :to="{ name: 'admin.articles.index' }"
    class="text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"
    active-class="text-indigo-600 dark:text-indigo-400"
    exact-active-class="text-indigo-600 dark:text-indigo-400"
  >
    All Articles
  </router-link>

  <router-link
    :to="{ name: 'admin.articles.composer' }"
    class="bg-purple-800 rounded-lg py-2 px-3 text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"
    active-class="text-indigo-600 dark:text-indigo-400"
    exact-active-class="text-indigo-600 dark:text-indigo-400"
  >
    Article Composer
  </router-link>

  <router-link
    :to="{ name: 'admin.portfolio.composer' }"
    class="bg-blue-600 rounded-lg py-2 px-3 text-sm font-medium cursor-pointer transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"
    active-class="text-indigo-600 dark:text-indigo-400"
    exact-active-class="text-indigo-600 dark:text-indigo-400"
  >
    Portfolio Composer
  </router-link>
</template>
<script>
export default {
  name: "AdminNav",
};
</script>
