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
import CardsShowcase from "../components/CardShowcase.vue";
import SectionVue from "../components/Home/SectionVue.vue";
import PolaroidsWrapper from "../components/Home/PolaroidsWrapper.vue";
import Footer from "../components/FooterComponent.vue";

export default {
  components: {
    Banner,
    CardsShowcase,
    SectionVue,
    PolaroidsWrapper,
    Footer,
  },
};
</script>

<style lang="scss" scoped>
</style>