<template>
  <div class="bg-secondary">
    <div class="container p-4 bg-light d-none d-md-block">
      <div class="row">
        <div class="col-12 p-0">
          <h2>Best vacation resort</h2>
          <h4>Infos goes here</h4>
        </div>
      </div>

      <div class="row rounded-lg overflow-hidden">
        <div class="col-sm-12 col-lg-10 p-0">
          <img src="../assets/img/test.jpeg" alt="" />
        </div>

        <div class="col-2 p-0 d-none d-lg-flex flex-column">
          <img src="../assets/img/test.jpeg" alt="" />
          <img src="../assets/img/test.jpeg" alt="" />
          <img src="../assets/img/test.jpeg" alt="" />
          <img src="../assets/img/test.jpeg" alt="" />
        </div>
      </div>
    </div>

    <!-- ******************** SOLO MOBILE ******************** -->

    <div class="container-fluid d-md-none d-sm-block bg-light">
      <div class="row py-2">
        <div class="col-12 text-center">
          <h2>Best vacation resort</h2>
          <h4>Infos goes here</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-12 p-0">
          <img class="box-shadow" src="../assets/img/test.jpeg" alt="" />
        </div>
      </div>
    </div>

    <!-- ************************************************************ -->

    <div class="container p-4 bg-light">
      <div class="row pb-2">
        <div class="col-12 p-0">
          <h2>Title / position / price per night</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-lg-8 p-0">
          <strong>
            <h5>Description</h5>
          </strong>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
            obcaecati itaque ad hic minima? Veniam harum nam numquam ut commodi
            laborum a voluptates, quam eius amet quaerat nobis corporis enim
            esse ea distinctio minima eligendi expedita natus delectus fugiat
            neque? Maxime cumque delectus sed recusandae nihil ullam, doloremque
            ducimus a quis numquam, laborum quas dicta magni debitis repudiandae
            suscipit facilis voluptates vitae, sit error placeat cum? Officia,
            ducimus impedit vel nulla molestias necessitatibus quas natus et.
            Tempora, quia! Magnam fuga non, illo, atque delectus ipsa omnis
            autem ut earum aspernatur molestias minima et distinctio dolorum
            deleniti eius nam sit. Quae tempora asperiores blanditiis quis
            suscipit culpa voluptatum facilis aspernatur quasi expedita, debitis
            odit sapiente quo mollitia ducimus velit saepe dolore ratione
            repellendus natus, nobis voluptatem porro vitae. Quibusdam
            dignissimos necessitatibus reiciendis impedit dolorem ipsum
            architecto enim sint praesentium nesciunt, minus magni debitis
            aliquam modi minima laborum, reprehenderit nulla, porro aspernatur.
            Officiis, tempore placeat animi saepe, hic asperiores sapiente error
            velit quae ut fuga ea provident reiciendis corporis perferendis
            commodi ipsa accusantium quos obcaecati sunt? Sint, optio. Fuga
            reprehenderit blanditiis id officia, repudiandae ullam, non porro
            eaque deserunt tempora velit? Impedit, hic! Ipsam, architecto
            inventore. Animi dolores ipsam porro? Non, quis.
          </p>
        </div>

        <div class="col-sm-12 col-lg-4 p-0 pl-lg-4 pl-sm-0">
          <strong>
            <h5>Additional services</h5>
          </strong>
          <ul>
            <li>WI-FI</li>
            <li>Air conditioning</li>
            <li>Washing machine</li>
            <li>Kitchen</li>
            <li>Cable TV</li>
            <li>Room for smokers</li>
            <li>Front-pool view</li>
            <li>XXL Bed</li>
            <li>Blasphemy tolerated</li>
            <li>Hard-fucking zone</li>
          </ul>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-sm-12 col-lg-6">
          <div class="row text-center">
            <div class="col-6 p-0">
              <h4>Check-in date</h4>
              <input type="date" name="" id="" />
            </div>
            <div class="col-6 p-0">
              <h4>Check-out date</h4>
              <input type="date" name="" id="" />
            </div>
          </div>
          <div class="row text-center py-5">
            <div class="col-12 p-0">
              <h4>Total price</h4>
              <p>€10,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ShowComponent",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.box-shadow {
  box-shadow: 0 4px 10px -4px #333;
}

ul li:before {
  content: "✔️ ";
}
</style>
