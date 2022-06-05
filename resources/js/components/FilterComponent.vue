<template>
   <div class="container-fluid">
      <div class="filter_wrapper d-flex flex-column">
         <h4>Numero minimo di stanze</h4>
         <input v-model="room_num" type="number" max="15">
         <h4>Numero minimo di letti</h4>
         <input v-model="beds_num" type="number" max="25" >
         <h1>Altri servizi</h1>
      
         <div v-for="el in servicesApi" :key="el.id">
            <input type="checkbox" :id="el.id" :value="el.id" :name="el.id" v-model="services">
            <label :for="el.id">{{el.name}}</label>
         </div>
         <button @click="filter(room_num, beds_num, services)">Filtra risultati</button>
      </div>

      <!-- filtered houses -->
      <!-- <CardShowcase/> -->
   </div>
</template>

<script>
// import CardShowcase from "../components/CardShowcase.vue"

export default{
   name:"FilterComponent",
   components: {
   //   CardShowcase,
   },
   data(){
      return {
         room_num: 1,
         beds_num: 1,
         services:[],
         servicesApi:[],
         houses: [],
         lastPage: 0,
         currentPage: 1,
      }
   },
   methods: {
   fetchServices(){
         axios.get('/api/services')
         .then( res => {
         this.servicesApi = res.data.services
         })
   },

   filter(room_num = 1, beds_num = 1, services = []) {
      console.log(this.room_num)
      axios
         .get(`/api/filter/${room_num}/${beds_num}/${services}`)
         .then((res) => {
            console.log('FILTRO');
            console.log(res.data);
         })
         .catch((error) => {
            console.log(error);
         });
   },
   },
   mounted() {
      this.fetchServices();
      this.filter();
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