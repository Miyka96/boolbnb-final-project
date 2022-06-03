<template>
   <div id="home">
      <Banner/>
      <CardsShowcase/>
      <!-- <PolaroidVue/> -->
   </div>
</template>

<script>
import Banner from '../components/MainbannerComponent.vue';
import CardsShowcase from '../components/CardshocaseComponent.vue';
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