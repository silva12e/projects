require('./bootstrap');

import VueRouter from 'vue-router';
import Vue from 'vue';
import VModal from 'vue-js-modal';
import swal from 'sweetalert';
import VeeValidate from 'vee-validate';
import datePicker from 'vue-bootstrap-datetimepicker';
import 'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css';
import VuePaginator from 'vuejs-paginator'




window.Vue = require('vue');
window.moment = require('moment');


Vue.use(moment);
Vue.use(VeeValidate);
Vue.use(datePicker);
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





