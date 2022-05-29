<template>
   <div id="home">
      <Banner/>
      <CardsShowcase/>
   </div>
</template>

<script>
import Banner from '../components/MainBanner.vue';
import CardsShowcase from '../components/CardShowcase.vue';

export default {
   components: {
      Banner,
      CardsShowcase,
   },
   
}
</script>

<style lang="scss" scoped>

</style>