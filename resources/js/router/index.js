import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import LandingPage from '../pages/LandingPage.vue';
import Search from '../pages/Search.vue';

const routes = [
   {
      path: '/',
      name: 'home',
      component: LandingPage,
      meta: {
         title: 'WowLidays'
      }
   },
   {
      path: '/search',
      name: 'search',
      component: Search,
      meta: {
         title: 'WowLidays'
      }
   },
];

const router = new VueRouter({
   mode: 'history',
   routes
});

// aggiunto meta title a viste vueRouter

router.beforeEach((toRoute, fromRoute, next) => {
   window.document.title = toRoute.meta.title;

   next();
});

export default router;