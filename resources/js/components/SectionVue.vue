<template>
  <div class="container-fluid">
    <div class="container">
      <div class="row align-items-center d-flex flex-wrap">
        <!-- first col -->
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 py-5 d-flex flex-column justify-content-center">
          <h3>This is <span class="important_text">WOW</span>lidays</h3>
          <h1 class="text_xxl">
            Helping you to find
            <span class="important_text">amazing houses</span> for your trips!
          </h1>
        </div>

        <!-- second col -->
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 py-5 d-flex justify-content-center">
          <div class="card">
            <div class="img-wrapper">
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
</template>

<script>
import { thumbAnimation } from '../store'
export default {
  name: "SectionVue",
  mounted(){
    thumbAnimation();
  }
};
</script>

<style lang="scss" scoped>
.important_text {
  color: rgb(255, 0, 64);
  font-weight: 700;
}
.text_xxl {
  font-size: 60px;
  font-weight: 700;
}


.card {
 border: 4px solid transparent;
 transform: skewX(-7deg);
 height: 500px;
 width: 350px;
}

.img-wrapper {
  position: relative; 
  transform: translate(50px, -70px);
}

.img {
 height: inherit;
 width: 100%;
 object-fit: cover;
 opacity: 0;
}
</style>
