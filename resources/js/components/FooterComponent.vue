<template>
    <!-- <footer>
            <div id="section1" class="container bordo">
              <div class="row justify-content-between">
                  <div class="col-3">
                      <h1 class="titolo">Sign up to our newsletter</h1>
                      <div class="d-flex justify-content-between bordo">
                          <h4 class="testo">
                            <input class="input_email" type="text" placeholder="type in your email"> 
                          </h4>
                          <button class="input_button"><i class="fa-solid fa-arrow-right"></i></button>
                      </div>
                      <p class="paragrafo">Receive invitation to stock sales, contests, news and job postings</p>
                  </div>
                  <div class="col-lg-3 col-md-10 col-sm-12 d-flex flex-column align-center">
                    <div class="d-flex gap">
                        <h1 class="titolo instagram">instagram</h1>
                        <h1 class="titolo facebook">facebook</h1>
                    </div>
                    <div class="wrapper-foto">
                        <div v-for="(item,i) in img" :key="i" class="foto effect">
                            <img :src="item" alt="">
                            <a href="#">Go to post</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <h1 class="titolo">say hi</h1>
                    <h4 class="testo">
                        <ul>
                            <li>
                                <a href="#">contatti</a>
                            </li>
                            <li>
                                <a href="#">contatti</a>
                            </li>
                            <li>
                                <a href="#">contatti</a>
                            </li>
                            <li>
                                <a href="#">contatti</a>
                            </li>
                            <li>
                                <a href="#">contatti</a>
                            </li>
                        </ul>
                    </h4>
                  </div>
              </div>
            </div>
            <div id="section2" class="container mt-4 justify-content-between">
                <div class="row py-3 justify-content-between">
                    <div class="col-2 paragrafo">
                        <span>Use of this site:</span>
                        <span>Terms and Conditions</span>
                        <span>Cookie Policy</span>
                    </div>
                    <div class="col-8 d-flex justify-content-between">
                        <div class="paragrafo d-flex flex-column">
                             <span>Use of this site:</span>
                        <span>Terms and Conditions</span>
                        </div>
                        <div class="paragrafo d-flex flex-column">
                             <span>Use of this site:</span>
                        <span>Terms and Conditions</span>
                        </div>
                        <div class="paragrafo d-flex flex-column">
                             <span>Use of this site:</span>
                        <span>Terms and Conditions</span>
                        </div>
                        <div class="paragrafo d-flex flex-column">
                             <span>Use of this site:</span>
                        <span>Terms and Conditions</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->

        <footer class="fixed_footer">
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus nemo quo totam neque quis soluta nisi obcaecati aliquam saepe dicta adipisci blanditiis quaerat earum laboriosam accusamus nesciunt! Saepe ex maxime enim asperiores nisi. Obcaecati nostrum nobis laudantium aliquam commodi veniam magni similique ullam quis pariatur voluptatem harum id error.</p>
            </div>
        </footer>
        
</template>

<script>
    export default {
    //    data(){
    //        return {
    //            img: [
    //                'https://picsum.photos/200',
    //                'https://picsum.photos/200',
    //                'https://picsum.photos/200',
    //                'https://picsum.photos/200',
    //                'https://picsum.photos/200',
    //                'https://picsum.photos/200',
    //            ]
    //        }
    //    }
    }

</script>

<style scoped lang="scss"> 

// @import '../../sass/variables';


//     // font-family: 'Abel', sans-serif;
//     // font-family: 'Libre Baskerville', serif;
//     // font-family: 'Oswald', sans-serif;

// footer{
//     padding: 50px 0;
//     background-color: white;
//     border-top: 1px solid black;

//     #section1{
//         padding-bottom: 50px;
        
//     }
    
//     a{
//         color: currentColor;
//         text-decoration: none;
//     }
    
//     a:hover{
//         color: $hover;
//         text-decoration: none;
//     }
    
//     li{
//         list-style: none;
//     }
    
//     .titolo{
//         text-transform: uppercase;
//         color: $titolo;
//         font-family: 'Oswald', sans-serif;
//         font-size: 2rem;
//         padding-bottom: 10px;
//         transition: color .3s ease-in-out;
        
    
//         &:hover{
//             color: $hover;
//         }
//     }
    
