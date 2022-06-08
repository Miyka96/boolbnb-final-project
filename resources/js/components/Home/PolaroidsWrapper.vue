<template>
  <section id="polaroid-wrapper">
    <div class="container-fluid py-5 my-5">
      <div class="polaroids-list row d-flex flex-wrap">
        <Polaroid v-for="(el, i) in polaroids" :key="i" :polaroid="el" />
        <!-- <div v-for="el in polaroid" :key="el.id" class="polaroid my-4 mx-2">
          <span class="polaroid__pad">
            <figure>
              <img class="polaroid__image" :src="el" />
            </figure>
          </span>
          <h2 class="polaroid__title">Title</h2>
        </div> -->
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

  .polaroids-list {
    justify-content: space-evenly;
    gap: 2%;
  }
}
</style>
