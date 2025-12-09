<template>
  <CatalogFilter
    v-model:searchQuery="searchQuery"
    v-model:selectedCategory="selectedCategory"
    v-model:selectedSort="selectedSort"
    :categories="categories"
    :paginatedPostsCount="paginatedPosts.length"
    :filteredPostsCount="filteredPosts.length"
    :resetPagination="resetPagination"
    :clearSearch="clearSearch"
    :clearAllFilters="clearAllFilters"
    @clearAllFilters="clearAllFilters"
  />
  <section class="py-12 sm:py-16 lg:py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div v-if="filteredPosts.length === 0" class="text-center py-16">
        <EmptyCatalogFallback
          :isClear="true"
          :clearAllFilters="clearAllFilters"
          @clearAllFilters="clearAllFilters"
        />
      </div>

      <div v-else class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <ArticleCard v-for="post in paginatedPosts" :key="post.id" :post="post" />
      </div>

      <Pagination
        v-model:itemsPerPage="itemsPerPage"
        :changePage="changePage"
        :currentPage="currentPage"
        :pageButtonClass="pageButtonClass"
        :resetPagination="resetPagination"
        :totalPages="totalPages"
        :visiblePages="visiblePages"
      />
    </div>
  </section>
</template>

<script>
import ArticleCard from "./CatalogComponents/ArticleCard.vue";
import CatalogFilter from "./CatalogComponents/CatalogFilter.vue";
import EmptyCatalogFallback from "./CatalogComponents/EmptyCatalogFallback.vue";
import Pagination from "./CatalogComponents/Pagination.vue";

