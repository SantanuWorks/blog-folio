import { createRouter, createWebHistory } from "vue-router";

import Dashboard from "../views/Dashboard.vue";
import ArticlesCatalog from "../views/ArticlesCatalog.vue";
import ArticleComposer from "../views/ArticleComposer.vue";
import PortfolioComposer from "../views/PortfolioComposer.vue";

const routes = [
    {
        path: '/',
        component: Dashboard,
        name: 'admin.dashboard',
        meta: {
            title: 'Dashboard'
        }
    },
    {
        path: '/articles/composer',
        name: 'admin.articles.composer',
        component: ArticleComposer,
        meta: {
            title: 'Article Composer'
        }
    },
    {
        path: '/articles/all',
        name: 'admin.articles.index',
        component: ArticlesCatalog,
        meta: {
            title: 'Articles Catalog'
        }
    },
    {
        path: '/portfolio/composer',
        name: 'admin.portfolio.composer',
        component: PortfolioComposer,
        meta: {
            title: 'Portfolio Composer'
        }
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.afterEach((to) => {
    const baseTitle = 'Santanu\'s View';
    document.title = to.meta.title
        ? `${to.meta.title} | ${baseTitle}`
        : baseTitle;
});

export default router;
