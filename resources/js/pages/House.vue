<template>
  <div class="container py-5"> 

    <div class="container p-4 bg-light d-none d-md-block">
      <div class="row py-5">
        <div class="col-12 p-0 mt-5">
          <h2>{{ house.title }}</h2>
          <h6>
            Annuncio di
            <span class="ms__font"
              >{{ house.user.name }}</span
            >
          </h6>
        </div>
      </div>

      <div class="row rounded-lg overflow-hidden py-2">
        <div class="thumb-wrapper">
          <figure class="big-pic">
            <img :src="house.image" :alt="house.name" />
          </figure>
        </div>
      </div>
    </div>

    <!-- ******************** SOLO MOBILE ******************** -->

    <div class="container-fluid d-md-none d-sm-block bg-light">
      <div class="row py-5">
        <div class="col-12 text-center mt-5">
          <h2>{{ house.title }}</h2>
          <h6>
            Annuncio di
            <span class="ms__font"
              >{{ house.user.name }} {{ house.user.surname }}</span
            >
          </h6>
        </div>
      </div>

      <div class="row">
        <div class="col-12 p-0">
          <img :src="house.image" :alt="house.name" />
        </div>
      </div>
    </div>

    <!-- ************************************************************ -->

    <div class="container p-4 bg-light">
      <div class="row pb-2">
        <div class="col-12 p-0">
          <h2>{{ position.address }}, {{ position.city }}</h2>
          <h5 class="ms__price">€{{ house.cost_per_night }} per notte</h5>
        </div>
      </div>

      <div class="row py-2">
        <div class="col-sm-12 col-lg-8 p-0">
          <strong>
            <h3>Descrizione</h3>
          </strong>
          <p>Questa struttura è grande {{ house.square_meters }}m².</p>
          <p>
            <span v-if="house.toilets_num == 1">È presente</span>
            <span v-else>Sono presenti</span>
            {{ house.toilets_num }}
            <span v-if="house.toilets_num == 1">bagno</span>
            <span v-else>bagni</span>
            <span v-if="house.toilets_num == 1">super confortevole.</span>
            <span v-else>super confortevoli.</span>
          </p>
          <p>
            <span v-if="house.beds_num == 1">C'è</span>
            <span v-else>Ci sono</span>
            {{ house.beds_num }}
            <span v-if="house.beds_num == 1">comodissimo</span>
            <span v-else>comodissimi</span>
            <span v-if="house.beds_num == 1">posto</span>
            <span v-else>posti</span>
            letto! 😌
          </p>
          <p>
            <span v-if="house.room_num == 1">
              {{ house.room_num }} stanza comoda e accogliente, con tutto ciò di
              cui hai bisogno durante la tua permanenza.
            </span>
            <span v-else-if="house.room_num >= 5">
              {{ house.room_num }} stanze. <em class="text-danger">WOW!</em> con
              tutto questo spazio a disposizione il tuo soggiorno sarà un vero
              spasso! 🤩
            </span>
            <span v-else>
              {{ house.room_num }} stanze comode e accoglienti, con tutto ciò di
              cui avete bisogno durante la vostra permanenza.
            </span>
          </p>
        </div>

        <div class="col-sm-12 col-lg-4 p-0 pl-lg-4 pl-sm-0">
          <strong>
            <h3>Servizi extra</h3>
          </strong>
          <ul>
            <li
              class="text-light"
              v-for="service in services"
              :key="service.id"
            >
              {{ service.name }}
            </li>
          </ul>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-12 pt-2 text-center">
          <router-link
            class="btn rounded-pill text-light ms__btn p-2 rounded"
            tag="a"
            :to="{ name: 'house.message', params: { id: $route.params.id } }"
            >Invia messaggio</router-link
          >
        </div>
      </div>
    </div>

    
    <div class="py-2">
        <Map :lat="this.lat" :lon="this.lon"/>
    </div>
    
  </div>
</template>

<script>
import Map from '../components/Map.vue'
export default {
  components: {
    Map
  },

  data() {
    return {
      house: [],
      position: [],
      lat:"",
      lon:"",
      services: [],
      visual_data: {
        house_id: this.$route.params.id,
        ip: "",
        date: "",
      },
    };
  },
  methods: {
    fetchHouse() {
      axios
        .get(`/api/houses/${this.$route.params.id}`)
        .then((res) => {
          this.house = res.data.house;
          this.position = res.data.house.position;
          this.lat= res.data.house.position.latitude;
          this.lon=res.data.house.position.longitude;
          this.services = res.data.house.services;

          console.log(res.data.house);
        })
        .catch((err) => {
          console.warn(err);
        });
    },
    visual() {
      axios
        .post("/send/visualization", this.visual_data)
        .then((res) => {
          console.log(res.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },

  mounted() {
    this.fetchHouse();
    this.visual();
  },
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
  border-radius:10px;
}

.thumb-wrapper {
  width: 100%;
  height: 480px;

  .big-pic {
    width: 100%;
    height: 100%;
  }

  figure {
    margin: 0;
    padding: 0;
    height: calc(100% / 4);
  }
}

.box-shadow {
  box-shadow: 0 4px 10px -4px #333;
}

ul {
  display: flex;
  flex-direction: column;
  gap: 20px;
  list-style: none;

  li {
    max-width: 90px;
    padding: 5px;
    border-radius: 20px;
    text-align: center;
    text-transform: uppercase;
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
      "Lucida Sans", Arial, sans-serif;
    font-size: 12px;
    font-weight: 900;
    background: #ff385c;
  }
}

.ms__btn {
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  font-weight: 900;
  background: #ff385c;
}

.ms__font {
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  font-weight: 900;
  font-size: 18px;
  color: #ff385c;
}

.ms__price {
  font-weight: 900;
  color: #ff385c;
}
</style>