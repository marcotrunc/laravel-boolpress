<template>
  <section>
    <Header :title="title" />
    <div id="main" class="container">
      <PostCards v-for="post in posts" :key="post.id" :post="post" />
      <div id="main-bottom" class="d-flex justify-content-center">
        <Pagination
          :last-page="lastPage"
          @on-page="getPosts"
          :pagination="pagination"
        />
      </div>
    </div>
  </section>
</template>

<script>
import Header from "./Header.vue";
import PostCards from "./posts/PostCards.vue";
import Pagination from "./generics/Pagination.vue";
export default {
  name: "App",
  components: {
    Header,
    PostCards,
    Pagination,
  },
  data() {
    return {
      title: "Boolpress",
      posts: [],
      pagination: {},
    };
  },
  methods: {
    getPosts(page = 1) {
      axios
        .get("http://127.0.0.1:8000/api/posts?page=" + page)
        .then((res) => {
          const { data, last_page, current_page } = res.data;
          this.posts = res.data.data;
          this.pagination = {
            lastPage: last_page,
            currentPage: current_page,
          };
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
