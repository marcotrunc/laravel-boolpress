<template>
  <section>
    <Header :title="title" />
    <div id="main" class="container">
      <PostCard />
    </div>
  </section>
</template>

<script>
import Header from "./Header.vue";
import PostCard from "./posts/PostCard.vue";
export default {
  name: "App",
  components: {
    Header,
    PostCard,
  },
  data() {
    return {
      title: "Boolpress",
      posts: [],
    };
  },
  methods: {
    getPosts() {
      axios("http://127.0.0.1:8000/api")
        .then((res) => {
          this.posts = res.data;
        })
        .catch((error) => {
          console.log(error);
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
