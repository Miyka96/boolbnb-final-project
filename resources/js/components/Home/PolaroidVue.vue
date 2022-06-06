<template>
  <div class="container-fluid py-5 my-5">
    <!-- todoo da aggiungere alle polaroid img di città che riportano ad una query di ricerca (redirect su pagina ricerca avanzata) -->

    <div class="polaroids-list row d-flex flex-wrap">
      <div v-for="el in polaroid" :key="el.id" class="polaroid my-4 mx-2">
        <span class="polaroid__pad">
          <div class="img_wrapper">
            <img class="polaroid__image" :src="el" />
          </div>
        </span>
          <h2 class="polaroid__title highlight">Title</h2>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PolaroidVue",
  data() {
    return {
      polaroid: [
        "https://images.unsplash.com/photo-1594755260889-29d5fb8e2d1f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=100",
        "https://images.unsplash.com/photo-1604321830182-faf7cfca8b55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=100",
        "https://images.unsplash.com/photo-1606054534744-a3b13e35c574?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=100",
        "https://images.unsplash.com/photo-1593343747751-f44305731648?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=100",
      ],
    };
  },
};
</script>

<style lang="scss" scoped>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');

.polaroids-list {
  display: flex;
  flex-flow: row wrap;
  justify-content: space-evenly;
  align-items: flex-start;
  gap: 2%;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
  .polaroid {
    flex: 0 1 auto;
    width: 300px;
    display: block;
    margin: 0 0 20px 0;
    text-decoration: none;
    background: white;
    box-shadow: 7px 8px 14px 1px rgba(0, 0, 0, 0.59);
    transition: all 0.3s ease;
    transform: rotate(2deg);
    &:hover {
      transform: translateY(-4px);
      .polaroid__image {
        transform: scale(1.03);
        transition: transform 0.2s linear;
      }
    }
    .polaroid__pad {
      position: relative;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 260px;
      border: 20px solid white;
      border-bottom: 0;
      background: white;
      .polaroid__image {
        display: block;
        max-width: 100%;
        max-height: 100%;
      }
    }
    .polaroid__title {
      margin: 0;
      padding: 20px;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.8rem;
      font-weight: bold;
      line-height: 1.1;
      text-transform: capitalize;
      color: black;
      text-align: center;
    }
  }
}

.img_wrapper {
  width: 280px;
  height: 260px;

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

.polaroid:nth-child(2n) {
  transform: rotate(-5deg);
}

</style>
