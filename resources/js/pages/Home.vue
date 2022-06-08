<template>
  <div id="home">
    <Banner />
    <PolaroidsWrapper />
    <SectionVue />
    <CardsShowcase />
    <Footer />
  </div>
</template>

<script>
import Banner from "../components/Home/MainBanner.vue";
import CardsShowcase from "../components/Home/CardShowcase.vue";
import SectionVue from "../components/Home/SectionVue.vue";
import PolaroidsWrapper from "../components/Home/PolaroidsWrapper.vue";
import Footer from "../components/FooterComponent.vue";
import GeoSearch from "../components/Geocode.vue"
// import SearchBar from '../components/Search/SearchBar.vue'

export default {
  components: {
    Banner,
    CardsShowcase,
    SectionVue,
    PolaroidsWrapper,
    Footer,
    GeoSearch,
    // SearchBar
  },
};
</script>

<style lang="scss" scoped>
</style>