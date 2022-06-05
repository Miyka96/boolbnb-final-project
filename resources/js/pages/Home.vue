<template>
  <div id="home">
    <Banner />
    <Navbar />
    <Polaroid />
    <SectionVue />
    <CardsShowcase />
    <Footer />
  </div>
</template>

<script>
import Banner from "../components/Home/MainBanner.vue";
import CardsShowcase from "../components/CardShowcase.vue";
import SectionVue from "../components/Home/SectionVue.vue";
import Navbar from "../components/Search/MainNavbar.vue";
import Polaroid from "../components/Home/PolaroidVue.vue";
import Footer from "../components/FooterComponent.vue";

export default {
  components: {
    Banner,
    CardsShowcase,
    SectionVue,
    Navbar,
    Polaroid,
    Footer,
  },
};
</script>

<style lang="scss" scoped>
</style>