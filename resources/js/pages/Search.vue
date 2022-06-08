<template>
  <div class="mt-5 py-5">
    <div class="container">
      <h1 class="pt-4">
        Case disponibili a <span style="color: #ff385c">{{ queryParams }}</span>
      </h1>
      lat: {{ lat }} lon: {{ lon }}
    </div>
    <FilterComponent />
  </div>
</template>

<script>
import FilterComponent from "../components/Search/FilterComponent.vue";
import state from '../store';

export default {
  name: "Search",

  components: {
    FilterComponent,
  },

  data() {
    return {
      houses: [],
      lastPage: 0,
      currentPage: 1,
      queryParams: this.$route.params.query,
      lat: "",
      lon: "",
    };
  },
  methods: {
    ttSearch() {
      axios
        .get(
          `https://api.tomtom.com/search/2/search/${this.queryParams}.json?radius=20000&minFuzzyLevel=1&maxFuzzyLevel=2&view=Unified&relatedPois=off&key=DINngHSiTz58Z5fDF5pThkg1IrJA87je`
        )
        .then((res) => {
          this.lat = res.data.results[0].position.lat
          this.lon = res.data.results[0].position.lon
          console.log('salva nello store')
          state.targetPosition.lat = res.data.results[0].position.lat
          state.targetPosition.long = res.data.results[0].position.lon
        });
    },
  },
  mounted() {
    this.ttSearch();
  },
};
</script>

<style lang="scss" scoped>
</style>