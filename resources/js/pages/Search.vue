<template>
   <div class="container mt-5 py-5">
      <h1 class="pt-4">Case disponibili a <span style="color:#FF385C;">{{queryParams}}</span></h1>
      lat: {{lat}}
      lon: {{lon}}
      <FilterComponent/>
   </div>
</template>

<script>
// import Navbar from '../components/Search/SearchBar.vue'
import FilterComponent from '../components/Search/FilterComponent.vue'

export default {
   name: 'Search',

   components:{
      // Navbar,
      FilterComponent,
   },

   data() {
      return {
         houses: [],
         lastPage: 0,
         currentPage: 1,
         queryParams: this.$route.params.query,
         lat:'',
         lon:'',

      }
   },
   methods: {
      // fetchHouses(page = 1) { //default value
      //    axios.get('/api/houses', {
      //       params: {
      //          page  // equivalente a page: page
      //       }
      //    })
      //    .then( res => {
      //       // console.log( res.data )
      //       const { houses } = res.data
      //       const { data, last_page, current_page } = houses
      //       this.houses = data
      //       this.currentPage = current_page
      //       this.lastPage = last_page
      //    })
      //    .catch( err => {
      //       console.warn( err )
      //    })
      // },
      ttSearch(){
         axios.get(`https://api.tomtom.com/search/2/search/${this.queryParams}.json?radius=20000&minFuzzyLevel=1&maxFuzzyLevel=2&view=Unified&relatedPois=off&key=DINngHSiTz58Z5fDF5pThkg1IrJA87je`)
        .then( res =>{
         //   console.log(res.data.results)
           this.lat = res.data.results[0].position.lat
           this.lon = res.data.results[0].position.lon
      })
      }
   },

   mounted() {
      // this.fetchHouses();
      this.ttSearch();
   }
}
</script>

<style lang="scss" scoped>

</style>