<template>
   <div class="p-5">
      <h1>Casa</h1>
      <h2>{{ $route.params.id }}</h2>

      <!-- <form action="{{ route('user.houses.store') }}" method="post">
         @csrf
         <div class="form-group">
            <label for="title">House title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Insert House title"
               value="{{ old('title') }}">
         </div>
      </form> -->
   </div>
</template>

<script>
export default {
   data() {
      return {
         house: null,
      }
   },
   methods: {
      fetchHouse() {
         axios.get(`/api/houses/${ this.$route.params.id }`)
         .then( res => {
            console.log( res.data )
            this.house = res.data.house
         })
         .catch( err => {
            console.warn( err )
         })
      }
   },
   mounted() {
      this.fetchHouse();
   }
}
</script>

<style lang="scss" scoped>

</style>