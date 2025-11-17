import '../css/app.css';
import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './Components/ExampleComponent.vue';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.mount('#app');

