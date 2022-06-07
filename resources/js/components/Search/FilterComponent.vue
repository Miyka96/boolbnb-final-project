<template>
   <div class="container-fluid d-flex flex-column align-items-center">
      <div class="filter_wrapper d-flex flex-column mb-4 pb-4">
         <h4 class="mb-1">Numero minimo di stanze</h4>
         <input class="mb-1" v-model="room_num" type="number" max="15">
         <h4 class="mb-1">Numero minimo di letti</h4>
         <input v-model="beds_num" type="number" max="25" class="mb-2">
         <h1>Altri servizi</h1>
      
         <div v-for="el in servicesApi" :key="el.id" class="ml-2">
            <input class="ms-input" type="checkbox" :id="el.id" :value="el.id" :name="services" v-model="services">
            <label :for="el.id">{{el.name}}</label>
         </div>
         <div class="d-flex align-items-center justify-content-center">
            <button @click="filter(room_num, beds_num, services)" class="mt-4">Filtra risultati</button>
         </div>
      </div>
      <div class="d-flex flex-wrap mt-4 pt-4">
         <HouseCard v-for="house in filteredHouses" :key="`HouseCard-${house.id}`" :house="house" class="col-xs-12 col-sm-6 col-md-4 p-2"/>
      </div>
   </div>
</template>

<script>
import HouseCard from '../HouseCard.vue'

export default{
   name:"FilterComponent",
   components: {
     HouseCard,
   },
   data(){
      return {
         room_num: 1,
         beds_num: 1,
         services: [], // checkboxes
         servicesApi: [],
         houses: [],
         filteredHouses: [],
         lastPage: 0,
         currentPage: 1,
      }
   },
   watch: {
      houses() {
         if( this.services && this.services.length > 0 ) {
            this.filteredHouses = []

            this.houses.forEach(house => {

               const activeServices = []

               house.services.forEach(service => {
                  activeServices.push( service.id )
               })

               // se i servizi della casa contengono tutti i servizi indicati nelle checkboxes
               if( activeServices && this.services.every(element => { return activeServices.includes(element) }) ) {
                  this.filteredHouses.push( house )
               }
            })
         } else {
            this.filteredHouses = this.houses
         }
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
            .get(`/api/filter/${room_num >= 1 ? room_num : 1 }/${beds_num >= 1 ? room_num : 1 }/${services.length > 0 ? services : ''}`)
            .then((res) => {
               this.houses = []
               console.log(res.data)
               this.houses = res.data.houses
            })
            .catch((error) => {
               console.log(error)
            })
      },
   },
   mounted() {
      this.fetchServices();
      this.filter();
   }
}
</script>

<style scoped lang="scss">
@import '../../../sass/_variables.scss';

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

button {
      color: white;
      font-size: 14px;
      font-weight: bold;
      background-color: #FF385C;
      border-radius: 25px;
      text-align: center;
      height: 30px;
      width: 150px;
      margin-right: 5px;
      border: 0 !important;
}

.container-fluid{
    padding: 80px 0;
    background-color: white;
    opacity: 80%;
    display: flex;
    justify-content: center;
    align-items: flex-start;

    .filter_wrapper{ 
        min-width: 60%;
        border: 1px solid #71717131;
        border-radius: 10px !important;
        padding: 50px;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);

        input {
           border: 1px solid #71717131;
        } 

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