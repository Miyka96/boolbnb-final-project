<template>
  <div>
    <br />
    <br />
    <br />
    <div class="container p-4 bg-light d-none d-md-block">
      <div class="row">
        <div class="col-12 p-0">
          <h2>{{ house.title }}</h2>
          <h4>
            Annuncio di
            <span v-for="user in user" :key="user.id">
              {{ user.name }}
            </span>
          </h4>
        </div>
      </div>

      <div class="row rounded-lg overflow-hidden">
        <div class="collage-wrapper">
          <figure class="big-pic">
            <img
              src="https://as2.ftcdn.net/v2/jpg/00/06/67/49/1000_F_6674908_DkuzLQe3Yznwoh2xC1WPyMIYnaOaaNpd.jpg"
              :alt="house.name"
            />
          </figure>
          <div class="small-pics">
            <figure>
              <img
                src="https://as2.ftcdn.net/v2/jpg/00/06/67/49/1000_F_6674908_DkuzLQe3Yznwoh2xC1WPyMIYnaOaaNpd.jpg"
                :alt="house.name"
              />
            </figure>
            <figure>
              <img
                src="https://as2.ftcdn.net/v2/jpg/00/06/67/49/1000_F_6674908_DkuzLQe3Yznwoh2xC1WPyMIYnaOaaNpd.jpg"
                :alt="house.name"
              />
            </figure>
            <figure>
              <img
                src="https://as2.ftcdn.net/v2/jpg/00/06/67/49/1000_F_6674908_DkuzLQe3Yznwoh2xC1WPyMIYnaOaaNpd.jpg"
                :alt="house.name"
              />
            </figure>
            <figure>
              <img
                src="https://as2.ftcdn.net/v2/jpg/00/06/67/49/1000_F_6674908_DkuzLQe3Yznwoh2xC1WPyMIYnaOaaNpd.jpg"
                :alt="house.name"
              />
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- ******************** SOLO MOBILE ******************** -->

    <div class="container-fluid d-md-none d-sm-block bg-light">
      <div class="row py-2">
        <div class="col-12 text-center">
          <h2>{{ house.title }}</h2>
          <h4>
            Annuncio di
            <span v-for="user in user" :key="user.id">
              {{ user.name }}
            </span>
          </h4>
        </div>
      </div>

      <div class="row">
        <div class="col-12 p-0">
          <img
            class="box-shadow"
            src="https://as2.ftcdn.net/v2/jpg/00/06/67/49/1000_F_6674908_DkuzLQe3Yznwoh2xC1WPyMIYnaOaaNpd.jpg"
            :alt="house.name"
          />
        </div>
      </div>
    </div>

    <!-- ************************************************************ -->

    <div class="container p-4 bg-light">
      <div class="row pb-2">
        <div class="col-12 p-0">
          <h2>{{ position.address }}, {{ position.city }}</h2>
          <h4 class="text-danger">€{{ house.cost_per_night }} per notte</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-lg-8 p-0">
          <strong>
            <h5>Descrizione</h5>
          </strong>
          <p>
            Questa location ha
            {{ house.toilets_num }}
            <span v-if="house.toilets_num == 1">bagno.</span>
            <span v-else>bagni.</span>
          </p>
          <p>
            <span v-if="house.beds_num == 1">C'è</span>
            <span v-else>Ci sono</span>
            {{ house.beds_num }}
            <span v-if="house.beds_num == 1">comodissimo</span>
            <span v-else>comodissimi</span>
            <span v-if="house.beds_num == 1">posto</span>
            <span v-else>posti</span>
            letto!
          </p>
          <p>Bagni: {{ house.toilets_num }}</p>
          <p>Bagni: {{ house.toilets_num }}</p>
          <p>Bagni: {{ house.toilets_num }}</p>
        </div>

        <div class="col-sm-12 col-lg-4 p-0 pl-lg-4 pl-sm-0">
          <strong>
            <h5>Servizi extra</h5>
          </strong>
          <ul>
            <li v-for="service in services" :key="service.id">
              {{ service.name }}
            </li>
          </ul>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-sm-12 col-lg-6">
          <div class="row text-center">
            <div class="col-6 p-0">
              <h4>Check-in date</h4>
              <input type="date" name="" id="" />
            </div>
            <div class="col-6 p-0">
              <h4>Check-out date</h4>
              <input type="date" name="" id="" />
            </div>
          </div>
          <div class="row text-center py-5">
            <div class="col-12 p-0">
              <h4>Total price</h4>
              <p>€10,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p v-for="el in services" :key="el.id" class="card-text">
      {{ el.name }}
    </p>
    <router-link
      tag="a"
      :to="{ name: 'house.message', params: { id: $route.params.id } }"
      >Invia Messaggio</router-link
    >
  </div>
</template>

<script>
export default {
  data() {
    return {
      house: [],
      position: [],
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
}

.collage-wrapper {
  width: 100%;
  height: 480px;
  display: flex;

  .big-pic {
    width: 85%;
    height: 100%;
  }

  .small-pics {
    width: 15%;
    height: 100%;

    figure {
      margin: 0;
      padding: 0;
      height: calc(100% / 4);
    }
  }
}

.box-shadow {
  box-shadow: 0 4px 10px -4px #333;
}

ul {
  list-style: none;
}

ul li:before {
  content: "✔️ ";
}
</style>