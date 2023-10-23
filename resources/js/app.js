require('./bootstrap');

import Vue from 'vue';
import NewArrivals from './components/NewArrivals.vue';

import swal from 'sweetalert2';
window.swal = swal;

import VueCtkDateTimePicker from 'vue-ctk-date-time-picker';
import 'vue-ctk-date-time-picker/dist/vue-ctk-date-time-picker.css';

Vue.component('VueCtkDateTimePicker', VueCtkDateTimePicker);

Vue.component('new-arrivals', NewArrivals);


const app = new Vue({
	el: '#app'
});