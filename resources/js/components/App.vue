<template>
  <section>
    <Header :title="title" />
    <div id="main" class="container">
      <router-view></router-view>
    </div>
  </section>
</template>

<script>
import Header from "./Header.vue";
export default {
  name: "App",
  components: {
    Header,
  },
  data() {
    return {
      title: "Boolpress",
    };
  },
};
</script>

<style lang="scss" scoped>
</style>
