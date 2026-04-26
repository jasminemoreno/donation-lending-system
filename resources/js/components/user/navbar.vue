<template>
  <header class="navbar">

    <!-- LEFT -->
    <div class="left">
      <div class="logo-box">
        <img :src="heartIcon" class="logo" />
      </div>

      <div>
        <h1 class="title">Community Hub</h1>
        <p class="subtitle">Donation & Lending</p>
      </div>
    </div>

    <!-- NAV -->
    <nav class="nav-links">

      <!-- HOME -->
      <router-link
        to="/home"
        class="nav-item"
        :class="{ active: isActive('/home') }"
      >
        <img :src="isActive('/home') ? homeActiveIcon : homeIcon" />
        Home
      </router-link>

      <!-- BROWSE -->
      <router-link
        to="/items"
        class="nav-item"
        :class="{ active: isActive('/items') }"
      >
        <img :src="isActive('/items') ? browseActiveIcon : browseIcon" />
        Browse Items
      </router-link>

      <!-- REQUESTS (NOW CLICKABLE) -->
      <router-link
        to="/requests"
        class="nav-item"
        :class="{ active: isActive('/requests') }"
      >
        <img :src="isActive('/requests') ? requestActiveIcon : requestIcon" />
        My Requests
      </router-link>

      <!-- LISTINGS -->
      <a class="nav-item disabled">
        <img :src="shopIcon" />
        My Listings
      </a>

      <!-- MESSAGES -->
      <a class="nav-item disabled">
        <img :src="messageIcon" />
        Messages
      </a>

    </nav>

    <!-- USER -->
    <div class="user">
      <img :src="userImg" class="avatar" />
      <span>Jane Dela Cruz</span>
    </div>

  </header>
</template>

<script>
import heartIcon from "@/assets/img/hearth.png"

// HOME
import homeIcon from "@/assets/icons/home.png"
import homeActiveIcon from "@/assets/icons/home-filled.png"

// BROWSE
import browseIcon from "@/assets/icons/menu.png"
import browseActiveIcon from "@/assets/icons/application.png"

// REQUEST
import requestIcon from "@/assets/icons/request.png"
import requestActiveIcon from "@/assets/icons/request-filled.png"

// OTHERS
import shopIcon from "@/assets/icons/shop.png"
import messageIcon from "@/assets/icons/message.png"

export default {
  data() {
    return {
      heartIcon,

      homeIcon,
      homeActiveIcon,

      browseIcon,
      browseActiveIcon,

      requestIcon,
      requestActiveIcon,

      shopIcon,
      messageIcon,

      userImg: "https://via.placeholder.com/30"
    }
  },

  methods: {
    isActive(path) {
      return this.$route.path === path
    }
  }
}
</script>

<style scoped>
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 24px;
  background: white;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* LEFT */
.left {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo-box {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo {
  width: 40px;
  height: 40px;
  object-fit: contain;
}

.title {
  font-size: 16px;
  font-weight: 600;
  margin: 0;
}

.subtitle {
  font-size: 12px;
  color: gray;
  margin: 0;
}

/* NAV */
.nav-links {
  display: flex;
  gap: 20px;
  font-size: 14px;
}

.nav-item {
  display: flex;
  align-items: center;
  gap: 6px;
  text-decoration: none;
  color: #333;
  padding: 8px 12px;
  min-width: 120px;
  justify-content: center;
  border-bottom: 2px solid transparent;
  font-weight: 600;
  transition: 0.2s ease;
  border-radius: 8px;
}

.nav-item img {
  width: 16px;
  height: 16px;
}

/* ACTIVE */
.active {
  color: #187342;
  border-bottom: 2px solid #187342;
  background: #f3faf5;
}

/* DISABLED */
.disabled {
  opacity: 0.5;
  cursor: not-allowed;
}

/* USER */
.user {
  display: flex;
  align-items: center;
  gap: 8px;
}

.avatar {
  width: 30px;
  height: 30px;
  border-radius: 50%;
}
</style>