<template>
  <section class="my-5">
    <h2>Contattaci</h2>

    <!-- Alert -->
    <div v-if="alert">
      <Alert type="success">{{ alert }}</Alert>
    </div>

    <!-- Form -->
    <div class="form">
      <!-- Email -->
      <div class="form-group">
        <label for="email">Email Indirizzo</label>
        <input
          type="email"
          class="form-control"
          id="email"
          v-model="form.email"
        />
        <small id="emailHelp" class="form-text text-muted">
          Inserisci qui la tua mail
        </small>
        <!-- Text-Area -->
        <div class="form-group">
          <label for="text-area">Messaggio</label>
          <textarea
            class="form-control"
            id="text-area"
            rows="8"
            v-model="form.message"
          ></textarea>
          <small id="emailHelp" class="form-text text-muted">
            Inserisci qui il testo del messaggio
          </small>
        </div>
        <!-- Fake Button -->
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary" v-on:click="sendMail">Invia</button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Alert from "../generics/Alert.vue";
export default {
  name: "Contacts",
  components: { Alert },
  data() {
    return {
      form: {
        email: "",
        message: "",
      },
      alert: "",
    };
  },
  methods: {
    sendMail() {
      const params = {
        email: this.form.email,
        message: this.form.message,
      };
      axios
        .post("http://localhost:8000/api/messages", params)
        .then((res) => {
          this.form.email = "";
          this.form.message = "";
          this.alert = "Email inviata con successo";
        })
        .catch((err) => {})
        .then((res) => {});
    },
  },
};
</script>
