<template>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap justify-center gap-3 sm:gap-4 mb-12">
      <button
        @click="selectedCategory = 'all'"
        :class="
          selectedCategory === 'all'
            ? 'bg-indigo-600 text-white'
            : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'
        "
        class="px-4 sm:px-6 py-2 sm:py-3 rounded-lg font-medium text-sm sm:text-base transition-colors border border-gray-200 dark:border-gray-600"
      >
        All Articles
      </button>
      <div v-for="category in categories" :key="category">
        <button
          @click="selectedCategory = category"
          :class="
            selectedCategory === category
              ? 'bg-indigo-600 text-white'
              : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'
          "
          class="px-4 sm:px-6 py-2 sm:py-3 rounded-lg font-medium text-sm sm:text-base transition-colors border border-gray-200 dark:border-gray-600"
          v-text="category"
        ></button>
      </div>
    </div>

    <div v-if="filteredPosts.length === 0" class="text-center py-16">
      <EmptyCatalogFallback
        :isClear="false"
      />
    </div>

    <div v-else class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <ArticleCard v-for="post in filteredPosts" :key="post.id" :post="post" />
    </div>
  </div>
</template>

<script>
import ArticleCard from "./CatalogComponents/ArticleCard.vue";
import EmptyCatalogFallback from "./CatalogComponents/EmptyCatalogFallback.vue";
export default {
  components: { ArticleCard, EmptyCatalogFallback },
  data() {
    return {
      categories: ["Technology", "Design", "Business", "Lifestyle", "Travel"],
      selectedCategory: "all",
      blogPosts: [
        {
          id: 1,
          title: "The Future of Web Design in 2024",
          excerpt:
            "Exploring emerging trends and technologies shaping the digital landscape",
          image: "https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800",
          category: "Design",
          tags: ["Web Design", "Trends", "UI/UX"],
          readTime: "8 min",
          author: "Sarah Johnson",
          date: "Mar 15, 2024",
          views: "2.4k",
        },
        {
          id: 2,
          title: "Building Scalable Applications",
          excerpt: "Best practices for creating robust and maintainable software systems",
          image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800",
          category: "Technology",
          tags: ["Development", "Architecture"],
          readTime: "12 min",
          author: "Michael Chen",
          date: "Mar 12, 2024",
          views: "4.5k",
        },
        {
          id: 3,
          title: "Minimalism in Modern Design",
          excerpt:
            "How less is more when it comes to creating impactful user experiences",
          image: "https://images.unsplash.com/photo-1493612276216-ee3925520721?w=800",
          category: "Design",
          tags: ["Minimalism", "UI"],
          readTime: "6 min",
          author: "Emma Wilson",
          date: "Mar 10, 2024",
          views: "6.4k",
        },
        {
          id: 4,
          title: "Remote Work Revolution",
          excerpt:
            "Adapting to the new normal of distributed teams and digital collaboration",
          image: "https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800",
          category: "Business",
          tags: ["Remote Work", "Productivity"],
          readTime: "10 min",
          author: "David Martinez",
          date: "Mar 8, 2024",
          views: "3.5k",
        },
        {
          id: 5,
          title: "Sustainable Living Guide",
          excerpt:
            "Practical tips for reducing your environmental footprint in daily life",
          image: "https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800",
          category: "Lifestyle",
          tags: ["Sustainability", "Green Living"],
          readTime: "7 min",
          author: "Lisa Anderson",
          date: "Mar 5, 2024",
          views: "1.6k",
        },
        {
          id: 6,
          title: "Hidden Gems of Southeast Asia",
          excerpt:
            "Discovering off-the-beaten-path destinations for adventurous travelers",
          image: "https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800",
          category: "Travel",
          tags: ["Travel", "Adventure"],
          readTime: "15 min",
          author: "James Park",
          date: "Mar 3, 2024",
          views: "3.7k",
        },
      ],
    };
  },
  computed: {
    filteredPosts() {
      if (this.selectedCategory === "all") return this.blogPosts;
      return this.blogPosts.filter((post) => post.category === this.selectedCategory);
    },
  },
  methods: {},
};
</script>
