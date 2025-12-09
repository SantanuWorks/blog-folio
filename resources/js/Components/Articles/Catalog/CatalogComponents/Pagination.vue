<template>
  <div v-if="totalPages > 1" class="mt-12 sm:mt-16">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="flex items-center space-x-2">
        <button
          @click="changePage(currentPage - 1)"
          :disabled="currentPage === 1"
          class="w-10 h-10 flex items-center justify-center border rounded-lg"
          :class="{ 'opacity-50 cursor-not-allowed': currentPage === 1 }"
        >
          <i class="fas fa-chevron-left text-sm"></i>
        </button>

        <button
          v-for="page in visiblePages"
          :key="page"
          @click="changePage(page)"
          :class="pageButtonClass(page)"
          class="w-10 h-10 flex items-center justify-center border rounded-lg font-medium text-sm"
        >
          {{ page }}
        </button>

        <button
          @click="changePage(currentPage + 1)"
          :disabled="currentPage === totalPages"
          class="w-10 h-10 flex items-center justify-center border rounded-lg"
          :class="{ 'opacity-50 cursor-not-allowed': currentPage === totalPages }"
        >
          <i class="fas fa-chevron-right text-sm"></i>
        </button>
      </div>
      <p class="text-sm">
        Page <span class="font-semibold">{{ currentPage }}</span> of
        <span class="font-semibold">{{ totalPages }}</span>
      </p>
      <div class="hidden lg:flex items-center space-x-2">
        <span class="text-sm">Show:</span>
        <select
          :value="itemsPerPage"
          @change="handleChangeItemsPerPage"
          class="px-3 py-2 border rounded-lg text-sm bg-white dark:bg-gray-800"
        >
          <option v-for="n in pageSizeList" :key="n" :value="n">{{ n }}</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    currentPage: {
      type: Number,
      required: true,
    },
    totalPages: {
      type: Number,
      required: true,
    },
    itemsPerPage: {
      type: Number,
      required: true,
    },
    resetPagination: {
      type: Function,
      required: true,
    },
    changePage: {
      type: Function,
      required: true,
    },
    visiblePages: {
      type: Array,
      required: true,
    },
    pageButtonClass: {
      type: Function,
      required: true,
    },
  },
  emits: ["update:itemsPerPage"],
  methods: {
    handleChangeItemsPerPage(event) {
      const selectValue = event.target.value;
      this.$emit("update:itemsPerPage", selectValue);
      this.resetPagination();
    },
  },
  data() {
    return {
      pageSizeList: [6, 9, 12, 18],
    };
  },
};
</script>
