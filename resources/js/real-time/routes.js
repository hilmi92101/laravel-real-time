import { createRouter, createWebHistory } from 'vue-router'; 

import Landing from './pages/Landing'; 
import Register from './pages/Register'; 

const router = createRouter({ 
    history: createWebHistory(), 
    routes: [ 
        { 
            name: 'landing', 
            path: '/', 
            component: Landing, 
        }, 
        { 
            name: 'register', 
            path: '/register', 
            component: Register, 
        }, 
    ], 
}); 
export default router;