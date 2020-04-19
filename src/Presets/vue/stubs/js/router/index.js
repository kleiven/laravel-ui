import VueRouter from 'vue-router'
import HomeView from '../components/views/HomeView';
import ArtView from '../components/views/ArtView';



const router = new VueRouter({
    routes: [
        { path: '/', component: HomeView },
        { path: '/art', component: ArtView },
        
    ]

});


export default router;