<template>
  <div class="layout">

    <!-- NAVBAR -->
    <navbar />

    <!-- PAGE CONTENT -->
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
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background: #C6F2E0;
}

.content {
  flex: 1;
  padding: 20px;
}
</style>