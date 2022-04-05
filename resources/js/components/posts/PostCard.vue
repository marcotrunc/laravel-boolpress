<template>
  <section>
    <!-- Card -->
    <div class="card my-4">
      <div class="card-header d-flex justify-content-between">
        <address><strong>Autore:</strong> {{ post.user.name }}</address>
        <router-link
          v-if="$route.path === '/'"
          :to="{ name: 'post-details', params: { id: post.id } }"
          class="btn btn-primary"
          >Vedi</router-link
        >
      </div>
      <div class="card-body">
        <h5 class="card-title">
          {{ post.title }}
          <sub
            :class="`badge badge-pill badge-${post.category.color}`"
            style="font-size: 0.6rem"
            role="button"
            >{{ post.category.label }}
          </sub>
        </h5>
        <p class="card-text">
          {{ post.content }}
        </p>
        <div class="card-footer d-flex justify-content-between mt-3">
          <!-- Tags -->
          <div class="tags d-flex justify-content-center">
            <div class="tag mr-2" v-for="tag in post.tags" :key="tag.id">
              <span
                class="badge text-white"
                :style="`background-color: ${tag.color}`"
                >{{ tag.label }}</span
              >
            </div>
          </div>
          <!-- date -->
          <div class="date">
            <strong>Modificato il:</strong> {{ updateAt(post.updated_at) }}
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "PostCard",
  props: ["post"],
  data() {
    return {
      selectedPage: 0,
    };
  },
  methods: {
    updateAt(date) {
      const newDate = new Date(date);
      const day =
        newDate.getDate() < 10 ? "0" + newDate.getDate() : newDate.getDate();
      const month =
        newDate.getMonth() < 10 ? "0" + newDate.getMonth() : newDate.getMonth();
      const year = newDate.getFullYear();
      const stringDate = `${day}/${month}/${year}`;
      return stringDate;
    },
  },
};
</script>

<style>
</style>