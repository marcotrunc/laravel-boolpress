<template>
  <div>
    <PostsList :search="search" />
  </div>
</template>

<script>
import PostsList from "../posts/PostsList.vue";
export default {
  name: "HomePage",
  components: {
    PostsList,
  },
  props: {
    search: { type: String },
  },
};
</script>
<style>
</style>