import { createApp } from 'vue';

import './bootstrap.js';

import Alpine from 'alpinejs';

//import AddToCart from './components/AddToCart.vue';
import Ex from './components/Ex.vue';

window.Alpine = Alpine;

Alpine.start();

const app = createApp();

app.component('add-ex', Ex)

//app.component('add-to-cart', AddToCart);

app.mount('#app');
