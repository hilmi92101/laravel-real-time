require('./bootstrap');

import { createApp } from 'vue';

import Landing from './components/Landing.vue';

const app = createApp(Landing); 
app.mount('#app');
