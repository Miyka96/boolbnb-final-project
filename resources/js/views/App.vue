<template>
   <div>
      <ul>
         <li><router-link :to="{ name: 'home' }">Home</router-link></li>
         <li><router-link :to="{ name: 'search' }">Search</router-link></li>
      </ul>
      <router-view></router-view>
   </div>
</template>

<script>

export default {

}
</script>

<style lang="scss" scoped>

</style>