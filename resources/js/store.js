import Vue from 'vue';

// Inserire qui variabili da passare ai componenti
const state = Vue.observable(
   {
      bannerText: ['Enjoy', 'your', 'trip'], // solo stringhe
      // validations: [
      //    house = {
      //       title: {
      //          required: true,
      //          minlength: 5,
      //          maxlength: 255
      //       }
      //    },
      // ]
   }
);

export default state;

// Controlli client side
export function houseValidation() {
   console.log('ciao')
}


// animazione componente SectionVue, che ovviamente qui da errori quindi ggwp 

// export function thumbAnimation(){
//    let tl = gsap.timeline({default: {duration: 3}});

//    tl.to('.card', {borderTopColor: '#bad', delay: 0.3})
//    .to('.card', {borderRightColor: '#bad'}, '-=0.2')
//    .to('.card', {borderBottomColor: '#bad'}, '-=0.2')
//    .to('.card', {borderLeftColor: '#bad'}, '-=0.2')

//    // animation for img-wrapper 
//    gsap.fromTo('.img-wrapper', {height: 0, backgroundColor: 'transparent'}, {delay: 1, duration: 1, height: '500px', backgroundColor: '#bad'})

//    // animation
//    gsap.to('.img', {delay: 2, duration: 0.5, opacity: 1})
// }