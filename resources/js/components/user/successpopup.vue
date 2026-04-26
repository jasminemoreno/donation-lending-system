<template>
    <div v-if="show" class="overlay" @click.self="close">
      <div class="popup">
        <img src="@/assets/icons/check.png" class="icon" />
  
        <h2>Success!</h2>
        <p>{{ message }}</p>
  
        <button @click="close">OK</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      show: Boolean,
      message: {
        type: String,
        default: "Account created successfully!"
      }
    },
    methods: {
      close() {
        this.$emit("close")
      }
    }
  }
  </script>
  
  <style scoped>
  .overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.4);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .popup {
    background: white;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    width: 300px;
  }
  
  .icon {
    width: 60px;
    margin-bottom: 10px;
  }
  
  button {
    margin-top: 15px;
    padding: 8px 20px;
    border: none;
    background: #187342;
    color: white;
    border-radius: 8px;
    cursor: pointer;
  }
  </style>