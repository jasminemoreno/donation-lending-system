<template>
    <div class="page-wrapper">
  
      <div class="login-card">
  
        <!-- LEFT SIDE -->
        <div class="left-side" :style="leftStyle"></div>
  
        <!-- RIGHT SIDE -->
        <div class="right-side">
  
          <!-- decorative background elements -->
          <img :src="heartIcon" class="bg-icon heart" />
          <img :src="shareIcon" class="bg-icon share" />
  
          <!-- LOGIN CONTENT -->
          <div class="login-content">
  
            <div class="title">Welcome Back</div>
            <div class="subtitle">Login to continue to your account</div>
  
            <!-- EMAIL -->
            <div class="form-group">
              <label>Email</label>
              <div class="input-wrapper">
                <span class="input-icon">
                  <img :src="mailIcon" width="18">
                </span>
                <input
                  type="email"
                  v-model="form.email"
                  class="form-control"
                  placeholder="Enter email"
                >
              </div>
            </div>
  
            <!-- PASSWORD -->
            <div class="form-group">
              <label>Password</label>
              <div class="input-wrapper">
                <span class="input-icon">
                  <img :src="passwordIcon" width="18">
                </span>
                <input
                  type="password"
                  v-model="form.password"
                  class="form-control"
                  placeholder="Enter password"
                >
              </div>
            </div>
  
            <!-- REMEMBER -->
            <div class="remember-row">
              <label>
                <input type="checkbox" v-model="form.remember">
                Remember me
              </label>
  
              <a href="#">Forgot Password?</a>
            </div>
  
            <!-- LOGIN BUTTON -->
            <button class="login-btn" @click="login">
              Login
            </button>
  
            <!-- REGISTER -->
            <div class="register-text">
              Don't have an account?
              <a href="/register">Register</a>
            </div>
  
            <p class="error" v-if="error">{{ error }}</p>
  
          </div>
  
        </div>
  
      </div>
  
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  import mailIcon from '../assets/icons/mail.png'
  import passwordIcon from '../assets/icons/password.png'
  import heartIcon from '../assets/icons/hearth.png'
  import shareIcon from '../assets/icons/share.png'
  import bgImage from '../assets/img/background1.png'
  
  export default {
    data() {
      return {
        error: '',
        mailIcon,
        passwordIcon,
        heartIcon,
        shareIcon,
        bgImage,
  
        form: {
          email: '',
          password: '',
          remember: false
        }
      }
    },
  
    methods: {
      async login() {
        this.error = ''
  
        try {
          const res = await axios.post('/api/login', {
            email: this.form.email,
            password: this.form.password
          })
  
          const user = res.data.user
  
          if (user.role === 'admin') {
            window.location.href = '/admin-dashboard'
          } else {
            window.location.href = '/home'
          }
  
        } catch (err) {
          this.error = err.response?.data?.message || 'Login failed'
        }
      }
    },
  
    computed: {
  leftStyle() {
    return {
      background: `url(${this.bgImage}) center/cover no-repeat`
    }
  }
}
  }
  </script>
  
  <style scoped>
  html, body {
    height: 100%;
    margin: 0;
    overflow: hidden;
  }
  
  /* PAGE */
  .page-wrapper {
    height: 100vh;
    background: #C6F2E0;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  /* CARD */
  .login-card {
    width: 1200px;
    height: 650px;
    display: flex;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  }
  
  /* LEFT SIDE */
  .left-side {
    flex: 0.9;
  }
  
  /* RIGHT SIDE */
  .right-side {
    flex: 1.25;
    background: #fff;
    padding: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
  }
  
  /* BACKGROUND ICONS */
  .bg-icon {
    position: absolute;
    opacity: 0.08;
    z-index: 0;
  }
  
  .bg-icon.heart {
    width: 180px;
    top: 20px;
    left: 20px;
    transform: rotate(-15deg);
  }
  
  .bg-icon.share {
    width: 220px;
    bottom: 20px;
    right: 20px;
    transform: rotate(10deg);
  }
  
  /* CONTENT */
  .login-content {
    width: 100%;
    max-width: 460px;
    z-index: 1;
  }
  
  /* TEXT */
  .title {
    font-size: 38px;
    font-weight: 700;
    color: #064134;
    text-align: center;
  }
  
  .subtitle {
    font-size: 17px;
    color: gray;
    text-align: center;
    margin-bottom: 20px;
  }
  
  /* FORM */
  .form-group {
    margin-top: 18px;
  }
  
  label {
    font-size: 14px;
    color: #333;
  }
  
  /* INPUT */
  .input-wrapper {
    display: flex;
    margin-top: 5px;
  }
  
  .input-icon {
    background: #f1f1f1;
    padding: 0 14px;
    height: 52px;
    display: flex;
    align-items: center;
    border: 1px solid #ced4da;
    border-right: none;
    border-radius: 15px 0 0 15px;
  }
  
  .form-control {
    width: 100%;
    height: 52px;
    font-size: 16px;
    padding: 0 12px;
    border: 1px solid #ced4da;
    outline: none;
    border-radius: 0 15px 15px 0;
  }
  
  /* REMEMBER */
  .remember-row {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
  }
  
  .remember-row a {
    color: #187342;
    text-decoration: none;
  }
  
  /* BUTTON */
  .login-btn {
    width: 100%;
    height: 52px;
    margin-top: 20px;
    background: #187342;
    color: white;
    font-weight: 600;
    border: none;
    border-radius: 12px;
    cursor: pointer;
  }
  
  .login-btn:hover {
    background: #145c33;
  }
  
  /* REGISTER */
  .register-text {
    text-align: center;
    margin-top: 15px;
  }
  
  .register-text a {
    color: #187342;
    text-decoration: none;
  }
  
  .error {
    color: red;
    margin-top: 10px;
  }
  </style>