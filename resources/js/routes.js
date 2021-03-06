import Vue from 'vue'
import VueRouter from 'vue-router'

// Diciamo aVue di usare VueRouter
Vue.use(VueRouter)

// Importiamo i componenti pagine
import HomePage from './components/pages/HomePage.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';
import PostDetails from './components/pages/PostDetails.vue';
import Contacts from './components/pages/Contacts.vue';

// Inizializziamo il router
const router = new VueRouter({
    // Ci consente di usare tutte le opzioni del browser
    mode: 'history',
    linkExactActiveClass: 'active',

    // array delle rotte
    routes: [
        { path: '/', component: HomePage, name: 'home' },
        { path: '/contacts', component: Contacts, name: 'contacts' },
        { path: '/search/:search', component: HomePage, name: 'search', props: true },
        { path: '/posts/post/:slug', component: PostDetails, name: 'post-details' },
        { path: '*', component: NotFoundPage, name: 'not-found' }
    ]
});

export default router;