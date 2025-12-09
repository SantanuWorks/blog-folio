<template>
  <article
    class="bg-white dark:bg-gray-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 cursor-pointer group border dark:border-none"
  >
    <div class="relative overflow-hidden h-48 sm:h-56">
      <img
        :src="post.image"
        :alt="post.title"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
      />

      <div
        class="absolute top-4 left-4 px-3 py-1 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-full text-xs font-medium dark:text-gray-200"
        v-text="post.category"
      ></div>

      <div
        class="absolute top-4 right-4 px-2 py-1 bg-black/60 backdrop-blur-sm text-white rounded-full text-xs flex items-center space-x-1"
      >
        <i class="far fa-eye"></i>
        <span v-text="post.views"></span>
      </div>
    </div>

    <div class="p-5 sm:p-6 space-y-3 sm:space-y-4">
      <div
        class="flex items-center space-x-3 text-xs sm:text-sm text-gray-500 dark:text-gray-400"
      >
        <span v-text="post.date"></span>
        <span>•</span>
        <span v-text="post.readTime"></span>
      </div>

      <h3
        class="font-serif text-lg sm:text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors line-clamp-2"
        v-text="post.title"
      ></h3>

      <p
        class="text-sm sm:text-base text-gray-600 dark:text-gray-300 leading-relaxed line-clamp-2"
        v-text="post.excerpt"
      ></p>

      <div class="flex flex-wrap gap-2">
        <template v-for="tag in post.tags" :key="tag">
          <span
            class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-xs rounded-full"
            v-text="tag"
          >
          </span>
        </template>
      </div>
    </div>
  </article>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
};
</script>
