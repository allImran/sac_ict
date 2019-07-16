/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)
window.bus = new Vue();
import Vue from 'vue'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('album', require('./components/Album.vue').default);
Vue.component('product', require('./components/Product.vue').default);
Vue.component('cart-count', require('./components/CartCount.vue').default);
Vue.component('cart-detail', require('./components/CartDetail.vue').default);
Vue.component('payment', require('./components/payment.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    
    
    data: {
        cart: []
    },
    created() {
        this.getCart();
 
        bus.$on('added-to-cart', (album) => {
            this.addToCart(album);
              
        });

        bus.$on('remove-from-cart', (album) => {
            this.removeFromCart(album);
        });

    },
    computed: {
        cartTotal() {
            return this.cart.reduce((total, album) => {
                return total + album.qty * album.price;
            }, 0);
        },
        totalItems() {
            return this.cart.reduce((total, album) => {
                return total + album.qty;
            }, 0);
        }
    },
    methods: {
        
        getCart() {
            
            if (localStorage && localStorage.getItem('cart')) {
                this.cart = JSON.parse(localStorage.getItem('cart'));

            } else {
                this.cart = [];
            }
        },
        addToCart(album) {
            const matchingProductIndex = this.cart.findIndex((item) => {
                return item.id === album.id;
            });

            if (matchingProductIndex > -1) {
                this.cart[matchingProductIndex].qty++;
            } else {
                album.qty = 1;
                this.cart.push(album);

            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        removeFromCart(album) {
            const matchingProductIndex = this.cart.findIndex((item) => {
                return item.id == album.id;
            });

            if (this.cart[matchingProductIndex].qty <= 1) {
                this.cart.splice(matchingProductIndex, 1);
            } else {
                this.cart[matchingProductIndex].qty--;
            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        }

    }
});

