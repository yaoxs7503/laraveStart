import router from './router';

require('./bootstrap');

window.Vue = require('vue');
import App from  './components/App';
// Vue.component('navbar', require('./components/Navbar.vue').default);

// Vue.component('app', require('./components/Articles.vue').default);
// Vue.component('articles', require('./components/Articles.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components:{
        App
    },
    router
});
