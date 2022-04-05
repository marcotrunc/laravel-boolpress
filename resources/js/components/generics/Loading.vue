<template>
  <section class="loading">
    <div class="spinner-border size-spinner" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </section>
</template>

<script>
export default { name: "Loading" };
</script>

<style lang="scss" scoped>
.loading {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  background-color: rgba(255, 255, 255, 0.5);
  .size-spinner {
    width: 3rem;
    height: 3rem;
  }
}
</style>