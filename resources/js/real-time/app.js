require('./bootstrap');

import { createApp } from 'vue';
import router from './routes';
import { SnackbarService, Vue3Snackbar } from "vue3-snackbar";

import App from './App.vue';

const app = createApp(App); 
app.use(router);
app.use(SnackbarService);
app.component("vue3-snackbar", Vue3Snackbar);

app.mount('#app');



