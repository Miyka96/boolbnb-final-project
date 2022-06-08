<template>
  <section id="polaroid-wrapper">
    <div class="container-fluid py-5 mb-5">
      <div class="polaroids-list row d-flex flex-wrap justify-content-around">
        <Polaroid v-for="(el, i) in polaroids" :key="i" :polaroid="el" />
      </div>
    </div>
  </section>
</template>

<script>
import Polaroid from "../PolaroidCard.vue";
import state from "../../store";

export default {
  components: {
    Polaroid,
  },
  data() {
    return {
      polaroids: state.polaroids,
    };
  },
};
</script>

<style lang="scss" scoped>
#polaroid-wrapper {
  background: #f8fafc;

  &::after { // per evitare margin collapse
    content: "";
    display: block;
    width: 100%;
    height: 1px;
  }

  .polaroids-list {
    justify-content: space-evenly;
    gap: 2%;
  }
}

@media screen and (max-width: 700px) {
  #polaroid-wrapper {
    .polaroids-list {
      gap: 30px 15px;

      .polaroid {
        max-width: calc(40%);
        min-width: calc(40%);
      }
    }
  }
}
</style>
