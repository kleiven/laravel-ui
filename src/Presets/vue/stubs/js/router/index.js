import VueRouter from './node_modules/vue-router'
import HomeView from '../components/views/HomeView';
import DocumentationView from '../components/views/DocumentationView';



const router = new VueRouter({
    routes: [
        { path: '/', component: HomeView },
        { path: '/documentation', component: DocumentationView },
        
    ]

});


export default router;