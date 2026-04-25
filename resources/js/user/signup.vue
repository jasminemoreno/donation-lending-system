<template>
    <div class="page-wrapper">
  
      <div class="signup-card">
  
        <!-- LEFT SIDE -->
        <div class="left-side" :style="leftStyle"></div>
  
        <!-- RIGHT SIDE -->
        <div class="right-side">
  
          <div class="signup-content">
  
            <!-- HEADER -->
            <div class="header">
              <div class="title">Create an Account</div>
              <div class="subtitle">Sign up to get started</div>
            </div>
  
            <!-- FORM -->
            <div class="form-container">
  
              <!-- FULL NAME -->
              <div class="form-group">
                <label>Full Name</label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <img :src="userIcon" width="18">
                  </span>
                  <input v-model="form.name" type="text" class="form-control" placeholder="Enter full name">
                </div>
              </div>
  
              <!-- EMAIL -->
              <div class="form-group">
                <label>Email</label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <img :src="mailIcon" width="18">
                  </span>
                  <input v-model="form.email" type="email" class="form-control" placeholder="Enter email">
                </div>
              </div>
  
              <!-- PHONE -->
              <div class="form-group">
                <label>Phone Number</label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <img :src="phoneIcon" width="18">
                  </span>
                  <input v-model="form.phone" type="text" class="form-control" placeholder="Enter phone number">
                </div>
              </div>
  
              <!-- ADDRESS -->
              <div class="form-group">
                <label>Address</label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <img :src="locationIcon" width="18">
                  </span>
                  <input v-model="form.address" type="text" class="form-control" placeholder="Enter address">
                </div>
              </div>
  
              <!-- PASSWORD -->
              <div class="form-group">
                <label>Password</label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <img :src="passwordIcon" width="18">
                  </span>
                  <input v-model="form.password" type="password" class="form-control">
                </div>
              </div>
  
              <!-- CONFIRM PASSWORD -->
              <div class="form-group">
                <label>Confirm Password</label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <img :src="passwordIcon" width="18">
                  </span>
                  <input v-model="form.confirm_password" type="password" class="form-control">
                </div>
              </div>
  
              <!-- TERMS -->
              <div class="terms">
                <label>
                  <input type="checkbox" v-model="form.terms">
                  I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
              </div>
  
              <!-- BUTTON -->
              <button class="signup-btn" @click="register">
                Sign Up
              </button>
  
              <!-- LOGIN -->
              <div class="login-text">
                Already have an account?
                <a href="/login">Log in</a>
              </div>
  
              <p class="error" v-if="error">{{ error }}</p>
  
            </div>
  
          </div>
  
        </div>
  
      </div>
  
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  import userIcon from '../assets/icons/user.png'
  import mailIcon from '../assets/icons/mail.png'
  import phoneIcon from '../assets/icons/phone.png'
  import locationIcon from '../assets/icons/location.png'
  import passwordIcon from '../assets/icons/password.png'
  import bgImage from '../assets/img/background1.png'
  
  export default {
    data() {
      return {
        error: '',
  
        userIcon,
        mailIcon,
        phoneIcon,
        locationIcon,
        passwordIcon,
        bgImage,
  
        form: {
          name: '',
          email: '',
          phone: '',
          address: '',
          password: '',
          confirm_password: '',
          terms: false
        }
      }
    },
  
    methods: {
      async register() {
        this.error = ''
  
        if (this.form.password !== this.form.confirm_password) {
          this.error = "Passwords do not match"
          return
        }
  
        if (!this.form.terms) {
          this.error = "You must accept the terms"
          return
        }
  
        try {
          const res = await axios.post('/api/register', this.form)
  
          alert(res.data.message)
  
          window.location.href = '/login'
  
        } catch (err) {
          this.error = err.response?.data?.message || 'Registration failed'
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
    margin: 0;
    height: 100%;
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
  .signup-card {
    width: 1200px;
    height: 650px;
    display: flex;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  }
  
  /* LEFT */
  .left-side {
    flex: 0.9;
  }
  
  .right-side {
  flex: 1.25;
  background: #fff;
  padding: 40px;

  display: flex;
  justify-content: center;
  align-items: flex-start; /* IMPORTANT: no vertical centering */

  overflow: hidden; /* prevent outer scroll */
}

/* THIS is the scroll container */
.signup-content {
  width: 100%;
  max-width: 460px;

  height: 100%;              /* fill right side */
  overflow-y: auto;          /* ENABLE SCROLL */
  padding-right: 10px;       /* space for scrollbar */

  display: flex;
  flex-direction: column;
}

/* optional: nicer scrollbar */
.signup-content::-webkit-scrollbar {
  width: 6px;
}

.signup-content::-webkit-scrollbar-thumb {
  background: #187342;
  border-radius: 10px;
}
  /* HEADER */
  .header {
    text-align: center;
    margin-bottom: 10px;
  }
  
  .title {
    font-size: 32px;
    font-weight: 700;
    color: #064134;
  }
  
  .subtitle {
    font-size: 14px;
    color: gray;
  }
  
  /* FORM */
  .form-container {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  
  /* GROUP */
  .form-group {
    margin-top: 5px;
  }
  
  label {
    font-size: 13px;
  }
  
  /* INPUT */
  .input-wrapper {
    display: flex;
    margin-top: 5px;
  }
  
  .input-icon {
    background: #f1f1f1;
    padding: 0 14px;
    height: 48px;
    display: flex;
    align-items: center;
    border: 1px solid #ced4da;
    border-right: none;
    border-radius: 12px 0 0 12px;
  }
  
  .form-control {
    width: 100%;
    height: 48px;
    border: 1px solid #ced4da;
    padding: 0 10px;
    outline: none;
    border-radius: 0 12px 12px 0;
  }
  
  /* TERMS */
  .terms {
    font-size: 12px;
    margin-top: 8px;
  }
  
  .terms a {
    color: #187342;
  }
  
  /* BUTTON */
  .signup-btn {
    width: 100%;
    height: 48px;
    margin-top: 12px;
  
    background: #187342;
    color: white;
  
    border: none;
    border-radius: 12px;
  
    font-weight: bold;
    cursor: pointer;
  
    display: block;
  }
  
  .signup-btn:hover {
    background: #145c33;
  }
  
  /* LOGIN */
  .login-text {
    text-align: center;
    margin-top: 10px;
  }
  
  .login-text a {
    color: #187342;
  }
  
  /* ERROR */
  .error {
    color: red;
    margin-top: 8px;
  }
  </style>