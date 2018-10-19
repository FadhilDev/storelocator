require('./bootstrap');
window.Vue = require('vue');
import App from './App.vue'
import VueI18n from 'vue-i18n'
import {messages} from './lang.js'
Vue.use(VueI18n);
const i18n=new VueI18n({
    locale:'en',
    messages,
})

import VueRouter from 'vue-router'
import {routes} from './routes.js'
Vue.use(VueRouter);
const router = new VueRouter({
    routes
});

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
Vue.use(Vuetify);

import * as VueGoogleMaps from "vue2-google-maps";

Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY",
        libraries: "places" // necessary for places input
    }
});
new Vue({
    i18n,
    router,
    render: h => h(App)
  }).$mount('#app')
  
