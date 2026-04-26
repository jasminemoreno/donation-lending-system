<template>
  <main class="page">

    <!-- HEADER -->
    <h2 class="page-title">My Requests</h2>

    <!-- EMPTY STATE -->
    <div v-if="requests.length === 0" class="empty-box">
      <h3>No Requests Yet</h3>
      <p>You have not requested any donation or lending items.</p>
    </div>

    <!-- REQUEST LIST -->
    <div v-else class="request-list">

      <div
        v-for="request in requests"
        :key="request.id"
        class="request-card"
      >

        <!-- LEFT -->
        <div class="left">

          <!-- IMAGE -->
          <img
            :src="request.item_image || defaultImage"
            class="item-image"
          />

          <!-- INFO -->
          <div class="info">
            <h3>{{ request.item_title }}</h3>

            <p>
              Type:
              {{ request.request_type === 'borrow'
                ? 'Borrow'
                : 'Get Item' }}
            </p>

            <!-- STATUS -->
            <span
              class="status"
              :class="request.status"
            >
              {{ request.status }}
            </span>
          </div>

        </div>

        <!-- RIGHT -->
        <div class="right">

          <button
            v-if="request.status === 'pending'"
            class="cancel-btn"
            @click="cancelRequest(request.id)"
          >
            Cancel
          </button>

        </div>

      </div>

    </div>

  </main>
</template>

<script>
import axios from "axios"

export default {
  data() {
    return {
      requests: [],
      defaultImage: "https://via.placeholder.com/80"
    }
  },

  mounted() {
    this.fetchRequests()
  },

  methods: {

    async fetchRequests() {
      try {
        const res = await axios.get("/api/my-requests")
        this.requests = res.data
      } catch (error) {
        console.log(error)
      }
    },

    async cancelRequest(id) {
      try {
        await axios.delete(`/api/my-requests/${id}`)
        this.fetchRequests()
      } catch (error) {
        console.log(error)
      }
    }

  }
}
</script>

<style scoped>
.page {
  padding: 24px;
}

.page-title {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 20px;
}

.request-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

/* CARD */
.request-card {
  background: white;
  padding: 18px;
  border-radius: 14px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* LEFT */
.left {
  display: flex;
  gap: 14px;
  align-items: center;
}

.item-image {
  width: 80px;
  height: 80px;
  border-radius: 12px;
  object-fit: cover;
  background: #eee;
}

.info h3 {
  margin: 0;
  font-size: 16px;
}

.info p {
  margin-top: 5px;
  font-size: 13px;
  color: gray;
}

/* STATUS */
.status {
  display: inline-block;
  margin-top: 8px;
  padding: 5px 10px;
  border-radius: 8px;
  font-size: 12px;
  text-transform: capitalize;
}

.pending {
  background: #fff5cc;
  color: #d39e00;
}

.approved {
  background: #dff7df;
  color: #187342;
}

.rejected {
  background: #ffe0e0;
  color: #d33;
}

/* BUTTON */
.cancel-btn {
  background: transparent;
  color: red;
  border: none;
  cursor: pointer;
  font-size: 14px;
}

/* EMPTY */
.empty-box {
  background: white;
  padding: 40px;
  border-radius: 14px;
  text-align: center;
}

.empty-box h3 {
  margin-bottom: 10px;
}

.empty-box p {
  color: gray;
}
</style>