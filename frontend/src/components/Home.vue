<template>
  <side-bar></side-bar>
</template>

<script>
import SideBar from "./SideBar.vue";

export default {
  name: "Home",
  title: "Home",
  components: {
    'side-bar': SideBar
  }
}
</script>

<style scoped>

</style>