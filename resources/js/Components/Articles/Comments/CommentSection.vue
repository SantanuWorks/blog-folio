<template>
  <div class="mt-12 sm:mt-16">
    <h3
      class="font-serif text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-6 sm:mb-8"
    >
      Comments (12)
    </h3>

    <!-- Comment Form -->
    <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-4 sm:p-6 mb-8">
      <textarea
        placeholder="Share your thoughts..."
        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 resize-none text-sm sm:text-base"
        rows="4"
      ></textarea>
      <div class="flex justify-end mt-4">
        <button
          class="px-6 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors text-sm sm:text-base"
        >
          Post Comment
        </button>
      </div>
    </div>

    <!-- Comment List -->
    <div class="space-y-6 sm:space-y-8">
      <template v-for="comment in comments" :key="comment.id">
        <comment-card :comment="comment" />
      </template>
    </div>

    <button
      class="w-full mt-8 px-6 py-3 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-sm sm:text-base"
    >
      Load More Comments
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      comments: [
        {
          id: 1,
          commentorName: "Shyaam Puri",
          commentedAgo: "1 day ago",
          commentText:
            "The 3D examples are stunning! Would love a deep-dive into how you structured the animations.",
          likesCount: 32,
        },
        {
          id: 2,
          commentorName: "Ram Gopal",
          commentedAgo: "1 day ago",
          commentText:
            "Amazing breakdown! The visuals really helped me understand the workflow. Looking forward to more content like this.",
          likesCount: 53,
        },
        {
          id: 3,
          commentorName: "Aditi Sharma",
          commentedAgo: "2 days ago",
          commentText:
            "This is easily one of the best posts I’ve read this week. Please consider adding a section on performance optimization!",
          likesCount: 64,
        },
        {
          id: 4,
          commentorName: "Vikram Das",
          commentedAgo: "2 days ago",
          commentText:
            "Loved the clarity! Especially the part where you explained scene composition. Helped me a lot.",
          likesCount: 45,
        },
        {
          id: 5,
          commentorName: "Neha Patnaik",
          commentedAgo: "3 days ago",
          commentText:
            "Great write-up! Could you share the tools or libraries you used for the rendering pipeline?",
          likesCount: 34,
        },
        {
          id: 6,
          commentorName: "Sourav Kar",
          commentedAgo: "3 days ago",
          commentText:
            "Impressive work! The illustrations make complex concepts surprisingly approachable.",
          likesCount: 18,
        },
        {
          id: 7,
          commentorName: "Meera K",
          commentedAgo: "4 days ago",
          commentText:
            "I didn't know much about 3D rendering before this, but your article made it so easy to follow!",
          likesCount: 27,
        },
        {
          id: 8,
          commentorName: "Rohit Kumar",
          commentedAgo: "4 days ago",
          commentText:
            "Would love a GitHub repo or demo link if you plan to share the code. Great read!",
          likesCount: 41,
        },
        {
          id: 9,
          commentorName: "Ananya Roy",
          commentedAgo: "5 days ago",
          commentText:
            "This article deserves more attention. Extremely well-structured and practical.",
          likesCount: 22,
        },
        {
          id: 10,
          commentorName: "Karan Jain",
          commentedAgo: "5 days ago",
          commentText:
            "The examples felt so real! I'm curious how much time went into creating those models.",
          likesCount: 37,
        },
      ],
    };
  },
};
</script>