//     .instagram{
//         background:
//         linear-gradient(
//           to right,
//           $titolo,
//           $titolo
//         ),
//         linear-gradient(
//           to right,
//           rgba(166, 4, 151),
//           rgba(200, 11, 34),
//           rgba(228, 170, 53)
//         );
//         background-size: 100% 3px, 0 3px;
//         background-position: 100% 100%, 0 100%;
//         background-repeat: no-repeat;
//         transition: background-size 400ms;
    
//         &:hover{
//             background-size: 0 3px, 100% 3px;
//         }
//     }
    
//     .facebook{
//         background:
//         linear-gradient(
//           to right,
//           $titolo,
//           $titolo
//         ),
//         linear-gradient(
//           to right,
//           rgb(160, 185, 246),
//           rgb(89, 142, 247),
//           rgb(24, 98, 244)
//         );
//         background-size: 100% 3px, 0 3px;
//         background-position: 100% 100%, 0 100%;
//         background-repeat: no-repeat;
//         transition: background-size 400ms;
    
//         &:hover{
//             background-size: 0 3px, 100% 3px;
//         }
//     }
    
    
    
//     .testo{
//         color: $testo;
//         font-family: 'Libre Baskerville', serif;
//         font-size: 1rem;
//     }
    
//     .paragrafo{
//         color: $testo;
//         font-family: 'Libre Baskerville', serif;
//         font-size: 0.7rem;
//         padding-top: 5px;
//     }
    
//     .row{
//         height: 100%;
//     }
    
//     .bordo{
//         border-bottom: 1px solid black;
//     }
    
//     .underline{
//         text-decoration: underline;
//     }
    
//     .gap{
//         gap: 15px;
//     }
    
//     .wrapper-foto {
//         display: flex;
//         flex-wrap: wrap;
//         gap: 10px;
//         padding-top: 15px;
//     }
      
//     .foto {
//         overflow: hidden;
//         width: 30%;
//         aspect-ratio: 1;
//     }
      
//     img {
//         height: 100%;
//     }
    
//     .input_email{
//         border: none;
//         background-color: transparent;
//     }
    
//     .input_button{
//         border: none;
//         background-color: transparent;
//     }
    

//     .effect {
//         position: relative;
//         cursor: pointer;
//         }

//         .effect a {
//         text-decoration: none;
//         color: white;
//         width: 100%;
//         left: 0;
//         text-align: center;
//         font-size: 0.7rem;
//         position: absolute;
//         transition: 0.5s ease all;
//         visibility: hidden;
//         opacity: 0;
//         } 

//         .effect:hover a {
//         background-color: #00000066;
//         visibility: visible;
//         height: 100%;
//         padding: 40% 0; 
//         opacity: 1;
//         }




//     // RESPONSIVE
    
//     @media screen and (max-width: 970px) {
//         .row, .col-8{
//             flex-direction: column;
//             gap: 20px;
//         }
//         .wrapper-foto{
//             gap: 2%;
//             row-gap: 10px;
//         }
    
//         .foto{
//             width: 45%;
//         }

//         .effect a{
//             font-size: 2rem;
//         }
    
//       }
      
      
      
//       @media screen and (max-width: 600px) {
//        .wrapper-foto{
//            row-gap: 5px;
//        } 
//        .foto{
//            width: 40%;
//        }

//        .effect a{
//             font-size: 2.5rem;
//         }
//       }
// }





.content{
  width: 850px; 
  margin: auto;
  margin-bottom: 350px; /* Same height as footer */
  padding: 100px 0;
}
  h1{
    color: #111;
    font-size: 3em;
    font-weight: 900;
    padding: 0 0 20px 0;
  }
  h2{
    color: #111;
    font-size: 2em;
    font-weight: 900;
    padding: 0 0 15px 0;
  }
  p{
    font-size: 1.25em;
    padding: 0 0 40px 0;
  }

.fixed_footer{
  width: 100%;
  height: 350px;
  background: #111;
  position: fixed; left: 0; bottom: 0;
  z-index: -100;
}
   .fixed_footer p{
    color: #696969;
    column-count: 2;
    column-gap: 50px;
    font-size: 1em;
    font-weight: 300;
  }
</style>
