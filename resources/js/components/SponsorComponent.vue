<template>
    <div class="container-fluid">
        <h1 class="text-center">Porta più visitatori al tuo appartamento</h1>
        <div class="card_wrapper">
            <div v-for="(item,i) in card" :key="i" class="card">
                <div class="box" :class="'sponsor_'+(i+1)+'_bg'">
                <div class="content">
                    <h2>{{i+1}}</h2>
                    <i :class="item.icon"></i>
                    <h3>{{ item.price }}</h3>
                    <p>{{ item.time }}</p>
                    <a @click="paymentDisplay(i+1)" href="#">Start Sponsorship</a>
                </div>
                </div>
            </div>
        </div>
        <div v-if="display" class="container" :class="'sponsor_'+colore+'_border'">
            <div class="close">
                <i @click="paymentHide" class="fa-regular fa-circle-xmark"></i>
            </div>
            <div class="input_wrapper">
                <input type="text" placeholder="inserisci il numero della carta">
                <input type="text" placeholder="inserisci il cvc della carta">
                <input type="text" placeholder="inserisci la data di scadenza della carta">
                <div class="button_wrapper d-flex justify-content-center">
                    <button type="button" class="button" :class="'sponsor_'+colore+'_bg_after'">Start Sponsorship</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
       data(){
           return{
               card: [
                  {
                      'icon' : 'fa-solid fa-bullhorn',
                      'price' : 'Prezzo1',
                      'time' : 'Durata sponsorizzazione1'
                  },
                  {
                      'icon' : 'fa-regular fa-comments',
                      'price' : 'Prezzo2',
                      'time' : 'Durata sponsorizzazione2'
                  },
                  {
                      'icon' : 'fa-solid fa-chart-line',
                      'price' : 'Prezzo3',
                      'time' : 'Durata sponsorizzazione3'
                  },       
                ],
                display: false,
                colore: 2,
           }
       },

        methods: {
            paymentDisplay: function(j){
                this.display = true;

                this.colore = j;

            },

            paymentHide: function(){
                this.display = false;
            }
        }

    }
</script>


<style scoped lang="scss">

@import '../../sass/variables';

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

.container-fluid{
    display: flex;
    justify-content: center;
    align-content: flex-start;
    flex-wrap: wrap;
    min-height: 100vh;
    width: 100%;
    padding: 50px 0;

    .card_wrapper{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .card{
        position: relative;
        min-width: 320px;
        height: 440px;
        box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
        inset -5px -5px 15px rgba(255, 255, 255, 0.1),
        5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        margin: 30px;
        transition: 0.5s;

    }

    .box{
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transition: 0.5s; 

        &:hover{
            transform: translate(30px,-30px);
        }

        &:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: rgba(255, 255, 255, 0.03);
        }
    }

    .content{
        padding: 20px;
        text-align: center;

        h2{
            position: absolute;
            top: -10px;
            right: 30px;
            font-size: 8rem;
            color: rgba(255, 255, 255, 0.1);
        }

        h3{
            font-size: 1.8rem;
            color: #fff;
            z-index: 1;
            transition: 0.5s;
            margin-bottom: 15px;
        }

        p{
            font-size: 1rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
            z-index: 1;
            transition: 0.5s;
        }

        i{
            color: white;
        }

        a{
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: $sponsor_button_bg;
            border-radius: 5px;
            text-decoration: none;
            color: $sponsor_button_txt;
            margin-top: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.5s;

            &:hover{
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
                background: white;
                color: black;
            }
        }
        
    }
}

.container{
    height: 300px;
    width: 1100px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;

    .close{
        width: 100%;
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        color: black;
        padding: 5px;

        i{
            cursor: pointer;
        }


        &:hover{
            color: red;
        }
    }

    .input_wrapper{
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10%;
        height: 90%;
        width: 90%;

        input{
            height: 60px;
            width: 45%;
        }

        .button_wrapper{
            width: 45%;
        }

        .button {
            font-size: 20px;
            font-weight: 200;
            letter-spacing: 1px;
            padding: 13px 50px 13px;
            outline: 0;
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            background-color: rgba(0, 0, 0, 0);
            color: white;
            height: 60px;
        }

        .button::after {
            content: "";
            border-radius: 5px;
            width: 100%;
            z-index: -1;
            position: absolute;
            height: 100%;
            top: 7px;
            left: 7px;
            transition: 0.2s;
        }

        .button:hover::after {
            top: 0px;
            left: 0px;
        }
    }
}



// colori

.sponsor_1_bg{
    background-color: $sponsor_1;
}

.sponsor_2_bg{
    background-color: $sponsor_2;
}

.sponsor_3_bg{
    background-color: $sponsor_3;
}

.sponsor_1_bg_after::after{
    background-color: $sponsor_1;
}

.sponsor_2_bg_after::after{
    background-color: $sponsor_2;
}

.sponsor_3_bg_after::after{
    background-color: $sponsor_3;
}

.sponsor_1_border{
    border: 3px solid $sponsor_1;
}

.sponsor_2_border{
    border: 3px solid $sponsor_2;
}

.sponsor_3_border{
    border: 3px solid $sponsor_3;
}
</style>

