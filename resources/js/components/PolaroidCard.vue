<template>
  <router-link :to="{ name: 'search', params: { query: polaroid.query } }" class="polaroid">
      <figure>
        <img class="polaroid__image" :src="polaroid.img" />
      </figure>
      <h2 class="polaroid__title">{{ polaroid.title }}</h2>
  </router-link>
</template>

<script>
export default {
  props: {
    polaroid: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap");

.polaroid {
  min-width: calc(100% / 4 - (2% * 3));
  max-width: calc(100% / 4 - (2% * 3));
  background: white;
  color: black;
  box-shadow: 7px 8px 14px 1px rgba(0, 0, 0, 0.59);
  transition: all ease-in-out 0.5s;
  padding: 25px;
  cursor: pointer;
  text-decoration: none;

  &.polaroid:nth-child(2n) {
    transform: rotate(-3deg);
  }

  &.polaroid:nth-child(2n + 1) {
    transform: rotate(3deg);
  }

  &:hover {
    transform: translateY(-4px);

    .polaroid__image {
      transform: scale(1.03);
      transition: transform 0.2s linear;
    }

    &.polaroid {
      transform: rotate(0) !important;
    }
  }

  figure {
    aspect-ratio: 1;
    // background-color: red;

    .polaroid__image {
      display: block;
      max-width: 100%;
      max-height: 100%;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
    }
  }
  .polaroid__title {
    margin: 0;
    padding: 5px;
    // font-family: "Amatic SC", sans-serif;
    font-family: "Dancing Script", cursive;
    font-size: 3rem;
    line-height: 1.1;
    text-align: center;
  }
}
</style>