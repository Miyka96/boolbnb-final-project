<template>
   <div id="home">
      <Banner/>
      <Navbar/>
      <SectionVue/>
      <CardsShowcase/>
   </div>
</template>

<script>
import Banner from '../components/MainBanner.vue';
import CardsShowcase from '../components/CardShowcase.vue';
import SectionVue from '../components/SectionVue.vue';
import Navbar from '../components/NavbarComponent.vue';

export default {
   components: {
      Banner,
      CardsShowcase,
      SectionVue,
      Navbar
   },
   
}
</script>

<style lang="scss" scoped>

</style>