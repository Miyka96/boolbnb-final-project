<template>
  <div id="home">
    <SearchBar/>
    <Banner />
    <!-- <Navbar /> -->
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
// import Navbar from "../components/Navbar/MainNavbar.vue";
import Polaroid from "../components/Home/PolaroidVue.vue";
import Footer from "../components/FooterComponent.vue";
import SearchBar from '../components/Search/SearchBar.vue'

export default {
  components: {
    Banner,
    CardsShowcase,
    SectionVue,
    // Navbar,
    Polaroid,
    Footer,
    SearchBar
  },
};
</script>

<style lang="scss" scoped>
</style>