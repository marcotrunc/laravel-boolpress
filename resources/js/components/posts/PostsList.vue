<template>
  <section>
    <Loading v-if="!(posts.length > 0)" />
    <PostCard v-for="post in posts" :key="post.id" :post="post" />
    <Pagination
      :last-page="lastPage"
      @on-page="getPosts"
      :pagination="pagination"
      v-if="!search"
    />
  </section>
</template>

<script>
import PostCard from "./PostCard.vue";
import Pagination from "../generics/Pagination.vue";
import Loading from "../generics/Loading.vue";
export default {
  name: "PostsList",
  components: {
    PostCard,
    Pagination,
    Loading,
  },
  props: ["search"],
  data() {
    return {
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
  created() {
    this.getPosts();
  },
};
</script>

