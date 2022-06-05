<template>
    <div class="container-fluid border-top border-bottom ms_navbar">
        <div class="d-flex justify-content-between align-items-center container py-4 gapx-1">
            <Logo/>
            <SearchBar/>
            <Dropdown/>
        </div>
    </div>
</template>

<script>
import Logo from '../Search/LogoComponent.vue';
import Dropdown from '../Search/DropdownPill.vue';
import SearchBar from '../Search/SearchBar.vue';

   export default {
      name: "Navbar",
      components: {
         Logo,
         SearchBar,
         Dropdown
      },
   }
</script>

<style lang="scss" scoped>

.ms_navbar {
   position: sticky;
}

</style>