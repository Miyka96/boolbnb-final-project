<template>
  <div class="container p-5">
    <br />

    <h1>Casa n. {{ $route.params.id }}</h1>

    <div v-for="el in houses" :key="el.id" class="card-lg" style="width: 18rem">
      <img
        src="https://picsum.photos/300/300"
        class="card-img-top"
        :alt="el.title"
      />
      <div class="card-body">
        <h5 class="card-title">{{ el.title }}</h5>
        <p class="card-text">
          <strong>Prezzo per notte:</strong>
          <br />
          €{{ el.cost_per_night }}
        </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-danger" v-if="el.is_visible == 1">
          Annuncio in vetrina!
        </li>
        <li class="list-group-item" v-else>Annuncio standard.</li>
        <li class="list-group-item">{{ el.square_meters }}m²</li>
        <li class="list-group-item" v-if="el.toilets_num == 1">
          {{ el.toilets_num }} bagno
        </li>
        <li class="list-group-item" v-else>{{ el.toilets_num }} bagni</li>
      </ul>
    </div>

    <!-- <div v-for="mess in el.messages" :key="mess.id">
      {{ mess.name }}
    </div> -->

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
    };
  },
  methods: {
    fetchHouse() {
      axios
        .get(`/api/houses/${this.$route.params.id}`)
        .then((res) => {
          this.houses = res.data;
          console.log(res.data.house);
        })
        .catch((err) => {
          console.warn(err);
        });
    },
  },
  mounted() {
    this.fetchHouse();
  },
};
</script>

<style lang="scss" scoped>
</style>