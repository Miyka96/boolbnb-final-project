import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Contact from '../pages/Contact.vue';
import Ciao from '../pages/Ciao.vue';

const routes = [
   {
      path: '/contact',
      name: 'contact',
      component: Contact,
   },
   {
      path: '/ciao',
      name: 'ciao',
      component: Ciao,
   },
];

const router = new VueRouter({
   mode: 'history',
   routes
});

export default router;