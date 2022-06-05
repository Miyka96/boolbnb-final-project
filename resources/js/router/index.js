import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from '../pages/Home.vue';
import Search from '../pages/Search.vue';
import House from '../pages/House.vue';
import Message from '../pages/Message.vue';

const routes = [
   {
      path: '/',
      name: 'home',
      component: Home,
      meta: {
         title: 'Wowlidays - Home'
      }
   },
   {
      path: '/search/:query?',
      name: 'search',
      component: Search,
      meta: {
         title: 'Wowlidays - Ricerca avanzata'
      }
   },
   {
      path: '/house/:id',
      name: 'house.show',
      component: House,
      meta: {
         title: 'Wowlidays - Dettaglio casa'
      }
   },
   {
      path: '/house/:id/message',
      name: 'house.message',
      component: Message,
      meta: {
         title: 'Wowlidays - Richiedi Informazioni'
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