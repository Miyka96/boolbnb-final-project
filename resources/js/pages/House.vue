<template>
   <div class="p-5">
      <h1>Casa</h1>
      <h2>{{ $route.params.id }}</h2>

      <div v-for="el in houses" :key="el.id">
         {{el.title}}
         {{el.beds_num}}
         <div v-for="mess in el.messages" :key="mess.id">
            {{mess.name}}
         </div>

         
      </div>

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
         houses: [],
      }
   },
   methods: {
      fetchHouse() {
         axios.get(`/api/houses/${ this.$route.params.id }`)
         .then( res => {
            this.houses = res.data
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