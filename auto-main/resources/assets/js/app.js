require('./bootstrap');

window.Vue = require('vue');
import VeeValidate from 'vee-validate';
import VueSweetAlert from 'vue-sweetalert';
import vmodal from 'vue-js-modal';
import Notifications from 'vue-notification';
import money from 'v-money';

Vue.use(money, {precision: 4});
Vue.use(Notifications);
Vue.use(vmodal);
Vue.use(VeeValidate);
Vue.use(VueSweetAlert);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('dashboard', require('./components/Dashboard.vue'));
Vue.component('vehicle-types', require('./components/VehicleTypes.vue'));
Vue.component('service-dashboard', require('./components/car_services/Index.vue'));
Vue.component('electric-car', require('./components/car_services/Electric.vue'));
Vue.component('diesel-car', require('./components/car_services/Diesel.vue'));
Vue.component('gas-car', require('./components/car_services/Gas.vue'));
Vue.component('car-services', require('./components/car_services/Services.vue'));
Vue.component('service-list', require('./components/car_services/ServiceByType.vue'));
Vue.component('services', require('./components/Services.vue'));
Vue.component('appointments', require('./components/Appointments.vue'));


window.swal = require('sweetalert2');

const app = new Vue({
    el: '#app'
});

$(document).ready(function () 
{
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () 
    {
      hamburger_cross();      
    });

    function hamburger_cross() 
    {
      if (isClosed == true) 
      {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } 
      else 
      {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  $('[data-toggle="offcanvas"]').click(function () 
  {
        $('#wrapper').toggleClass('toggled');
  });  
});