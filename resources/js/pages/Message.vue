<template>
  <div>
    <div class="container mt-5 py-5">
      <form v-on:submit.prevent="submitForm">
        <div class="form-group">
          <label for="name">Nome completo</label>
          <input
            type="text"
            class="form-control"
            id="name"
            placeholder="Inserisci il tuo nome completo..."
            v-model="form.name"
          />
        </div>
        <div class="form-group">
          <label for="telephone">Numero di telefono</label>
          <input
            type="text"
            class="form-control"
            name="telephone"
            id="telephone"
            placeholder="Inserisci il tuo numero di telefono..."
            v-model="form.telephone"
          />
        </div>
        <div class="form-group">
          <label for="email">Indirizzo email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="mario@rossi.it"
            v-model="form.email"
          />
        </div>
        <div class="form-group">
          <label for="content">Messaggio</label>
          <textarea
            name="content"
            class="form-control"
            id="content"
            rows="3"
            placeholder="Inserisci testo del messaggio..."
            v-model="form.content"
          ></textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-primary">Invia</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "PostFormAxios",
  data() {
    return {
      form: {
        name: "",
        telephone: "",
        email: "",
        content: "",
        house_id: this.$route.params.id,
      },
    };
  },
  methods: {
    submitForm() {
      axios
        .post("/send/message", this.form)
        .then((res) => {
          this.$router.push({
            name: "house.show",
            params: this.$route.params.id,
          });
        })
        .catch((error) => {
          alert("errore");
        });
    },
  },
};
</script>

<style lang="scss" scoped></style>
