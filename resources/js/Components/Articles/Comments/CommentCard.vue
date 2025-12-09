<template>
  <div class="flex space-x-3 sm:space-x-4">
    <img
      src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100"
      alt="Commenter"
      class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover flex-shrink-0"
    />
    <div class="flex-1">
      <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-4 sm:p-5">
        <div class="flex items-center justify-between mb-2">
          <p class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base">
            {{ comment.commentorName }}
          </p>
          <span class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">{{
            comment.commentAgo
          }}</span>
        </div>
        <p class="text-sm sm:text-base text-gray-700 dark:text-gray-300 leading-relaxed">
          {{ comment.commentText }}
        </p>
      </div>
      <div
        class="flex items-center space-x-4 sm:space-x-6 mt-3 text-xs sm:text-sm text-gray-500 dark:text-gray-400"
      >
        <button
          class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors"
        >
          <i class="far fa-thumbs-up mr-1"></i> {{ comment.likesCount }}
        </button>
        <button
          class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors"
        >
          <i class="far fa-comment mr-1"></i> Reply
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    comment: {
      type: Object,
      required: true,
    },
  },
};
</script>
