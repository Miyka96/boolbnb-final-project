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
import Search from '../components/SearchbarComponent.vue';

export default {
   components: {
      Banner,
      CardsShowcase,
      SectionVue,
      Search
   },
   
}
</script>

<style lang="scss" scoped>

</style>