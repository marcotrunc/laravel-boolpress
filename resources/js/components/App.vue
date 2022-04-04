<template>
  <section>
    <Header :title="title" />
    <div id="main" class="container">
      <PostCards :posts="posts" />
    </div>
  </section>
</template>

<script>
import Header from "./Header.vue";
import PostCards from "./posts/PostCards.vue";
export default {
  name: "App",
  components: {
    Header,
    PostCards,
  },
  data() {
    return {
      title: "Boolpress",
      posts: [],
    };
  },
  methods: {
    getPosts() {
      axios
        .get("http://127.0.0.1:8000/api/posts")
        .then((res) => {
          this.posts = res.data;
        })
        .catch((error) => {
          console.error(error);
        })
        .then(() => {
          console.log("Chiamata terminata");
        });
    },
  },
  mounted() {
    this.getPosts();
  },
};
</script>

<style lang="scss" scoped>
</style>
