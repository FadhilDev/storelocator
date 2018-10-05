require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue'
import AllLocation from "./components/AllLocation";
import SingleLocation from "./components/SingleLocation";
import Services from "./components/Services";

import VueRouter from 'vue-router'
Vue.use(VueRouter);
const router = new VueRouter({
 routes: [
        { path: '/', component: Services },
        { path: '/single_location', component: SingleLocation },
        { path: '/all_location', component: AllLocation }
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
/*new Vue({
    router,
    render: h => h(App)
  }).$mount('#app')*/
  
