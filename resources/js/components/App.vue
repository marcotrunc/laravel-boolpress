<template>
  <section>
    <Header :title="title" />
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body"><h2>Sito in costruzione</h2></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Header from "./Header.vue";
export default {
  name: "App",
  data() {
    return {
      title: "Boolpress",
    };
  },
  components: {
    Header,
  },
};
</script>

<style lang="scss" scoped>
</style>
