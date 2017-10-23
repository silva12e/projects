require('./bootstrap');

import VueRouter from 'vue-router';
import Vue from 'vue';
import VModal from 'vue-js-modal';
 
window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(VModal);

require('./components');
const routes = require('./routes');

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: routes.default
    
});

window.app = new Vue({
    router,
    data: {
    	user : {},
  },
}).$mount('#app');
