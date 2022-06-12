<template>
    <div id="search-bar" class="d-flex flex-column justify-content-center mx-3">      
      <div class="d-flex justify-content-center">
        <input
            type="search"
            v-model="queryString"
            @keyup="searchItems()"
            class="px-3"
            placeholder="Cerca la casa dei tuoi sogni"
        />

        <a :href="`/search/${queryString}`">
            <!-- <router-link :to="{ name: 'search', params: { query: queryString } }"> -->
            <span
                @click="ttSearch()"
                class="d-flex justify-content-center align-items-center"
            >
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </span>
            <!-- </router-link> -->
        </a>
<!-- 
        <a :href="`/search/${queryString}`" class="d-block d-md-none ms-link-search">
            <router-link :to="{ name: 'search', params: { query: queryString } }">
            <span
                @click="ttSearch()"
                class="d-flex justify-content-center align-items-center"
            >
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </span>
            </router-link>
        </a> -->

      </div>  

        <div
            class="dynamic_container"
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            queryString: "",
            places: [],
            visible: false,
        };
    },
    methods: {
        ttSearch() {
            axios
                .get(
                    `https://api.tomtom.com/search/2/search/${this.queryParams}.json?radius=20000&minFuzzyLevel=1&maxFuzzyLevel=2&view=Unified&relatedPois=off&key=DINngHSiTz58Z5fDF5pThkg1IrJA87je`
                )
                .then((res) => {
                    console.log(res.data.results);
                    this.lat = res.data.results[0].position.lat;
                    this.lon = res.data.results[0].position.lon;
                    this.$router.go(0);
                });
        },

        searchItems: function () {
            if (this.queryString.length > 8) {
                axios
                    .get(
                        `https://api.tomtom.com/search/2/geocode/${this.queryString}.json`,
                        {
                            params: {
                                key: "DINngHSiTz58Z5fDF5pThkg1IrJA87je",
                                limit: 1,
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

        deleteItems: function () {
            this.visible = false;
        },

        saveAddress: function (element) {
          this.queryString= element.address.freeformAddress;
        }
    },
};
</script>

<style lang="scss" scoped>
#search-bar {
    // position: fixed;
    // top: 40px;
    // left: 50%;
    // transform: translate(-50%, -50%);
    position:relative;

    a {
        text-decoration: none;
    }

    input,
    span {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        height: 44px;
        border: 1px solid #c9c4be;
        cursor: pointer;
    }

    input {
        // min-width: 50vw;
        min-width: 350px;
        flex-grow: 1;
        border-right: 0;
        color: #717171;
        outline: none;
        font-size: small;
        gap: 15px;
        border-radius: 25px 0px 0px 25px;
        font-size: 18px;
    }

    .ms-link-search {
        span {
            width: 60px;
            padding: 15px;
            margin: 0 !important;
            border-radius: 25px 25px 25px 25px;
        }
    }

    // Search btn
    a {
        span {
            width: 40px;
            border-radius: 0px 25px 25px 0px;
            background-color: white;
            border-left: 0;
            color: white;
            transition: all ease-in-out 0.2s;

            div {
                background-color: #ff385c;
                // border: 2px solid white;
                border-radius: 25px;
                text-align: center;
                height: 34px;
                aspect-ratio: 1;
                font-size: 18px;
                margin-right: 5px;
                transition: all ease-in-out 0.2s;
            }
        }

        &:hover {
            span {
                color: #ff385c;

                div {
                    background-color: white;
                    border: 2px solid #ff385c;
                    height: 32px;
                }
            }
        }
    }
    .dynamic_container{
      position:absolute;
      top:100%;
      padding:5px;
    }
}

@media screen and (min-width: 992px) {
    #search-bar {
        position: fixed;
        top: 40px;
        left: 50%;
        transform: translate(-50%, -50%);
    }
}

@media screen and (max-width: 992px) {
    #search-bar {
        input {
            min-width: 40vw;
        }
    }
}

@media screen and (max-width: 435px) {
    #search-bar {
        input {
            width: 100px;
        }
    }
}


</style>
