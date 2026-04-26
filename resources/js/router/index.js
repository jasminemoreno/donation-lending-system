import { createRouter, createWebHistory } from 'vue-router'

import UserLogin from '../user/login.vue'
import UserSignup from '../user/signup.vue'
import Home from '../user/home.vue'

import userlayout from '../layouts/userlayout.vue'
import Userlayout from '../layouts/userlayout.vue'

const routes = [
  { path: '/login', name:'user.login', component: UserLogin },
  { path: '/register',  name: 'user.register', component: UserSignup },

  {
    path: '/',
    component: Userlayout,
    children: [{
      path: 'home',
      name: 'user.home',
      component: Home
    },
    ]
  }
]


const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router