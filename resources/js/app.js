require('./bootstrap')

import { createApp } from 'vue'
import Users from './components/Users'
import VueAxios from 'vue-axios'
const app = createApp({})

app.component('users', Users)
app.use(VueAxios, axios)
app.mount('#app')