<template>
  <section id="card-showcase">
    <div class="container-fluid">
      <div class="row">
        <div class="col" v-for="el in houses" :key="el.id">
          <HouseCard :house="el" />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import HouseCard from "../HouseCard.vue";

export default {
  name: "CardShowcase",
  components: {
    HouseCard,
  },
  data() {
    return {
      houses: [],
      lastPage: 0,
      currentPage: 1,
    };
  },
  methods: {
    fetchHouses(page = 1, paginate = 12, sponsoredOnly = 'true') {
      //default value
      axios
        .get(`/api/houses-index/${paginate}/${sponsoredOnly}`, {
          params: {
            page, // equivalente a page: page
          },
        })
        .then((res) => {
          console.log('QUI');
          console.log(res.data);
          const { houses } = res.data;
          // const { data, last_page, current_page } = houses;
          // this.houses = data;
          this.houses = houses;
          // this.currentPage = current_page;
          // this.lastPage = last_page;
        })
        .catch((err) => {
          console.warn(err);
        });
    },
  },
  mounted() {
    this.fetchHouses(1, 100, 'false');
  },
};
</script>

<style lang="scss" scoped>
#card-showcase {
  padding: 80px;
  // border: 1px solid black;
  overflow: hidden;

  .container-fluid {
    max-width: 1600px;

    .row {
      flex-wrap: wrap;
      gap: 36px 24px;

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