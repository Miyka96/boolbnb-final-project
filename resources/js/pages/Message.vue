<template>
  <div>
    <div class="messages_page container-fuid mt-5 py-5">
      <form class="form-wrapper" v-on:submit.prevent="submitForm">
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
            placeholder="Inserisci e-mail... (es. mariorossi@email.it)"
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

<style lang="scss" scoped>
@import '../../sass/_variables.scss';

.messages_page{
  height: 100vh;
  display: flex;
  padding: 100px 30%;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

input:focus, textarea:focus{
  outline: none !important; 
  border-color: $login !important; 
  box-shadow: 0 0 10px $login !important;
}

.form-wrapper{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
}

.form-group{
  width: 80%;
}

.btn{
  background-color: $login;
  border-color: $login;
}

</style>
