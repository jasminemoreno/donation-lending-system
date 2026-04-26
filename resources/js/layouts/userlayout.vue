<template>
  <div class="layout">

    <!-- NAVBAR -->
    <navbar class="top-navbar" />

    <!-- PAGE CONTENT ONLY SCROLLS -->
    <main class="content">
      <router-view />
    </main>

  </div>
</template>

<script>
import navbar from "@/components/user/navbar.vue"

export default {
  components: {
    navbar
  }
}
</script>

<style scoped>
.layout {
  height: 100vh;
  display: flex;
  flex-direction: column;
  background: #C6F2E0;
  overflow: hidden; /* prevent whole page scroll */
}

/* fixed navbar space */
.top-navbar {
  flex-shrink: 0;
  height: 60px;
}

/* only content scrolls */
.content {
  flex: 1;
  overflow-y: auto;
  padding: 20px;
}
</style>