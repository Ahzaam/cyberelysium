<template>
  <div>



    <h1>Laravel Api with Nuxt 3 Fetch Api Data</h1>


    <div class="row row-cols-1 row-cols-md-4 g-4 mx-2">
      <div v-for="product in products" :key="product.id" class="col">
        <div class="card">
          <img :src="'/image/' + product.image" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{product.name}}</h5>
            <p class="card-text">Price: {{ product.price  }}LKR</p>
            <p v-if="product.status === 'on'" class="card-text text-success">Active</p>
            <p v-else class="card-text text-danger">Deactive</p>
          </div>
        </div>
      </div>
    </div>

  </div>




</template>

<script >
// import Vue from 'vue'
// import { BootstrapVue } from 'bootstrap-vue'
// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
// Vue.use(BootstrapVue)

export default {
  data() {
    return {
      products: []
    }
  },

  created() {
    fetch('http://localhost:8000/api/products')
      .then(res => res.json())
      .then(data => this.products = data)
      .catch(err => console.log(err.message))
  }
}



</script>