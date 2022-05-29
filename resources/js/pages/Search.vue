<template>
   <div class="container">
     <h2>Ricerca avanzata</h2>
   </div>
</template>

<script>
export default {
   name: 'Search',
   data() {
      return {
         houses: [],
         lastPage: 0,
         currentPage: 1,
      }
   },
   methods: {
      fetchHouses(page = 1) { //default value
         axios.get('/api/houses', {
            params: {
               page  // equivalente a page: page
            }
         })
         .then( res => {
            console.log( res.data )
            const { houses } = res.data
            const { data, last_page, current_page } = houses
            this.houses = data
            this.currentPage = current_page
            this.lastPage = last_page
         })
         .catch( err => {
            console.warn( err )
         })
      }
   },
   mounted() {
      this.fetchHouses();
   }
}
</script>

<style lang="scss" scoped>

</style>