<template>
  <div class="flex">
    <div class="flex-1">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-12">
        <div
          class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 sm:mb-8 gap-4"
        >
          <button
            @click="currentPage = 'home'"
            class="flex items-center space-x-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors"
          >
            <i class="fas fa-arrow-left"></i>
            <span class="text-sm sm:text-base" @click="goBack">Back to Home</span>
          </button>
          <div class="flex items-center space-x-3 w-full sm:w-auto">
            <button
              class="flex-1 sm:flex-none px-4 sm:px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-sm sm:text-base"
            >
              <i class="far fa-save mr-2"></i>Save Draft
            </button>
            <button
              @@click="previewMode = !previewMode"
              class="flex-1 sm:flex-none px-4 sm:px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-sm sm:text-base"
            >
              <i class="far fa-eye mr-2"></i
              ><span v-text="previewMode ? 'Edit' : 'Preview'"></span>
            </button>
            <button
              class="flex-1 sm:flex-none px-4 sm:px-6 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors text-sm sm:text-base"
            >
              <i class="fas fa-paper-plane mr-2"></i>Publish
            </button>
          </div>
        </div>

        <div v-show="!previewMode">
          <input
            v-model="postTitle"
            type="text"
            placeholder="Enter your article title..."
            class="w-full font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 border-none focus:outline-none mb-6 sm:mb-8 bg-transparent"
          />

          <div class="mb-6 sm:mb-8">
            <div
              class="border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-2xl p-8 sm:p-12 text-center hover:border-indigo-400 dark:hover:border-indigo-500 transition-colors cursor-pointer"
            >
              <i
                class="fas fa-cloud-upload-alt text-4xl sm:text-5xl text-gray-400 dark:text-gray-500 mb-4"
              ></i>
              <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 mb-2">
                Click to upload cover image
              </p>
              <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">
                PNG, JPG up to 10MB
              </p>
            </div>
          </div>

          <div
            class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-t-xl p-3 sm:p-4 flex flex-wrap items-center gap-2 sm:gap-3"
          >
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Bold"
            >
              <i class="fas fa-bold"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Italic"
            >
              <i class="fas fa-italic"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Underline"
            >
              <i class="fas fa-underline"></i>
            </button>
            <div class="w-px h-6 bg-gray-300 dark:bg-gray-600"></div>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Heading"
            >
              <i class="fas fa-heading"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Quote"
            >
              <i class="fas fa-quote-right"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Code"
            >
              <i class="fas fa-code"></i>
            </button>
            <div class="w-px h-6 bg-gray-300 dark:bg-gray-600"></div>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Bullet List"
            >
              <i class="fas fa-list-ul"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Numbered List"
            >
              <i class="fas fa-list-ol"></i>
            </button>
            <div class="w-px h-6 bg-gray-300 dark:bg-gray-600"></div>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Link"
            >
              <i class="fas fa-link"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Image"
            >
              <i class="fas fa-image"></i>
            </button>
            <button
              class="w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors"
              title="Video"
            >
              <i class="fas fa-video"></i>
            </button>
          </div>

          <textarea
            v-model="editorContent"
            placeholder="Start writing your story..."
            class="w-full min-h-96 sm:min-h-[500px] px-4 sm:px-6 py-4 sm:py-6 border border-t-0 border-gray-200 dark:border-gray-700 dark:bg-gray-800 dark:text-white rounded-b-xl focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 text-base sm:text-lg text-gray-800 dark:text-gray-200 leading-relaxed resize-none"
          ></textarea>

          <div class="mt-6 sm:mt-8">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3"
              >Tags</label
            >
            <div class="flex flex-wrap gap-2 mb-3">
              <template v-for="tag in postTags" :key="tag">
                <span
                  class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 rounded-full text-sm flex items-center space-x-2"
                >
                  <span v-text="tag"></span>
                  <button
                    @click="postTags = postTags.filter((t) => t !== tag)"
                    class="hover:text-indigo-900 dark:hover:text-indigo-100"
                  >
                    <i class="fas fa-times text-xs"></i>
                  </button>
                </span>
              </template>
            </div>
            <input
              type="text"
              placeholder="Add tags (press Enter)"
              @keydown.enter.prevent="
                if ($event.target.value.trim()) {
                  postTags.push($event.target.value.trim());
                  $event.target.value = '';
                }
              "
              class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 text-sm sm:text-base"
            />
          </div>
        </div>

        <div
          v-show="previewMode"
          class="prose prose-sm sm:prose-base lg:prose-lg max-w-none dark:prose-invert"
        >
          <h1
            class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6 sm:mb-8"
            v-text="postTitle || 'Your Article Title'"
          ></h1>
          <div
            class="text-base sm:text-lg text-gray-700 dark:text-gray-300 leading-relaxed whitespace-pre-wrap"
            v-text="editorContent || 'Your article content will appear here...'"
          ></div>
          <div class="flex flex-wrap gap-2 mt-8">
            <template v-for="tag in postTags" :key="tag">
              <span
                class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm rounded-full"
                v-text="tag"
              ></span>
            </template>
          </div>
        </div>
      </div>
    </div>

    <aside
      class="hidden lg:block w-80 xl:w-96 border-l border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-6 space-y-6 overflow-y-auto"
    >
      <div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
          Publishing Settings
        </h3>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Category</label
          >
          <select
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400"
          >
            <option>Select category</option>
            <option>Technology</option>
            <option>Design</option>
            <option>Business</option>
            <option>Lifestyle</option>
            <option>Travel</option>
          </select>
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Visibility</label
          >
          <div class="space-y-2">
            <label class="flex items-center space-x-3 cursor-pointer">
              <input
                type="radio"
                name="visibility"
                checked
                class="w-4 h-4 text-indigo-600"
              />
              <span class="text-sm text-gray-700 dark:text-gray-300">Public</span>
            </label>
            <label class="flex items-center space-x-3 cursor-pointer">
              <input type="radio" name="visibility" class="w-4 h-4 text-indigo-600" />
              <span class="text-sm text-gray-700 dark:text-gray-300">Private</span>
            </label>
            <label class="flex items-center space-x-3 cursor-pointer">
              <input type="radio" name="visibility" class="w-4 h-4 text-indigo-600" />
              <span class="text-sm text-gray-700 dark:text-gray-300">Unlisted</span>
            </label>
          </div>
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Publish Date</label
          >
          <input
            type="datetime-local"
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400"
          />
        </div>
      </div>

      <div class="border-t border-gray-300 dark:border-gray-600 pt-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
          SEO Settings
        </h3>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Meta Description</label
          >
          <textarea
            placeholder="Brief description for search engines..."
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 resize-none text-sm"
            rows="3"
          ></textarea>
          <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">0/160 characters</p>
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >URL Slug</label
          >
          <input
            type="text"
            placeholder="article-url-slug"
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 text-sm"
          />
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Image Alt Text</label
          >
          <input
            type="text"
            placeholder="Describe the cover image"
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 text-sm"
          />
        </div>
      </div>

      <div class="border-t border-gray-300 dark:border-gray-600 pt-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
          Advanced Options
        </h3>

        <label class="flex items-center justify-between mb-4 cursor-pointer">
          <span class="text-sm text-gray-700 dark:text-gray-300">Allow comments</span>
          <input type="checkbox" checked class="w-5 h-5 text-indigo-600 rounded" />
        </label>

        <label class="flex items-center justify-between mb-4 cursor-pointer">
          <span class="text-sm text-gray-700 dark:text-gray-300">Mark as featured</span>
          <input type="checkbox" class="w-5 h-5 text-indigo-600 rounded" />
        </label>

        <label class="flex items-center justify-between cursor-pointer">
          <span class="text-sm text-gray-700 dark:text-gray-300">Send to newsletter</span>
          <input type="checkbox" class="w-5 h-5 text-indigo-600 rounded" />
        </label>
      </div>

      <div class="border-t border-gray-300 dark:border-gray-600 pt-6">
        <div class="bg-indigo-50 dark:bg-indigo-900/30 rounded-lg p-4">
          <div class="flex items-start space-x-3">
            <i class="fas fa-info-circle text-indigo-600 dark:text-indigo-400 mt-1"></i>
            <div>
              <p class="text-sm font-medium text-gray-900 dark:text-white mb-1">
                Publishing Tips
              </p>
              <ul class="text-xs text-gray-600 dark:text-gray-300 space-y-1">
                <li>• Use clear, descriptive titles</li>
                <li>• Add relevant tags for discovery</li>
                <li>• Optimize images for web</li>
                <li>• Preview before publishing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </aside>
  </div>
</template>

<script>
export default {
  name: "ArticleComposer",
  data() {
    return {
      editorContent: "",
      postTitle: "",
      postTags: [],
      previewMode: false,
    };
  },
  methods() {
    return {
      goBack() {
        alert();
      },
    };
  },
};
</script>
