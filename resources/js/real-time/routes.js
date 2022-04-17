import { createRouter, createWebHistory } from 'vue-router'; 

import Landing from './pages/Landing'; 
import Register from './pages/Register'; 
import RedisTest from './pages/RedisTest'; 

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
        { 
            name: 'redis-test', 
            path: '/redis-test', 
            component: RedisTest, 
        },
    ], 
}); 
export default router;