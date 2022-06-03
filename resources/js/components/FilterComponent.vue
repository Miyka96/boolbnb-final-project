<template>
    <div class="container-fluid">
        <div class="filter_wrapper d-flex flex-column">
            <div class="alloggi_wrapper">
                <h1>Tipo di alloggio</h1>
                <div class="row">
                    <div v-for="(item,i) in alloggi" :key="i" class="col-s-5 col-md-5 col-xl alloggi">
                        <i :class="item.icon"></i>
                        <span>{{item.name}}</span>
                    </div>
                </div>
            </div>
            <div class="stanze_wrapper">
                <h1>Stanze, letti e bagni</h1>
                <h4>Stanze</h4>
                <div class="pill_wrapper">
                    <span v-for="(el,j) in numero_stanze" :key="j" class="pill">{{ el }}</span>
                </div>
                <h4>Letti</h4>
                <div class="pill_wrapper">
                    <span v-for="(el,j) in numero_letti" :key="j" class="pill">{{ el }}</span>
                </div>
                <h4>Bagni</h4>
                <div class="pill_wrapper">
                    <span v-for="(el,j) in numero_bagni" :key="j" class="pill">{{ el }}</span>
                </div>
            </div>
            <div class="altri_servizi">
                <h1>Altri servizi</h1>
                <div class="checkbox_wrapper d-flex flex-column flex-wrap">
                    <label v-for="(element,g) in checkbox" :key="g" class="checkbox">
                        <input type="checkbox">
                        <span class="checkmark">{{ element.name }}</span>   
                    </label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    name:"FilterComponent",
    data(){
        return {
            alloggi: [
                {
                    'icon' : 'fa-solid fa-house',
                    'name' : 'Casa'
                },
                {
                    'icon' : 'fa-solid fa-city',
                    'name' : 'Appartamento'
                },
                {
                    'icon' : 'fa-solid fa-bed',
                    'name' : 'Pensione'
                },
                {
                    'icon' : 'fa-solid fa-hotel',
                    'name' : 'Hotel'
                },
            ],

            numero_stanze: ['Qualsiasi',1,2,3,4,5,6,7,'8+'],
            numero_letti: ['Qualsiasi',1,2,3,4,5,6,7,'8+'],
            numero_bagni: ['Qualsiasi',1,2,3,4,5,6,7,'8+'],

            checkbox: [
                {
                    'name' : 'Wi-fi',
                    'checked': true
                },
                {
                    'name' : 'Cucina',
                    'checked': true
                },
                {
                    'name' : 'Lavatrice',
                    'checked': true
                },
                {
                    'name' : 'Asciugatrice',
                    'checked': true
                },
                {
                    'name' : 'Aria condizionata',
                    'checked': true
                },
                {
                    'name' : 'Riscaldamento',
                    'checked': true
                },
                {
                    'name' : 'TV',
                    'checked': true
                },
                {
                    'name' : 'Asciugacapelli',
                    'checked': true
                },
                {
                    'name' : 'Ferro da stiro',
                    'checked': true
                },
            ]
        }
    }
}
</script>

<style scoped lang="scss">
@import '../../sass/variables';

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container-fluid{
    padding: 80px 0;
    background-color: white;
    opacity: 80%;
    display: flex;
    justify-content: center;
    align-items: center;

    .filter_wrapper{ 
        min-width: 60%;
        border: 3px solid black;
        border-radius: 10px;
        padding: 50px;

        .alloggi_wrapper{
            .row{
                width: 100%;
                display: flex;
                padding: 30px 0;
                margin-bottom: 30px;
                border-bottom: 1px solid grey;
                gap: 10px;

                .alloggi{
                    height: 70px;
                    border: 1px solid grey;
                    border-radius: 5px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    padding: 8px 10px;

                    span{
                        font-size: 20px;
                    }
                }
            }
        }

        .stanze_wrapper{
            border-bottom: 1px solid grey;
            margin-bottom: 30px;

            h4{
                margin-top: 20px;
            }

            .pill_wrapper{
                width: 100%;
                display: flex;
                gap: 2%;
                overflow: scroll;
                padding: 30px 20px;

                .pill{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 20px;
                    padding: 20px;
                    border: 1px solid grey;
                    border-radius: 20px;
                    flex-shrink: 0;
                }
            }
        }

        .checkbox_wrapper{
            margin-top: 30px;
            flex-grow: 1;
            height: 200px;
            gap: 3%;

            .checkbox{
                padding-left: 35px;
                display: flex;
                align-items: center;

                input{
                    height: 30px;
                    width: 30px;
                    margin-right: 10px;
                }

              

            }
        }
    }
}

// RESPONSIVE
      
@media screen and (max-width: 767px) {
    .alloggi{
        width: 200px;
    }
}
</style>