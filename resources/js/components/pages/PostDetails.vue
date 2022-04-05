<template>
  <div>
    <Loading v-if="!post" />
    <PostCard :post="post" />
  </div>
</template>

<script>
import PostCard from "../posts/PostCard";
import Loading from "../generics/Loading.vue";
export default {
  name: "PostDetails",
  components: {
    PostCard,
    Loading,
  },
  data() {
    return {
      post: null,
    };
  },
  methods: {
    getPost() {
      axios
        .get("http://127.0.0.1:8000/api/posts/post/" + this.$route.params.slug)
        .then((res) => {
          this.post = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          console.log("chiamata terminata");
        });
    },
  },
  mounted() {
    this.getPost();
  },
};
</script>

<style>
</style>