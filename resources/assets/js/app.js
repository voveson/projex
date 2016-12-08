
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('alert', require('./components/Alert.vue'));

const app = new Vue({
    el: '#app',
    data: {
        message: "hello Vue.js",
        alert_message: '',
        alert_class: false
    },
    methods: {
        showAlert(type, message) {
            this.alert_message = message;
            this.alert_class = type;
        },
        dismissAlert() {
            this.alert_message = '';
            this.alert_class = false;
        }
    }
});
