<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <router-link class="navbar-brand" :to="{ path: '/' }">
      {{ title }}
    </router-link>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <router-link class="nav-link" :to="{ path: '/' }" role="button">
            Home
          </router-link>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input
          class="form-control mr-sm-2"
          type="text"
          placeholder="Cerca per Titolo..."
          v-model="textSearched"
        />
        <router-link
          class="btn btn-outline-success my-2 my-sm-0"
          :to="{ name: 'search', params: { search: textSearched } }"
        >
          Search
        </router-link>
      </form>
    </div>
  </nav>
</template>


<script>
export default {
  name: "Header",
  props: ["title"],
  data() {
    return {
      textSearched: "",
    };
  },
};
</script>