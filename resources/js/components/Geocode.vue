<template>
    <nav class="d-flex flex-column container">
        <div id="search">
            <input
                class="form-control mr-sm-2"
                placeholder="Inserisci indirizzo"
                type="search"
                id="search-bar"
                v-model="search"
                @keyup="searchItems()"
            />
        </div>
        <div class="d-flex flex-column" v-for="el in places" :key="el.id">
            <ul id="ul" class="d-flex flex-column list-group ul">
                <li @click="saveAddress(el)" v-if="el.address.freeformAddress" 
                class="list-group-item list-group-item-action">
                    {{ el.address.freeformAddress }}
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
import axios from "axios";
export default {
    name: "GeoSearch",
    data() {
        return {
            baseURL: "api.tomtom.com",
            search: "",
            places: [],
            lat: "",
            lon:"",
            streetNum:"",
            address:"",
            city: "",
            country: "",
            zipCode:"",

        };
    },
    methods: {
        searchItems: function () {
            if(this.search.length>8){
                axios
                .get(
                    `https://${this.baseURL}/search/2/geocode/${this.search}.json`,
                    {
                        params: {
                            key: "DINngHSiTz58Z5fDF5pThkg1IrJA87je",
                            limit: 5,
                            countrySet: "IT/ITA",
                            radius: 20000,
                        },
                    }
                )
                .then((res) => {
                    console.log(res.data.results);
                    this.places = res.data.results;
                })
                .catch((error) => {
                    console.log(error.response);
                });
            }
        },
        saveAddress: function (element) {
            this.lat= element.position.lat
            this.lon= element.position.lon
            this.streetName= element.address.streetName 
            if(element.address.streetNumber == undefined){
                this.address= this.streetName
            }
            else{
                this.streetNum= element.address.streetNumber
                this.address= this.streetName + ' ' + this.streetNum
            }
            this.city= element.address.countrySecondarySubdivision
            this.country= element.address.country
            this.zipCode= element.address.postalCode
            
            console.log(this.lat,this.lon,this.address,this.city,this.country,this.zipCode)
        }, 
    },
};
</script>

<style lang="scss" scoped></style>
