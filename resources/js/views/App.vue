<template>
   <div>
      <ul>
         <li><router-link :to="{ name: 'ciao' }">Ciao</router-link></li>
         <li><router-link :to="{ name: 'contact' }">Contact</router-link></li>
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