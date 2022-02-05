require('./bootstrap');

window.Vue = require('vue').default;

import VueFormulate from '@braid/vue-formulate';

Vue.use(VueFormulate);

// import '/assets/formulate.css';

Vue.component('pagination', require('laravel-vue-pagination'));



import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);


//import progress Bar
import VueProgressBar from 'vue-progressbar';

const options = {
  color: '#bffaf3',
  failedColor: '#874b4b',
  thickness: '5px',
  transition: {
    speed: '0.2s',
    opacity: '0.6s',
    termination: 300
  },
  autoRevert: true,
  location: 'top',
  inverse: false
};
 
Vue.use(VueProgressBar, options);


//decalring  filter globally
Vue.filter('capitalise', function(value) {

    if (!value) return '';
    value = value.toString();
    return value.charAt(0).toUpperCase() + value.slice(1);

});



 Vue.filter('firstLetter', function(value) {

    if (!value) return '';

      value = value.toString();

     return value.charAt(0).toUpperCase() + '. ';

});


//import vform
import {Form, Errors } from 'vform';
 
Vue.component(Errors.name, Errors);

window.Form = Form;


// sweet alert
import Swal from 'sweetalert2';

window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton:false,
  timer: 3000,
  timerProgressBar: true,
  didOpen:(toast)=>{
        toast.addEventLisener('mouseenter', Swal.stopTimer)
       toast.addEventLisener('mouseleave', Swal.resumeTimer)
  }
});

window.toast = Toast;


window.Fire = new Vue();




//Router
import router from './routes';



import VueToastr2 from 'vue-toastr-2'
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
 
window.toastr = require('toastr')
 
Vue.use(VueToastr2);



//registering components globally

require('./component');


//date picker formulate

import VueFormulateDatepickerPlugin from "vue-formulate-datepicker";
// Add styles if need
import "@sum.cumo/vue-datepicker/dist/Datepicker.css";

Vue.use(VueFormulate, {
  plugins: [VueFormulateDatepickerPlugin]
});


//moments js

import moment from 'moment';

Vue.filter('dateFormat', function(time){

return moment(time).format('Do MMMM  YYYY, h:mm a');
})

Vue.filter('dateFormat2', function(time){

return moment(time).format('Do MMMM  YYYY');
})

Vue.filter('dateReorder', function(time){
return moment(time).format('Do MMMM  YYYY');
})

Vue.filter('birthDay', function(time){
return moment(time).format('Do MMMM');
})

Vue.filter('addDays', function(time, day){
return moment(time).add(day, 'days');
})



const app = new Vue({
    el: '#app', 
    router,
  
});
