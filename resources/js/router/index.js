import { createRouter, createWebHistory } from 'vue-router'

import UserLogin from '../user/login.vue'
import UserSignup from '../user/signup.vue'
import Home from '../user/home.vue'
import Items from '../user/item.vue'
import Request from '../user/request.vue'

import UserLayout from '../layouts/userlayout.vue'

const routes = [
  // AUTH
  {
    path: '/login',
    name: 'user.login',
    component: UserLogin
  },
  {
    path: '/register',
    name: 'user.register',
    component: UserSignup
  },

  // USER LAYOUT
  {
    path: '/',
    component: UserLayout,
    children: [
      {
        path: 'home',
        name: 'user.home',
        component: Home
      },
      {
        path: 'items',
        name: 'user.items',
        component: Items
      },
      {
        path: 'requests',
        name: 'user.requests',
        component: Request
      }
    ]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router