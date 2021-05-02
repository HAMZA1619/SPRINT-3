
import Vue from 'vue'
import App from './App.vue'
import router from './router'

import 'bootstrap/dist/css/bootstrap.min.css'
import '@/assets/style/main.css'


new Vue({
    router,
    render: hamza => hamza(App)
  }).$mount('#app')
