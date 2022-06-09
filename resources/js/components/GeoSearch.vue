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
            <input type="text" name="position_id" id="position_id" :value="(positionId)">
        </div>
        <div
            class="flex-column"
            :class="visible == true ? 'd-flex' : 'd-none'"
            v-for="el in places"
            :key="el.id"
        >
            <ul id="ul" class="d-flex flex-column list-group ul">
                <li
                    id="li"
                    @click="saveAddress(el), deleteItems()"
                    v-if="el.address.freeformAddress"
                    class="list-group-item list-group-item-action"
                >
                    {{ el.address.freeformAddress }}
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            li: document.getElementById("li"),
            baseURL: "api.tomtom.com",
            search: "",
            places: [],
            positionData: {
                lat: "",
                lon: "",
                streetNum: "",
                address: "",
                city: "",
                country: "",
                zipCode: "",
            },
            visible: false,
            positionId: null
        };
    },
    methods: {
        searchItems: function () {
            if (this.search.length > 8) {
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
                        this.visible = true;
                    })
                    .catch((error) => {
                        console.log(error.response);
                    });
            }
        },
        saveAddress: function (element) {
            this.positionData.lat = element.position.lat;
            this.positionData.lon = element.position.lon;
            this.positionData.streetName = element.address.streetName;
            if (element.address.streetNumber == undefined) {
                this.positionData.address = this.positionData.streetName;
            } else {
                this.positionData.streetNum = element.address.streetNumber;
                this.positionData.address =
                    this.positionData.streetName +
                    " " +
                    this.positionData.streetNum;
            }
            this.positionData.city =
                element.address.countrySecondarySubdivision;
            this.positionData.country = element.address.country;
            this.positionData.zipCode = element.address.postalCode;

            console.log(
                this.positionData.lat,
                this.positionData.lon,
                this.positionData.address,
                this.positionData.city,
                this.positionData.country,
                this.positionData.zipCode
            );
            this.search = element.address.freeformAddress;

            axios
                .post("/position", this.positionData)
                .then((res) => {
                    this.positionId = res.position.id;
                    console.log(res.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        deleteItems: function () {
            this.visible = false;
        },
    },
};
</script>

<style lang="scss" scoped></style>
