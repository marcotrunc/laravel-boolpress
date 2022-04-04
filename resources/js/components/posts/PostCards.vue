<template>
  <section>
    <div class="card" v-for="post in posts" :key="post.id">
      <div class="card-header">Featured</div>
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">
          {{ post.content }}
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "PostCards",
  props: ["posts"],
};
</script>

<style>
</style>