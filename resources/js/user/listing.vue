<template>
  <main class="page">

    <h2 class="title">My Listings</h2>

    <!-- TABS -->
    <div class="tabs">
      <button
        :class="{ active: tab === 'requests' }"
        @click="tab = 'requests'; fetchRequests()"
      >
        Requests
      </button>

      <button
        :class="{ active: tab === 'posted' }"
        @click="tab = 'posted'; fetchItems()"
      >
        Posted Items
      </button>
    </div>

    <!-- ================= REQUESTS ================= -->
    <section v-if="tab === 'requests'">

      <h3>Incoming Requests</h3>

      <div v-if="requests.length === 0" class="empty">
        No requests yet
      </div>

      <div v-for="req in requests" :key="req.id" class="card">

        <div class="info">
          <p class="name">{{ req.requester.name }}</p>
          <p class="desc">
            {{ req.request_type }} request for {{ req.item.title }}
          </p>

          <span class="status" :class="req.status">
            {{ req.status }}
          </span>
        </div>

        <div class="actions" v-if="req.status === 'pending'">

          <button @click="approve(req.id)" class="approve">
            Approve
          </button>

          <button @click="reject(req.id)" class="reject">
            Reject
          </button>

        </div>

      </div>

    </section>

    <!-- ================= POSTED ITEMS ================= -->
    <section v-if="tab === 'posted'">

      <h3>My Posted Items</h3>

      <div v-if="items.length === 0" class="empty">
        No posted items yet
      </div>

      <div v-for="item in items" :key="item.id" class="card">

        <div class="info">
          <p class="name">{{ item.title }}</p>
          <p class="desc">Type: {{ item.type }}</p>

          <span class="status available">
            {{ item.item_status }}
          </span>
        </div>

      </div>

    </section>

  </main>
</template>

<script>
import axios from "axios"

export default {
  data() {
    return {
      tab: "requests",
      requests: [],
      items: []
    }
  },

  mounted() {
    this.fetchRequests()
  },

  methods: {

    // LOAD INCOMING REQUESTS
    async fetchRequests() {
      try {
        const res = await axios.get("/api/requests/owner")
        this.requests = res.data
      } catch (err) {
        console.log(err)
      }
    },

    // LOAD POSTED ITEMS
    async fetchItems() {
      try {
        const res = await axios.get("/api/my-items")
        this.items = res.data
      } catch (err) {
        console.log(err)
      }
    },

    // APPROVE
    async approve(id) {
      await axios.post(`/api/requests/${id}/approve`)
      this.fetchRequests()
    },

    // REJECT
    async reject(id) {
      await axios.post(`/api/requests/${id}/reject`)
      this.fetchRequests()
    }

  }
}
</script>

<style scoped>
.page {
  padding: 20px;
}

.title {
  font-size: 20px;
  margin-bottom: 10px;
}

.tabs {
  display: flex;
  gap: 10px;
  margin-bottom: 20px;
}

.tabs button {
  padding: 8px 14px;
  border: none;
  background: #eee;
  border-radius: 8px;
  cursor: pointer;
}

.tabs .active {
  background: #187342;
  color: white;
}

.card {
  background: white;
  padding: 14px;
  margin-bottom: 10px;
  border-radius: 10px;
  display: flex;
  justify-content: space-between;
}

.name {
  font-weight: bold;
}

.desc {
  font-size: 12px;
  color: gray;
}

.status {
  font-size: 11px;
  padding: 3px 8px;
  border-radius: 6px;
  display: inline-block;
  margin-top: 5px;
}

.pending {
  background: #fff3cd;
  color: #856404;
}

.approved {
  background: #d4edda;
  color: #155724;
}

.available {
  background: #d4edda;
  color: #155724;
}

.actions {
  display: flex;
  gap: 5px;
}

.approve {
  background: green;
  color: white;
  border: none;
  padding: 5px 8px;
  border-radius: 6px;
}

.reject {
  background: red;
  color: white;
  border: none;
  padding: 5px 8px;
  border-radius: 6px;
}

.empty {
  color: gray;
  padding: 20px;
}
</style>