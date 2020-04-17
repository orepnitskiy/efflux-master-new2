window._ = require('lodash');
try {
  window.Popper = require('popper.js').default;
  window.$ = window.jQuery = require('jquery');
  require('bootstrap');
} catch (e) {
  alert('jQuery-Bootstrap: Could not load');
}
require('admin-lte');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';
window.Vue = Vue;

import {
  BootstrapVue,
  BootstrapVueIcons
} from 'bootstrap-vue';

Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)