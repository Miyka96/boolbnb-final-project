import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import LandingPage from '../pages/LandingPage.vue';
import Search from '../pages/Search.vue';

const routes = [
   {
      path: '/home',
      name: 'home',
      component: LandingPage,
   },
   {
      path: '/search',
      name: 'search',
      component: Search,
   },
];

const router = new VueRouter({
   mode: 'history',
   routes
});

export default router;