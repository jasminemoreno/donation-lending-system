import { createRouter, createWebHistory } from 'vue-router'

import UserLogin from '../user/login.vue'
import UserSignup from '../user/signup.vue'

const routes = [
  { path: '/login', name:'user.login', component: UserLogin },
  { path: '/register',  name: 'user.register', component: UserSignup },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router