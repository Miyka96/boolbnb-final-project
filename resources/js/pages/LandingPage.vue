<template>
   <div id="home">
      <Banner/>
      <CardsShowcase/>
      <!-- <PolaroidVue/> -->
   </div>
</template>

<script>
import Banner from '../components/MainBanner.vue';
import CardsShowcase from '../components/CardShowcase.vue';
// import PolaroidVue from '../components/PolaroidVue.vue'

export default {
   components: {
      Banner,
      CardsShowcase,
      // PolaroidVue
   },
   
}
</script>

<style lang="scss" scoped>

</style>