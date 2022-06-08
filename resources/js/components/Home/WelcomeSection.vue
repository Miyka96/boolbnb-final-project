<template>
  <section id="welcome-section">
    <div class="container-fluid my-5">
      <div class="container">
        <div class="row align-items-center d-flex flex-wrap">
          <!-- first col -->
          <div
            class="
              col-12 col-lg-6
              py-5
              d-flex
              flex-column
              justify-content-center
              text-center
            "
          >
            <h3 class="mb-4">
              Benvenuto in <span class="highlight">Wowlidays</span>
            </h3>
            <h1>
              Ti aiuteremo a trovare
              <span class="highlight">case fantastiche </span> per i tuoi
              viaggi!
            </h1>
          </div>
          <!-- second col -->
          <div
            class="
              col-12 col-lg-6
              py-lg-5
              d-flex
              justify-content-center
            "
          >
            <div class="card img-card">
              <div class="img-wrapper mt-4">
                <img
                  class="img"
                  src="https://images.unsplash.com/photo-1559823321-87e3d7979527?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465"
                />
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { thumbAnimation } from "../../store";

export default {
  name: "SectionVue",
  mounted() {
    thumbAnimation();
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";

#welcome-section {

  .highlight {
    color: $highlight;
    font-weight: 700;
  }

  .card {
    border: 4px solid $highlight !important;
    transform: skewX(-7deg);
    border-radius: 20px;

    h1 {
      font-size: 60px;
      font-weight: 700;
    }

    .img-wrapper {
      position: relative;
      transform: translate(50px, -50px) scale(1.05);
      border-radius: 20px;
      overflow: hidden;
      background-color: $highlight !important;

      .img {
        height: inherit;
        width: 100%;
        object-fit: cover;
        opacity: 0;
      }
    }
  }
}

@media screen and (max-width: 700px) {
  #welcome-section {
    .card {
      h1 {
        font-size: 50px;
      }
      .img-wrapper {
        transform: translate(20px, -20px);
      }

      &.img-card {
        width: 90%;
      }
    }
  }
}
</style>
