<template>
  <section
    class="bg-white dark:bg-gray-900 py-6 sm:py-8 border-b border-gray-200 dark:border-gray-700 sticky top-16 sm:top-20 z-40"
  >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
        <div class="w-full sm:max-w-sm">
          <div class="relative">
            <input
              :value="searchQuery"
              @input="handleInput"
              type="text"
              placeholder="Search articles by title, content, or tags..."
              class="w-full pl-12 pr-4 py-3 sm:py-3.5 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-indigo-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 placeholder-gray-400 dark:placeholder-gray-500"
            />

            <i
              class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"
            ></i>

            <button
              v-if="searchQuery"
              @click="clearSearch"
              class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
            >
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div
          class="flex flex-col xs:flex-row xs:justify-between xs:items-center gap-3 sm:flex-row"
        >
          <div class="w-full xs:w-1/2">
            <select
              :value="selectedCategory"
              @change="handleCategoryChange"
              class="w-full px-4 py-2 border rounded-lg text-sm font-medium bg-white dark:bg-gray-800"
            >
              <option
                v-for="category in categories"
                :key="category"
                :value="category.toLowerCase()"
              >
                {{ category }}
              </option>
            </select>
          </div>
          <div class="w-full xs:w-1/2">
            <select
              :value="selectedSort"
              @change="handleSortChange"
              class="w-full px-4 py-2 border rounded-lg text-sm font-medium bg-white dark:bg-gray-800"
            >
              <option value="newest">Newest First</option>
              <option value="oldest">Oldest First</option>
              <option value="popular">Most Popular</option>
            </select>
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-between text-sm">
        <p>
          Showing
          <span class="font-semibold">{{ paginatedPostsCount }}</span>
          of
          <span class="font-semibold">{{ filteredPostsCount }}</span>
          articles
        </p>

        <button
          v-if="searchQuery || selectedCategory !== 'all'"
          @click="$emit('clearAllFilters')"
          class="text-indigo-600 font-medium hidden sm:block"
        >
          Clear filters
        </button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    searchQuery: {
      type: String,
      required: true,
    },
    selectedCategory: {
      type: String,
      required: true,
    },
    selectedSort: {
      type: String,
      required: true,
    },
    categories: {
      type: Array,
      required: true,
    },
    paginatedPostsCount: {
      type: Number,
      required: true,
    },
    filteredPostsCount: {
      type: Number,
      required: true,
    },
    resetPagination: {
      type: Function,
      required: true,
    },
    clearAllFilters: {
      type: Function,
      required: true,
    },
    clearSearch: {
      type: Function,
      required: true,
    },
  },
  emits: [
    "update:searchQuery",
    "update:selectedCategory",
    "update:selectedSort",
    "clearAllFilters",
  ],
  methods: {
    handleInput(event) {
      const inputValue = event.target.value;
      this.$emit("update:searchQuery", inputValue);
      this.resetPagination();
    },
    handleCategoryChange(event) {
      const selectValue = event.target.value;
      this.$emit("update:selectedCategory", selectValue);
      this.resetPagination();
    },
    handleSortChange(event) {
      const selectValue = event.target.value;
      this.$emit("update:selectedSort", selectValue);
      this.resetPagination();
    },
  },
};
</script>
