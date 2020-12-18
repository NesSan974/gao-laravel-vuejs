
require('./bootstrap');
import Vue from 'vue'
import Router from './router.js'
import Layout from './components/layout.vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify) 

const app = new Vue({
	el: '#main',
	vuetify: new Vuetify({}),
	router: Router,
	components: {Layout}
})

export default new Vuetify(app)