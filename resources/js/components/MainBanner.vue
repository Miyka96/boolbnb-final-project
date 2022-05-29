<template>
   <section id="main-banner" class="debug">
      <!-- [TODO] AGGIUNGERE SRC VIDEO -->
      <video autoplay muted loop playsinline>
         <source src="" type="video/mp4">
      </video>
      <h2 :class="[activeSlide === i ? 'active' : '', 'banner-text']" v-for="(el,i) in slideWords" :key="i">{{ slideWords[i] }}</h2>
   </section>
</template>

<script>
import state from '../store.js';

export default {
   name: 'MainBanner',
   props: {

   },
   data() {
      return {
         slideWords: this.uppercaseArray( state.bannerText ),
         activeSlide: 0,
         interval: null,
      }
   },
   methods: {
      startInterval: function() { // gestisce clock per carousel del testo
         this.interval = setInterval(() => {
            if(this.activeSlide === ( this.slideWords.length - 1 ) ) {
               this.activeSlide = 0;
            } else {
               this.activeSlide++;
            }
         }, 2000);
      },
      uppercaseArray: function(array) { // restituisce un nuovo array con stringhe maiuscole
         let newArray = []

         array.forEach((el,i) => {
            newArray.push( el.toUpperCase() )
         });

         return newArray
      }
   },
   mounted() {
      this.startInterval();
   },
   beforeDestroy() {
      clearInterval(this.interval);
   }  
}
</script>

<style lang="scss" scoped>
// [TODO] rimuover cdn font e aggiungere file
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');

#main-banner {
   width: 100%;
   height: min(760px, 100vh);
   overflow: hidden;
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;

   video {
      min-width: 100%;
      max-width: 100%;
      min-height: 100%;
      max-height: 100%;
      object-fit: cover;
   }

   .banner-text {
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      line-height: min(760px, 100vh);
      background-color: #d5dce4;
      font-size: 30vw;
      font-family: 'Roboto', sans-serif;
      text-align: center;
      text-transform: uppercase;
      color: #000;
      mix-blend-mode: screen;
      user-select: none;
      margin-bottom: 0;

      &.active {
         display: inline;
      }
   }
}

// [TODO] rimuovere debug quando il componente è pronto
.debug {
   video {
      background-color: blue;
   }
}
</style>