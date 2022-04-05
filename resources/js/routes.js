import Vue from 'vue'
import VueRouter from 'vue-router'

// Diciamo aVue di usare VueRouter
Vue.use(VueRouter)

// Importiamo i componenti pagine
import HomePage from './components/pages/HomePage.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';

// Inizializziamo il router
const router = new VueRouter({
    // Ci consente di usare tutte le opzioni del browser
    mode: 'history',
    linkExactActiveClass: 'active',

    // array delle rotte
    routes: [
        { path: '/', component: HomePage, name: 'home' },
        { path: '*', component: NotFoundPage, name: 'not-found' }]
});

export default router;