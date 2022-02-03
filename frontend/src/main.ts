import { createApp } from 'vue';
import Vue from 'vue';
import App from './App.vue';
import store from "./store";
import '../index.css';
import titleMixin from "./mixins/titleMixin";
import router from "./router";

createApp(App)
    .use(store)
    .use(router)
    .mixin(titleMixin)
    .mount('#app');
