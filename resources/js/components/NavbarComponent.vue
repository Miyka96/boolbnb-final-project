<template>
    <div class="container-fluid border-top border-bottom ms_navbar">
        <div class="d-flex justify-content-between align-items-center container py-4 gapx-1">
            <logo-component/>
            <searchbar-component/>
            <pill-component/>
        </div>
    </div>
</template>

<script>
import LogoComponent from './LogoComponent.vue';
import PillComponent from './PillComponent.vue';
import SearchbarComponent from './SearchbarComponent.vue';

    export default {
  components: { PillComponent, LogoComponent, SearchbarComponent },
        
    }
</script>

<style lang="scss" scoped>
    
    .ms_navbar {
        position: sticky;
    }

</style>