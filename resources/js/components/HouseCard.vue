<template>
  <router-link tag="a" :to="{ name: 'house.show', params: { id: house.id } }">
    <div class="card debug" style="width: 18rem">
      <img :src="house.image" class="card-img-top" alt="" />
      <div class="card-body">
        <h5 class="card-title">{{ house.title }}</h5>
        <p class="card-position">{{ house.position.city }}</p>
        <p class="card-price">
          <strong>&euro;{{ house.cost_per_night }}</strong
          >/night
        </p>
        <p class="card-rating">
          Id: {{ house.id }}
          <!-- <i class="fa-solid fa-star"></i> -->
        </p>
      </div>
    </div>
  </router-link>
</template>

<script>
export default {
  name: "HouseCard",
  props: {
    house: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
a {
  text-decoration: none;
}
.card {
  width: 100% !important;
  margin: 0;
  border-radius: 15px;
  overflow: hidden;
  border: none;
  background-color: transparent;
  transition: all ease-in-out 0.3s;

  &:hover {
    transform: scale(1.03);
  }

  img {
    width: 100%;
    aspect-ratio: 1;
    border-radius: 15px;
  }

  .card-body {
    padding: 12px 0 0 0;
    font-size: 15px;
    position: relative;
    // background-color: transparent;

    .card-title {
      font-size: 16px;
      font-weight: 600;
      color: #222222;
      margin-bottom: 0px;
      white-space: nowrap;
      overflow: hidden;
    }

    p {
      font-size: 15px;
      font-weight: 400;
      color: #717171;
      margin: 0;
      white-space: nowrap;
      overflow: hidden;

      strong {
        font-size: 15px;
        font-weight: 600;
        color: #222222;
      }
    }

    .card-position {
      margin-bottom: 6px;
    }

    .card-rating {
      color: #222222;
      position: absolute;
      bottom: 2px;
      right: 2px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 4px;

      i {
        // margin-left: 4px;
        font-size: 12px;
      }
    }
  }

  &.debug {

    .card-title {
      // margin-right: 40px;
    }
  }
}
</style>