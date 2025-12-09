<template>
  <i class="fas fa-search text-5xl text-gray-300 mb-4"></i>
  <h3 class="font-serif text-2xl font-bold mb-2">No articles found</h3>
  <p class="text-gray-600 mb-6">{{isClear ? 'Try adjusting your search or filters' : 'Try other catagories'}}</p>
  <button
    v-if="isClear"
    @click="clearAllFilters"
    class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700"
  >
    Clear all filters
  </button>
</template>
<script>
export default {
  props: {
    clearAllFilters: {
      type: Function,
      required: false,
    },
    isClear: {
      type: Boolean,
      required: true,
    },
  },
  emits: ["clearAllFilters"],
};
</script>
