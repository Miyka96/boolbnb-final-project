<template>
   <div id="home">
      <Banner/>
      <SectionVue/>
      <CardsShowcase/>
   </div>
</template>

<script>
import Banner from '../components/MainBanner.vue';
import CardsShowcase from '../components/CardShowcase.vue';
import SectionVue from '../components/SectionVue.vue';

export default {
   components: {
      Banner,
      CardsShowcase,
      SectionVue
   },
   
}
</script>

<style lang="scss" scoped>

</style>