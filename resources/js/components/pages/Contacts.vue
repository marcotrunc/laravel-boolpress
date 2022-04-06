<template>
  <section class="my-5">
    <h2>Contattaci</h2>
    <!-- Loader -->
    <Loading v-if="isLoading == true" />
    <!-- Alert -->
    <section v-else>
      <Alert v-if="hasErrors || alert" :type="hasErrors ? 'danger' : 'success'">
        <div v-if="alert">{{ alert }}</div>
        <div v-if="hasErrors">
          <ul>
            <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
          </ul>
        </div>
      </Alert>
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
  </section>
</template>

<script>
import Alert from "../generics/Alert.vue";
import Loading from "../generics/Loading.vue";
export default {
  name: "Contacts",
  components: { Alert, Loading },
  data() {
    return {
      form: {
        email: "",
        message: "",
      },
      alert: "",
      isLoading: false,
      errors: {},
    };
  },
  computed: {
    hasErrors() {
      return Object.keys(this.errors).length;
    },
  },
  methods: {
    sendMail() {
      this.alert = "";
      this.isLoading = true;
      const params = {
        email: this.form.email,
        message: this.form.message,
      };
      axios
        .post("http://localhost:8000/messages", params)
        .then((res) => {
          this.form.email = "";
          this.form.message = "";
          this.alert = "Email inviata con successo";
        })
        .catch((err) => {
          //   console.error(err.response.status);
          this.errors = { error: "Errore" + " " + err.response.status }; //Only in dev
        })
        .then(() => {
          this.isLoading = false;
          console.log("Chiamata Terminata");
        });
    },
  },
};
</script>