export default {
  components: { ArticleCard, CatalogFilter, Pagination, EmptyCatalogFallback },
  data() {
    return {
      mobileFiltersOpen: false,
      searchQuery: "",
      selectedCategory: "all",
      selectedSort: "newest",
      currentPage: 1,
      itemsPerPage: 9,
      categories: [
        "All",
        "Technology",
        "Design",
        "Business",
        "Lifestyle",
        "Travel",
        "Health",
      ],
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
          authorImage:
            "https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100",
          date: "Mar 15, 2024",
          views: "2.4k",
        },
        {
          id: 2,
          title:
            "Building Scalable Applications with Python Django as Backend If you make it more",
          excerpt: "Best practices for creating robust and maintainable software systems",
          image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800",
          category: "Technology",
          tags: ["Development", "Architecture"],
          readTime: "12 min",
          author: "Michael Chen",
          authorImage:
            "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100",
          date: "Mar 12, 2024",
          views: "3.1k",
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
          authorImage:
            "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100",
          date: "Mar 10, 2024",
          views: "1.8k",
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
          authorImage:
            "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100",
          date: "Mar 8, 2024",
          views: "2.9k",
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
          authorImage:
            "https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=100",
          date: "Mar 5, 2024",
          views: "1.5k",
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
          authorImage:
            "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100",
          date: "Mar 3, 2024",
          views: "4.2k",
        },
        {
          id: 7,
          title: "AI and Machine Learning Basics",
          excerpt:
            "Understanding the fundamentals of artificial intelligence and its applications",
          image: "https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800",
          category: "Technology",
          tags: ["AI", "ML", "Tech"],
          readTime: "14 min",
          author: "Alex Thompson",
          authorImage:
            "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100",
          date: "Mar 1, 2024",
          views: "5.1k",
        },
        {
          id: 8,
          title: "Mastering Typography",
          excerpt: "The art and science of choosing and using typefaces effectively",
          image: "https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=800",
          category: "Design",
          tags: ["Typography", "Design"],
          readTime: "9 min",
          author: "Sophie Chen",
          authorImage:
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100",
          date: "Feb 28, 2024",
          views: "2.7k",
        },
        {
          id: 9,
          title: "Entrepreneurship in 2024",
          excerpt: "Key strategies for starting and growing a successful business today",
          image: "https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800",
          category: "Business",
          tags: ["Startup", "Business"],
          readTime: "11 min",
          author: "Robert Kim",
          authorImage:
            "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100",
          date: "Feb 25, 2024",
          views: "3.8k",
        },
        {
          id: 10,
          title: "Mindfulness and Meditation",
          excerpt:
            "Practical techniques for reducing stress and improving mental clarity",
          image: "https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=800",
          category: "Health",
          tags: ["Wellness", "Mental Health"],
          readTime: "8 min",
          author: "Maya Patel",
          authorImage:
            "https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?w=100",
          date: "Feb 22, 2024",
          views: "2.1k",
        },
        {
          id: 11,
          title: "Digital Marketing Trends",
          excerpt:
            "Latest strategies and tactics for effective online marketing campaigns",
          image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800",
          category: "Business",
          tags: ["Marketing", "Digital"],
          readTime: "10 min",
          author: "Chris Anderson",
          authorImage:
            "https://images.unsplash.com/photo-1463453091185-61582044d556?w=100",
          date: "Feb 20, 2024",
          views: "3.3k",
        },
        {
          id: 12,
          title: "Photography Composition Tips",
          excerpt: "Essential techniques for creating visually stunning photographs",
          image: "https://images.unsplash.com/photo-1452587925148-ce544e77e70d?w=800",
          category: "Lifestyle",
          tags: ["Photography", "Art"],
          readTime: "7 min",
          author: "Nina Rodriguez",
          authorImage:
            "https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100",
          date: "Feb 18, 2024",
          views: "1.9k",
        },
        {
          id: 13,
          title: "Cloud Computing Explained",
          excerpt:
            "A comprehensive guide to understanding cloud infrastructure and services",
          image: "https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=800",
          category: "Technology",
          tags: ["Cloud", "Infrastructure"],
          readTime: "13 min",
          author: "Daniel Lee",
          authorImage:
            "https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=100",
          date: "Feb 15, 2024",
          views: "4.5k",
        },
        {
          id: 14,
          title: "Interior Design Principles",
          excerpt: "Creating beautiful and functional living spaces with timeless design",
          image: "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=800",
          category: "Design",
          tags: ["Interior", "Home"],
          readTime: "9 min",
          author: "Isabella Martinez",
          authorImage:
            "https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=100",
          date: "Feb 12, 2024",
          views: "2.6k",
        },
        {
          id: 15,
          title: "Healthy Eating Habits",
          excerpt: "Science-backed nutrition advice for a healthier lifestyle",
          image: "https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800",
          category: "Health",
          tags: ["Nutrition", "Wellness"],
          readTime: "8 min",
          author: "Dr. Sarah Williams",
          authorImage:
            "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100",
          date: "Feb 10, 2024",
          views: "3.2k",
        },
      ],
    };
  },
  computed: {
    normalizedCategory() {
      return this.selectedCategory.toLowerCase();
    },

    filteredPosts() {
      const search = this.searchQuery.toLowerCase().trim();

      return this.blogPosts
        .filter((post) =>
          this.normalizedCategory === "all"
            ? true
            : post.category.toLowerCase() === this.normalizedCategory
        )
        .filter((post) =>
          search
            ? (post.title + post.content + post.tags.join(" "))
                .toLowerCase()
                .includes(search)
            : true
        )
        .sort((a, b) => {
          const dateA = new Date(a.date);
          const dateB = new Date(b.date);

          if (this.selectedSort === "newest") return dateB - dateA;
          if (this.selectedSort === "oldest") return dateA - dateB;
          if (this.selectedSort === "popular") return Number(b.views) - Number(a.views);

          return 0;
        });
    },

    totalPages() {
      return Math.ceil(this.filteredPosts.length / this.itemsPerPage);
    },

    paginatedPosts() {
      const start = (this.currentPage - 1) * this.itemsPerPage;
      return this.filteredPosts.slice(start, start + this.itemsPerPage);
    },

    visiblePages() {
      const pages = [];

      for (let i = 1; i <= this.totalPages; i++) {
        if (i === 1 || i === this.totalPages || Math.abs(i - this.currentPage) <= 1) {
          pages.push(i);
        }
      }

      return pages;
    },
  },
  methods: {
    resetPagination() {
      this.currentPage = 1;
    },

    clearSearch() {
      this.searchQuery = "";
      this.resetPagination();
    },

    clearAllFilters() {
      this.searchQuery = "";
      this.selectedCategory = "all";
      this.resetPagination();
    },

    changePage(page) {
      if (page >= 1 && page <= this.totalPages) {
        this.currentPage = page;
      }
    },

    selectCategory(cat) {
      this.selectedCategory = cat.toLowerCase();
      this.resetPagination();
    },

    selectMobileCategory(cat) {
      this.selectCategory(cat);
      this.mobileFiltersOpen = false;
    },

    categoryButtonClass(category) {
      const normalized = category.toLowerCase();

      const isActive =
        this.selectedCategory === normalized ||
        (this.selectedCategory === "all" && category === "All");

      return isActive
        ? "bg-indigo-600 text-white border-indigo-600"
        : "bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-600";
    },

    pageButtonClass(page) {
      return page === this.currentPage
        ? "bg-indigo-600 text-white"
        : "bg-white dark:bg-gray-800";
    },
  },
};
</script>
