<template>
  <section id="card-showcase">
    <div class="container-fluid">
      <div class="title pb-4" v-if="this.sponsoredOnly">
        <h2>Non riesci a deciderti?</h2>
        <h1>
          Ecco alcune delle nostre proposte, <span class="highlight">wow!</span>
        </h1>
      </div>
      <div class="row">
        <template v-for="el in filteredHouses">
          <HouseCard
            v-if="
              !positionFilter ||
              calcDistanceLatLong(
                targetLat,
                targetLong,
                el.position.latitude,
                el.position.longitude
              ) <= parseInt(radius)
            "
            :house="el"
            :key="el.id"
          />
        </template>
      </div>
    </div>
  </section>
</template>

<script>
import HouseCard from "../HouseCard.vue";
import state from "../../store";

export default {
  name: "CardShowcase",
  props: {
    sponsoredOnly: {
      Type: Boolean,
      default: false,
    },
    roomNum: {
      type: Number,
      default: 1,
    },
    bedsNum: {
      type: Number,
      default: 1,
    },
    services: {
      type: Array,
      // default: []
    },
    radius: {
      type: Number,
      default: 20,
    },
    positionFilter: {
      type: Boolean,
      default: false,
    },
  },
  components: {
    HouseCard,
  },
  data() {
    return {
      houses: [],
      filteredHouses: [],
      lastPage: 0,
      currentPage: 1,
      // targetLat: state.targetPosition.lat,
      // targetLong: state.targetPosition.long
    };
  },
  computed: {
    targetLat() {
      console.log(state.targetPosition.lat);
      return state.targetPosition.lat;
    },
    targetLong() {
      console.log(state.targetPosition.long);
      return state.targetPosition.long;
    },
  },
  watch: {
    roomNum() {
      this.fetchHouses(1, 100, this.sponsoredOnly, this.roomNum, this.bedsNum);
    },
    bedsNum() {
      this.fetchHouses(1, 100, this.sponsoredOnly, this.roomNum, this.bedsNum);
    },
    services() {
      this.filterHouses();
    },
    houses() {
      this.filterHouses();
    },
    radius() {
      this.fetchHouses(1, 100, this.sponsoredOnly, this.roomNum, this.bedsNum);
    },
  },
  methods: {
    fetchHouses(
      page = 1,
      paginate = 12,
      sponsoredOnly = false,
      roomNum = 1,
      bedsNum = 1
    ) {
      //default value
      axios
        .get(
          `/api/houses-index/${paginate}/${sponsoredOnly}/${roomNum}/${bedsNum}`,
          {
            params: {
              page,
            },
          }
        )
        .then((res) => {
          // console.log("QUI");
          // console.log(res.data);
          const { houses } = res.data;

          if (this.sponsoredOnly) {
            const { data, last_page, current_page } = houses;
            this.houses = data;
            this.currentPage = current_page;
            this.lastPage = last_page;
          } else {
            this.houses = houses;
          }
          console.log(this.houses);
        })
        .catch((err) => {
          console.warn(err);
        });
    },
    filterHouses() {
      // filtra le case per i servizi selezionati
      if (!this.sponsoredOnly && this.services && this.services.length > 0) {
        this.filteredHouses = [];

        this.houses.forEach((house) => {
          const activeServices = [];

          house.services.forEach((service) => {
            activeServices.push(service.id);
          });

          // se i servizi della casa contengono tutti i servizi indicati nelle checkboxes
          if (
            activeServices &&
            this.services.every((element) => {
              return activeServices.includes(element);
            })
          ) {
            this.filteredHouses.push(house);
          }
        });
      } else {
        this.filteredHouses = this.houses;
      }
    },
    calcDistanceLatLong: function (lat1, long1, lat2, long2) {
      // calcola la distanza tra due punti che utilizzano le coordinate lat e long
      const R = 6371e3; // raggio terrestre in metri
      const φ1 = (lat1 * Math.PI) / 180; // φ, λ in radianti
      const φ2 = (lat2 * Math.PI) / 180;
      const Δφ = ((lat2 - lat1) * Math.PI) / 180;
      const Δλ = ((long2 - long1) * Math.PI) / 180;

      // Formula di Haversine
      const a =
        Math.sin(Δφ / 2) * Math.sin(Δφ / 2) +
        Math.cos(φ1) * Math.cos(φ2) * Math.sin(Δλ / 2) * Math.sin(Δλ / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

      return (R * c) / 1000; // in km
    },
  },
  mounted() {
    console.log("state");
    console.log(state.targetPosition);
    this.fetchHouses(1, 100, this.sponsoredOnly, this.roomNum, this.bedsNum);
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";

#card-showcase {
  padding: 80px;
  overflow: hidden;
  width: 100%;

  .container-fluid {
    width: 100%;
    max-width: 1600px;

    .title {
      h1 {
        font-size: 50px;
        font-weight: 700;

        .highlight {
          color: $highlight;
        }
      }
    }

    .row {
      flex-wrap: wrap;
      gap: 36px 24px;
      widows: 100%;

      .col {
        padding: 0;
        margin: 0;
        min-width: calc((100% - 24px * 4) / 5);
        max-width: calc((100% - 24px * 4) / 5);
      }
    }
  }
}

@media screen and (max-width: 1600px) {
  #card-showcase {
    .container-fluid {
      .row {
        .col {
          min-width: calc((100% - 24px * 3) / 4);
          max-width: calc((100% - 24px * 3) / 4);
        }
      }
    }
  }
}

@media screen and (max-width: 1128px) {
  #card-showcase {
    padding: 40px;

    .container-fluid {
      .row {
        .col {
          min-width: calc((100% - 24px * 2) / 3);
          max-width: calc((100% - 24px * 2) / 2);
        }
      }
    }
  }
}

@media screen and (max-width: 950px) {
  #card-showcase {
    .container-fluid {
      .row {
        .col {
          min-width: calc((100% - 24px) / 2);
          max-width: calc((100% - 24px) / 2);
        }
      }
    }
  }
}

@media screen and (max-width: 950px) {
  #card-showcase {
    padding: 24px;
  }
}

@media screen and (max-width: 700px) {
  #card-showcase {
    .container-fluid {
      .title {
        h1 {
          font-size: 40px;
        }
      }
    }
  }
}

@media screen and (max-width: 550px) {
  #card-showcase {
    .container-fluid {
      .row {
        .col {
          min-width: 100%;
        }
      }
    }
  }
}
</style>