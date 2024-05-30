import { createWebHistory, createRouter } from 'vue-router';

const routes = [
    {
        path: '',
        name: 'Layout',
        component: () => import('@/js/layouts/Layout.vue'),
        redirect: { name: 'Home' },
        children: [
            {
                path: 'home',
                name: 'Home',
                component: () => import('@/js/views/Home.vue'),
                meta: {
                    isRoot: true,
                },
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior (to, from, savedPosition) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth',
            };
        }
        return savedPosition || { top: 0 };
    },
});

export default router;
