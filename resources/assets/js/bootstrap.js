import Vue from 'vue'
import lodash from 'lodash'
import jquery from 'jquery'
import 'bootstrap-sass';
import axios from 'axios'
import localforage from 'localforage'

window.Vue = Vue;
window._ = lodash;
window.$ = window.jQuery = jquery;
window.axios = axios;
window.localforage = localforage;

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

localforage.config({
    driver: localforage.LOCALSTORAGE,
    storeName: 'boilerplate'
});
