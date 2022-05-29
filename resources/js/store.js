import Vue from 'vue';

// Inserire qui variabili da passare ai componenti
const state = Vue.observable(
   {
      bannerText: ['Enjoy', 'your', 'trip'] // solo stringhe
   }
);

export default state;