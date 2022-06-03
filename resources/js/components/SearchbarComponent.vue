<template>
    <div class="d-flex justify-content-center mx-3">
    <input type="text" v-model="queryString" class="px-3" placeholder="Cerca l'appartamento dei tuoi sogni">
        <router-link :to="{ name: 'search' , params: { query: queryString  } }">
            <span @click="ttSearch()" class="d-flex justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </span>
        </router-link>
    </div>
</template>

<script>

    

    export default {
        data(){
            return{
                queryString: "",
            }
        },
        methods: {
        ttSearch(){
        axios.get(`https://api.tomtom.com/search/2/search/${this.queryParams}.json?radius=20000&minFuzzyLevel=1&maxFuzzyLevel=2&view=Unified&relatedPois=off&key=DINngHSiTz58Z5fDF5pThkg1IrJA87je`)
        .then( res =>{
           console.log(res.data.results)
           this.lat = res.data.results[0].position.lat
           this.lon = res.data.results[0].position.lon
           this.$router.go(0);
      })
      }
        }
    }
</script>

<style lang="scss" scoped>
    div {
        width: 100%;
    }

    input, span {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        height: 44px;
        border: 1px solid #C9C4BE;
        cursor: pointer;
    }

    input {
        max-width: 400px;
        flex-grow: 1;
        border-right: 0;
        color: #717171;
        outline: none;
        font-size: small;
        gap: 15px;
        border-radius: 25px 0px 0px 25px;
    }

    span {
        width: 40px;
        border-radius: 0px 25px 25px 0px;
        background-color: white;
        border-left: 0;
        color: white;

        div {
            background-color: #FF385C;
            border-radius: 25px;
            text-align: center;
            height: 30px;
            width: 30px;
            font-size: smaller;
            margin-right: 5px;
        }
    }
</style>