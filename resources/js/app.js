import './bootstrap';

import {createApp} from 'vue'

import App from './App.vue'
import navbar from './components/navbar.vue'
import usuarios from './components/usuarios.vue'

createApp(App,{
    
})
.component('navbar', navbar)
.component('usuarios', usuarios)
.mount("#app")
