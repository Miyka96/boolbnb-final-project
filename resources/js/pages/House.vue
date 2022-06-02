<template>
  <div class="container p-5">
    <br />

    <h1>Casa n. {{ $route.params.id }}</h1>

    <div class="card-lg" style="width: 18rem">
      <img
        src="https://picsum.photos/300/300"
        class="card-img-top"
        :alt="house.title"
      />
      <div class="card-body">
        <h5 class="card-title">{{ house.title }}</h5>
        <p class="card-text">
          <strong>Prezzo per notte:</strong>
          <br />
          €{{ house.cost_per_night }}
        </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-danger" v-if="house.is_visible == 1">
          Annuncio in vetrina!
        </li>
        <li class="list-group-item" v-else>Annuncio standard.</li>
        <li class="list-group-item">{{ house.square_meters }}m²</li>
        <li class="list-group-item" v-if="house.toilets_num == 1">
          {{ house.toilets_num }} bagno
        </li>
        <li class="list-group-item" v-else>{{ house.toilets_num }} bagni</li>
      </ul>
        <p class="card-text">
          <strong>Posizione</strong>
          <br />
          {{ position.address }}
          <br>
          {{position.city}}
          <br>
          {{position.country}}
        </p>

        <strong>Servizi</strong>
        <p v-for="el in services" :key="el.id" class="card-text">
          {{ el.name }}
        </p>
      <router-link tag="a" :to="{ name: 'house.message', params: { id: $route.params.id } }">Invia Messaggio</router-link>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      house: [],
      position:[],
      services:[],
      visual_data: {
        house_id: this.$route.params.id,
        ip: '',
        date:''
      }
    };
  },
  methods: {
  fetchHouse() {
      axios
        .get(`/api/houses/${this.$route.params.id}`)
        .then((res) => {
          this.house = res.data.house;
          this.position= res.data.house.position
          this.services= res.data.house.services

          console.log(res.data.house);
        })
        .catch((err) => {
          console.warn(err);
        });
    },
  visual(){
      axios
        .post("/send/visualization", this.visual_data)
        .then((res) => {
            console.log(res.data)
          })
        .catch((error) => {
          console.log(error);
          })
    }
  },

  mounted() {
    this.fetchHouse();
    this.visual();
  },
};
</script>

<style lang="scss" scoped>
</style>