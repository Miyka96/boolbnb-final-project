<template>
    <div class="container-fluid border-top border-bottom ms_navbar">
        <div class="d-flex justify-content-between align-items-center container py-4 gapx-1">
            <logo-navbar-component/>
            <searchbar-navbar-component/>
            <pill-logged-component/>
        </div>
    </div>
</template>

<script>
import LogoNavbar from './LogoComponent.vue';
import PillLogged from './PillloggedComponent.vue';
import SearchbarNavbar from './Searchbarnavbar.vue';

    export default {
        name: "Navbar",
        components: { PillloggedComponent, LogoComponent, SearchbarnavbarComponent },
        
    }
</script>

<style lang="scss" scoped>
    
    .ms_navbar {
        position: sticky;
    }

</style>