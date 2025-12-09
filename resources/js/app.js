import '../css/app.css';
import './bootstrap';
import './alpine/app-state';

import { createApp } from 'vue';

import FeaturedArticleCatalog from './Components/Articles/Catalog/FeaturedArticleCatalog.vue';
import CompleteArticleCatalog from './Components/Articles/Catalog/CompleteArticleCatalog.vue';
import ArticleComposer from './Components/Articles/Composer/ArticleComposer.vue';
import CommentSection from './Components/Articles/Comments/CommentSection.vue';
import CommentCard from './Components/Articles/Comments/CommentCard.vue';

const featuredCatalogElement = document.querySelector('#world-of-articles');
const completeCatalogElement = document.querySelector('#complete-articles');
const articleComposerElement = document.querySelector('#article-composer');
const commentSectionElement = document.querySelector('#comment-section');

if (featuredCatalogElement) {
    const featuredCatalog = createApp({});
    featuredCatalog.component('featured-article-catalog', FeaturedArticleCatalog);
    featuredCatalog.mount('#world-of-articles');
}

if (completeCatalogElement) {
    const completeCatalog = createApp({});
    completeCatalog.component('complete-article-catalog', CompleteArticleCatalog);
    completeCatalog.mount('#complete-articles');
}

if (articleComposerElement) {
    const articleComposer = createApp({});
    articleComposer.component('article-composer', ArticleComposer);
    articleComposer.mount('#article-composer');
}

if (commentSectionElement) {
    const commentSection = createApp({});
    commentSection.component('comment-section', CommentSection);
    commentSection.component('comment-card', CommentCard);
    commentSection.mount('#comment-section');
}
