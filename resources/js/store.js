import Vue from 'vue';

// Inserire qui variabili da passare ai componenti
const state = Vue.observable(
   {
      bannerText: ['Enjoy', 'your', 'stay'],
      polaroids: [
        {
          title: 'Milano',
          img: 'https://images.unsplash.com/photo-1610016302534-6f67f1c968d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1075&q=80',
          query: 'Milano'
        },
        {
          title: 'Napoli',
          img: 'https://images.unsplash.com/photo-1581242125825-f9faf0f350bd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
          query: 'Napoli'
        },
        {
          title: 'Palermo',
          img: 'https://images.unsplash.com/photo-1561280618-d4a6f7d04e79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80',
          query: 'Palermo'
        },
        {
          title: 'Roma',
          img: 'https://images.unsplash.com/photo-1515542622106-78bda8ba0e5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
          query: 'Roma'
        }
      ],
      targetPosition: {
        query: '',
        lat: 0,
        long: 0,
      }
   }
);

export default state;

// APPUNTI MICA ----


   export function thumbAnimation(){
   let tl = gsap.timeline({default: {duration: 3}});

   tl.to('.card', {borderTopColor: '#bad', delay: 0.3})
   .to('.card', {borderRightColor: '#bad'}, '-=0.2')
   .to('.card', {borderBottomColor: '#bad'}, '-=0.2')
   .to('.card', {borderLeftColor: '#bad'}, '-=0.2')

   // animation for img-wrapper 
   gsap.fromTo('.img-wrapper', {height: 0, backgroundColor: 'transparent'}, {delay: 1, duration: 1, height: '500px', backgroundColor: '#bad'})

   // animation
   gsap.to('.img', {delay: 2, duration: 0.5, opacity: 1})
}