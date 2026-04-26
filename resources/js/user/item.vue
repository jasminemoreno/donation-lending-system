<template>
  <main class="page">

    <!-- TOP BAR -->
    <div class="top-bar">

      <!-- SEARCH -->
      <input
        v-model="search"
        @input="fetchItems"
        type="text"
        placeholder="Search items..."
        class="search-input"
      />

      <!-- LOCATION FILTER -->
      <select
        v-model="selectedLocation"
        @change="fetchItems"
        class="location-select"
      >
        <option value="">All Barangays</option>
        <option v-for="(loc, i) in locations" :key="i" :value="loc">
          {{ loc }}
        </option>
      </select>

    </div>

    <!-- CATEGORIES -->
    <div class="categories">

      <!-- ALL -->
      <div
        class="category"
        :class="{ active: selectedCategory === 'all' }"
        @click="setCategory('all')"
      >
        <div
          class="circle"
          :class="{ 'active-circle': selectedCategory === 'all' }"
        >
          <span>All</span>
        </div>
        <p>All</p>
      </div>

      <!-- CATEGORY LIST -->
      <div
        class="category"
        v-for="(cat, i) in categories"
        :key="i"
        @click="setCategory(cat.name)"
      >
        <div
          class="circle"
          :class="{ 'active-circle': selectedCategory === cat.name }"
        >
          <img :src="cat.icon" />
        </div>
        <p>{{ cat.name }}</p>
      </div>

    </div>

    <!-- EMPTY STATE -->
    <div v-if="items.length === 0" class="empty-box">
      <h3>No items found</h3>
      <p>
        No donation or lending items available
        <span v-if="selectedLocation">in {{ selectedLocation }}</span>.
      </p>
    </div>

    <!-- ITEMS GRID -->
    <div v-else class="grid">

      <div
        v-for="item in items"
        :key="item.id"
        class="card"
      >

        <!-- TYPE -->
        <div class="badge">
          {{ item.type }}
        </div>

        <!-- IMAGE -->
        <div class="image-placeholder"></div>

        <!-- TITLE -->
        <h4 class="title-text">
          {{ item.title }}
        </h4>

        <!-- CATEGORY -->
        <p class="small-text">
          {{ item.category }}
        </p>

        <!-- LOCATION -->
        <p class="location-text">
          {{ item.location }}
        </p>

        <!-- BUTTON -->
        <button class="btn">
          {{ item.type === 'lending' ? 'Borrow Item' : 'Get Item' }}
        </button>

      </div>

    </div>

  </main>
</template>

<script>
import axios from "axios"

import furnitureIcon from "@/assets/icons/furniture.png"
import appliancesIcon from "@/assets/icons/appliances.png"
import bookIcon from "@/assets/icons/book.png"
import toolsIcon from "@/assets/icons/tools.png"
import toysIcon from "@/assets/icons/toys.png"

export default {
  data() {
    return {
      search: "",
      selectedCategory: "all",
      selectedLocation: "",
      items: [],

      categories: [
        { name: "Furniture", icon: furnitureIcon },
        { name: "Appliances", icon: appliancesIcon },
        { name: "Books", icon: bookIcon },
        { name: "Tools", icon: toolsIcon },
        { name: "Toys", icon: toysIcon }
      ],

      locations: [
        "Alipao",
        "Anahaw",
        "Budlingin",
        "Camp Eduard",
        "Ferlda",
        "Gamuton",
        "Don Julio Ouano",
        "Ombong",
        "Poblacion",
        "Pongtud",
        "San Juan",
        "San Pedro"
      ]
    }
  },

  mounted() {
    this.fetchItems()
  },

  methods: {

    setCategory(category) {
      this.selectedCategory = category
      this.fetchItems()
    },

    async fetchItems() {
      try {
        const res = await axios.get("/api/items", {
          params: {
            search: this.search,
            category:
              this.selectedCategory === "all"
                ? ""
                : this.selectedCategory,
            location: this.selectedLocation
          }
        })

        this.items = res.data

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

/* TOP BAR */
.top-bar {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.search-input {
  width: 320px;
  padding: 10px 14px;
  border: 1px solid #dcdcdc;
  border-radius: 10px;
  outline: none;
}

.location-select {
  padding: 10px 14px;
  border: 1px solid #dcdcdc;
  border-radius: 10px;
  outline: none;
}

/* CATEGORIES */
.categories {
  display: flex;
  gap: 16px;
  overflow-x: auto;
  padding-bottom: 8px;
}

.category {
  min-width: 70px;
  text-align: center;
  cursor: pointer;
}

.circle {
  width: 52px;
  height: 52px;
  background: #e4efe6;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
}

.circle img {
  width: 22px;
  height: 22px;
}

.active-circle {
  background: #187342;
  color: white;
}

/* GRID */
.grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}

/* CARD */
.card {
  background: white;
  border-radius: 14px;
  padding: 14px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* BADGE */
.badge {
  display: inline-block;
  background: #187342;
  color: white;
  font-size: 11px;
  padding: 4px 8px;
  border-radius: 6px;
  margin-bottom: 10px;
  text-transform: capitalize;
}

/* IMAGE */
.image-placeholder {
  width: 100%;
  height: 150px;
  background: #f2f2f2;
  border-radius: 10px;
}

/* TEXT */
.title-text {
  margin-top: 12px;
  font-size: 15px;
  font-weight: 600;
}

.small-text {
  font-size: 12px;
  color: #777;
  margin-top: 6px;
}

.location-text {
  font-size: 12px;
  color: #555;
  margin-top: 4px;
}

/* BUTTON */
.btn {
  margin-top: 14px;
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 10px;
  background: #187342;
  color: white;
  cursor: pointer;
}

/* EMPTY */
.empty-box {
  background: white;
  padding: 40px;
  border-radius: 14px;
  text-align: center;
}

.empty-box h3 {
  margin-bottom: 8px;
}

.empty-box p {
  color: gray;
}

/* RESPONSIVE */
@media (max-width: 1200px) {
  .grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 900px) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .grid {
    grid-template-columns: 1fr;
  }

  .search-input {
    width: 100%;
  }
}
</style>