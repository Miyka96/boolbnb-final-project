<template>
   <div id="home">
      <Banner/>
      <SectionVue/>
      <CardsShowcase/>
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
      SectionVue,
   },
   
}
</script>

<style lang="scss" scoped>

</style>