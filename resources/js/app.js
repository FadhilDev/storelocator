require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue'
<<<<<<< HEAD
import GoogleMap from "./components/GoogleMap";
import Services from "./components/Services";
=======


import VueI18n from 'vue-i18n'
import {messages} from './lang.js'
Vue.use(VueI18n);
const i18n=new VueI18n({
    locale:'ar',
    messages,
})

>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b

import VueRouter from 'vue-router'
import {routes} from './routes.js'
Vue.use(VueRouter);
const router = new VueRouter({
<<<<<<< HEAD
 routes: [
        { path: '/', component: Services },
        { path: '/google_map', component: GoogleMap }
    ]
=======
    routes
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
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
<<<<<<< HEAD
=======
    i18n,
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
    router,
    render: h => h(App)
  }).$mount('#app')
  
