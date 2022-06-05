<template>
   <section id="main-banner" class="debug">
      <!-- [TODO] AGGIUNGERE SRC VIDEO -->
      <!-- <video autoplay muted loop playsinline>
         <source src="" type="video/mp4">
      </video> -->
      <!-- [TODO] IMMAGINE PLACEHOLDER -->
      <figure>
         <img src="https://images.unsplash.com/photo-1517497052582-25e6fe8ec001?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="">
      </figure>
      <h2 :class="[activeSlide === i ? 'active' : '', 'banner-text']" v-for="(el,i) in slideWords" :key="i">{{ slideWords[i] }}</h2>
   </section>
</template>

<script>
import state from '../../store';

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

   // [TODO] da rimuovere quando il video sarà inserito
   figure {
      min-width: 100%;
      max-width: 100%;
      min-height: 100%;
      max-height: 100%;
      // object-fit: cover;
      margin: 0;

      img {
         min-width: 100%;
         object-fit: cover;
         object-position: center;
      }
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