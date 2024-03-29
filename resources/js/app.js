/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
window.axios = require("axios");

// Init Vue main istance
import App from "./App.vue";
import router from "./router";

const root = new Vue({
    el: "#root",
    router,
    render: h => h(App)
});
