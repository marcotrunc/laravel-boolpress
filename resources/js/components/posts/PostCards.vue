<template>
  <section>
    <!-- Card -->
    <div class="card my-4" v-for="post in posts" :key="post.id">
      <div class="card-header">{{ post.category.label }}</div>
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
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <div class="card-footer d-flex justify-content-between">
          <!-- Tags -->
          <div class="tags">
            <span
              class="badge text-white"
              :style="`background-color: ${post.tags.color}`"
              >{{ post.tags.label }}</span
            >
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
  name: "PostCards",
  props: ["posts"],
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