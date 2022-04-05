<template>
  <section>
    <Header :title="title" />
    <div id="main" class="container">
      <!-- <router-view> </router-view> -->
      <!-- <PostsList /> -->
      <PostDetails />
    </div>
  </section>
</template>

<script>
import Header from "./Header.vue";
import PostsList from "./posts/PostsList.vue";
import PostDetails from "./posts/PostDetails.vue";
export default {
  name: "App",
  components: {
    Header,
    PostsList,
    PostDetails,
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
