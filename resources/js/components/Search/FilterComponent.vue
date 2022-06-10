<template>
    <div
        class="container-fluid d-flex flex-column align-items-center justify-content-center"
    >
        <div
            class="filter_wrapper container d-flex mb-4 pb-4 justify-content-center"
        >
            <div class="wrapper">
                <h4 class="mb-1 title">Raggio di ricerca (km)</h4>
                <input
                    class="mb-1"
                    v-model="radius"
                    type="number"
                    min="1"
                    max="100"
                />

                <h4 class="mb-1 title">Numero minimo di stanze</h4>
                <input
                    class="mb-1"
                    v-model="room_num"
                    type="number"
                    min=""
                    max="15"
                />

                <h4 class="mb-1 title">Numero minimo di letti</h4>
                <input v-model="beds_num" type="number" max="25" class="mb-2" />
            </div>

            <div class="service_wrapper col-8">
                <h4 class="mb-1 text-center mb-3 title">Altri servizi</h4>
                <div class="d-flex flex-wrap justify-content-center">
                    <div
                        v-for="el in servicesApi"
                        :key="el.id"
                        class="ml-2 d-flex flex-wrap"
                    >
                        <input
                            class="ms-input"
                            type="checkbox"
                            :id="el.id"
                            :value="el.id"
                            :name="services"
                            v-model="services"
                        />
                        <label :for="el.id">{{ el.name }}</label>
                    </div>
                </div>
            </div>
        </div>

        <CardsShowcase
            :sponsoredOnly="false"
            :services="services"
            :roomNum="parseInt(room_num)"
            :bedsNum="parseInt(beds_num)"
            :radius="parseInt(radius)"
            :positionFilter="true"
        />
        <!-- il positionFilter se è true attiverà il filtro della ricerca in base a posizione e raggio indicati -->
    </div>
</template>

<script>
import HouseCard from "../HouseCard.vue";
import CardsShowcase from "../Home/CardShowcase.vue";

// [TODO] aggiungere controllo: se la query è vuota o se non ci sono risultati con lat/long
// visualizzare un componente con messaggio d'errore

export default {
    name: "FilterComponent",
    components: {
        HouseCard,
        CardsShowcase,
    },
    data() {
        return {
            room_num: 1,
            beds_num: 1,
            radius: 20,
            services: [], // checkboxes
            servicesApi: [],
        };
    },
    methods: {
        fetchServices() {
            axios.get("/api/services").then((res) => {
                this.servicesApi = res.data.services;
            });
        },
    },
    mounted() {
        this.fetchServices();
    },
};
</script>

<style scoped lang="scss">
@import "../../../sass/_variables.scss";

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.title{
  color:#ff385c;
  margin-top:5px;
}

.service_wrapper {
  padding-left:20px;

    input {
        display: none;
        cursor:pointer
    }

    input:checked ~ label {
        color: #ff385c;
        font-weight: 700;
    }
    label {
        border: 1px solid #ffe8f8;
        padding: 8px 30px;
        margin:2px;
        border-radius: 6px;
        color:rgb(25, 25, 25);
        background-color : #ffe8f768; 
        cursor:pointer;
    }
}

.filter_wrapper{
  input{
    border: 1px solid #ffe8f8;
    background-color : #ffe8f768; 
    color:rgb(25, 25, 25);
    padding: 4px 4px;
    width: 80px;
  }
}

button {
    color: white;
    font-size: 14px;
    font-weight: bold;
    background-color: #ff385c;
    border-radius: 25px;
    text-align: center;
    height: 30px;
    width: 150px;
    margin-right: 5px;
    border: 0 !important;
}

.container-fluid {
    padding: 80px 0;
    background-color: white;
    opacity: 80%;
    display: flex;
    justify-content: center;
    align-items: flex-start;

    .filter_wrapper {
        min-width: 60%;
        border: 1px solid #71717131;
        border-radius: 10px !important;
        padding: 50px;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);

        input {
            border: 1px solid #71717131;
        }

        .alloggi_wrapper {
            .row {
                width: 100%;
                display: flex;
                padding: 30px 0;
                margin-bottom: 30px;
                border-bottom: 1px solid grey;
                gap: 10px;

                .alloggi {
                    height: 70px;
                    border: 1px solid grey;
                    border-radius: 5px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    padding: 8px 10px;

                    span {
                        font-size: 20px;
                    }
                }
            }
        }

        .stanze_wrapper {
            border-bottom: 1px solid grey;
            margin-bottom: 30px;

            h4 {
                margin-top: 20px;
            }

            .pill_wrapper {
                width: 100%;
                display: flex;
                gap: 2%;
                overflow: scroll;
                padding: 30px 20px;

                .pill {
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

        .checkbox_wrapper {
            margin-top: 30px;
            flex-grow: 1;
            height: 200px;
            gap: 3%;

            .checkbox {
                padding-left: 35px;
                display: flex;
                align-items: center;

                input {
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
    .alloggi {
        width: 200px;
    }
}
</style>
