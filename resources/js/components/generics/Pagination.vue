<template>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item" v-if="pagination.currentPage !== 1">
        <span class="page-link">Previous</span>
      </li>
      <li
        class="page-item"
        v-for="page in pagination.lastPage"
        :key="page"
        @click="$emit('on-page', page)"
        :class="{ active: pagination.currentPage == page }"
      >
        <span class="page-link active" role="button">{{ page }}</span>
      </li>
      <li class="page-item">
        <span
          class="page-link"
          v-if="pagination.lastPage > pagination.currentPage"
        >
          Next
        </span>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "Pagination",
  props: ["pagination"],
};
</script>

<style lang="scss" scoped>
</style>