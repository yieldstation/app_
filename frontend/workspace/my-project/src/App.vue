<template>
  <div v-show="message">
    {{ json }}
  </div>
  <img alt="Vue logo" src="./assets/logo.png" />
  <HelloWorld msg="Welcome to Your Vue.js + TypeScript App" />
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
import HelloWorld from "./components/HelloWorld.vue";
import axios, { AxiosRequestConfig } from "axios";

@Options({
  components: {
    HelloWorld,
  },
})
export default class App extends Vue {
  private json = "";
  mounted() {
    axios.get("http://localhost:8080/api/events").then((response) => {
      //this.json = JSON.stringify(response.status);
      this.json = "json予定";
      alert("api call");
    });
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
