<template>
  <div>
    <PostCard :post="post" />
  </div>
</template>

<script>
import PostCard from "../posts/PostCard";
export default {
  name: "PostDetails",
  components: {
    PostCard,
  },
  data() {
    return {
      post: null,
    };
  },
  methods: {
    getPost() {
      axios
        .get("http://127.0.0.1:8000/api/posts/post/" + this.$route.params.id)
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