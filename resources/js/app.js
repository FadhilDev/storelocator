require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue'
import GoogleMap from "./components/GoogleMap";
import Services from "./components/Services";

import VueRouter from 'vue-router'
Vue.use(VueRouter);
const router = new VueRouter({
 routes: [
        { path: '/', component: Services },
        { path: '/google_map', component: GoogleMap }
    ]
});

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
Vue.use(Vuetify,{rtl:true});

import * as VueGoogleMaps from "vue2-google-maps";

Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY",
        libraries: "places" // necessary for places input
    }
});
new Vue({
    router,
    render: h => h(App)
  }).$mount('#app')
  
