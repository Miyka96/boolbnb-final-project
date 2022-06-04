<template>
    <div class="container-fluid">
        <div class="filter_wrapper d-flex flex-column">
                <div class="stanze_wrapper">
                    <h1>Stanze, letti e bagni</h1>
                    <h4>Stanze</h4>
                    
                        <span>
                            <label for="1">1</label>
                            <input v-model="rooms" type="checkbox" value="1" name="1" >
                        </span>
                        <span>
                            <label for="2">2</label>
                            <input v-model="rooms" type="checkbox" value="2" name="2">
                        </span>
                        <span>
                            <label for="3">3</label>
                            <input v-model="rooms" type="checkbox" value="3" name="3">
                        </span>
                        <span>
                            <label for="4">4</label>
                            <input v-model="rooms" type="checkbox" value="4" name="4">
                        </span>
                        <span>
                            <label for="5">5</label>
                            <input v-model="rooms" type="checkbox" value="5" name="5">
                        </span>
                        <span>
                            <label for="6">6</label>
                            <input v-model="rooms" type="checkbox" value="6" name="6">
                        </span>
                        <span>
                            <label for="7">7</label>
                            <input v-model="rooms" type="checkbox" value="7" name="7">
                        </span>
                        <span>
                            <label for="8">8</label>
                            <input v-model="rooms" type="checkbox" value="8" name="8">
                        </span>

                    <h4>Letti</h4>

                        <span>
                            <label for="1">1</label>
                            <input v-model="beds" type="checkbox" value="1" name="1" >
                        </span>
                        <span>
                            <label for="2">2</label>
                            <input v-model="beds" type="checkbox" value="2" name="2">
                        </span>
                        <span>
                            <label for="3">3</label>
                            <input v-model="beds" type="checkbox" value="3" name="3">
                        </span>
                        <span>
                            <label for="4">4</label>
                            <input v-model="beds" type="checkbox" value="4" name="4">
                        </span>
                        <span>
                            <label for="5">5</label>
                            <input v-model="beds" type="checkbox" value="5" name="5">
                        </span>
                        <span>
                            <label for="6">6</label>
                            <input v-model="beds" type="checkbox" value="6" name="6">
                        </span>
                        <span>
                            <label for="7">7</label>
                            <input v-model="beds" type="checkbox" value="7" name="7">
                        </span>
                        <span>
                            <label for="8">8</label>
                            <input v-model="beds" type="checkbox" value="8" name="8">
                        </span>

                    <h4>Bagni</h4>
                        <span>
                            <label for="1">1</label>
                            <input v-model="toilets" type="checkbox" value="1" name="1" >
                        </span>
                        <span>
                            <label for="2">2</label>
                            <input v-model="toilets" type="checkbox" value="2" name="2">
                        </span>
                        <span>
                            <label for="3">3</label>
                            <input v-model="toilets" type="checkbox" value="3" name="3">
                        </span>
                        <span>
                            <label for="4">4</label>
                            <input v-model="toilets" type="checkbox" value="4" name="4">
                        </span>
                        <span>
                            <label for="5">5</label>
                            <input v-model="toilets" type="checkbox" value="5" name="5">
                        </span>
                        <span>
                            <label for="6">6</label>
                            <input v-model="toilets" type="checkbox" value="6" name="6">
                        </span>
                        <span>
                            <label for="7">7</label>
                            <input v-model="toilets" type="checkbox" value="7" name="7">
                        </span>
                        <span>
                            <label for="8">8</label>
                            <input v-model="toilets" type="checkbox" value="8" name="8">
                        </span>
                </div>
                <div class="altri_servizi">
                    <h1>Altri servizi</h1>

                </div>
                {{rooms}} 
                {{beds}} 
                {{toilets}}

                <button @click="filter()">Filtra risultati</button>
        </div>
    </div>
</template>

<script>
export default{
    name:"FilterComponent",
    data(){
        return {
            rooms:[],
            beds: [],
            toilets: [],
            services:[],
            houses: [],
            lastPage: 0,
            currentPage: 1,
        }
    },
     methods: {
      fetchHouses(page = 1) { //default value
         axios.get('/api/houses', {
            params: {
               page  // equivalente a page: page
            }
         })
        .then( res => {
            console.log( res.data )
            const { houses } = res.data
            const { data, last_page, current_page } = houses
            this.houses = data
            this.currentPage = current_page
            this.lastPage = last_page
         })
         .catch( err => {
            console.warn( err )
         })
      },
    filter() {
      axios
        .post("/api/filter",JSON.stringify({
        rooms: this.rooms,
        beds: this.beds,
        toilets: this.toilets
        }))
        .then((res) => {
          console.log(res.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },
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