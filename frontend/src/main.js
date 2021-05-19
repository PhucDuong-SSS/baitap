import 'core-js/stable'
import Vue from 'vue'
import App from './App'
import router from './router'
import CoreuiVue from '@coreui/vue'
import store from './store'
import axios from 'axios'
window.axios = axios
window.AccessToken = localStorage.getItem('accessToken') 
axios.defaults.baseURL = 'http://projectfinal.local:9091/api'
axios.defaults.headers.common['Authorization'] = 'Bearer'+ AccessToken ;
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded'

Vue.config.performance = true
Vue.use(CoreuiVue)
Vue.prototype.$log = console.log.bind(console)

new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: {
    App
  }
})


