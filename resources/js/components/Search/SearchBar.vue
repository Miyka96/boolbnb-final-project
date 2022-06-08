<template>
  <div id="search-bar" class="d-flex justify-content-center mx-3">
    <input type="text" v-model="queryString" class="px-3 d-none d-md-block" placeholder="Cerca la casa dei tuoi sogni"/>
    <input type="text" v-model="queryString" class="px-3 d-md-none" placeholder="Cerca una casa"/>

    <a :href="`/search/${ queryString }`">
    <!-- <router-link :to="{ name: 'search', params: { query: queryString } }"> -->
      <span
        @click="ttSearch()"
        class="d-flex justify-content-center align-items-center"
      >
        <div class="d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </span>
    <!-- </router-link> -->
    </a>
  </div>
</template>

<script>
export default {
  data() {
    return {
      queryString: "",
    };
  },
  methods: {
    ttSearch() {
      axios
        .get(
          `https://api.tomtom.com/search/2/search/${this.queryParams}.json?radius=20000&minFuzzyLevel=1&maxFuzzyLevel=2&view=Unified&relatedPois=off&key=DINngHSiTz58Z5fDF5pThkg1IrJA87je`
        )
        .then((res) => {
          console.log(res.data.results);
          this.lat = res.data.results[0].position.lat;
          this.lon = res.data.results[0].position.lon;
          this.$router.go(0);
        });
    },
  },
};
</script>

<style lang="scss" scoped>
#search-bar {
  // position: fixed;
  // top: 40px;
  // left: 50%;
  // transform: translate(-50%, -50%);

  a {
    text-decoration: none;
  }

  input,
  span {
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
    height: 44px;
    border: 1px solid #c9c4be;
    cursor: pointer;
  }

  input {
    // min-width: 50vw;
    min-width: 350px;
    flex-grow: 1;
    border-right: 0;
    color: #717171;
    outline: none;
    font-size: small;
    gap: 15px;
    border-radius: 25px 0px 0px 25px;
    font-size: 18px;
  }

  // Search btn
  a {
    span {
      width: 40px;
      border-radius: 0px 25px 25px 0px;
      background-color: white;
      border-left: 0;
      color: white;
      transition: all ease-in-out 0.2s;

      div {
        background-color: #ff385c;
        // border: 2px solid white;
        border-radius: 25px;
        text-align: center;
        height: 34px;
        aspect-ratio: 1;
        font-size: 18px;
        margin-right: 5px;
        transition: all ease-in-out 0.2s;
      }
    }

    &:hover {
      span {
        color: #ff385c;

        div {
          background-color: white;
          border: 2px solid #ff385c;
          height: 32px;
        }
      }
    }
  }
}

@media screen and (min-width: 992px) {
  #search-bar {
    position: fixed;
    top: 40px;
    left: 50%;
    transform: translate(-50%, -50%);
  }
}

@media screen and (max-width: 992px) {
  #search-bar {
    
    input {
      min-width: 40vw;
    }
  }
}

@media screen and (max-width: 576px) {
  #search-bar {
    
    input {
      max-width: 35vw;
      min-width: auto;

      &::placeholder {
        font-size: 15px;
      }
    }
  }
}
</style>