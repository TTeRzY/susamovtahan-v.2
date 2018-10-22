<template>
    <div>
       <div v-for="item in honey">
           <div class="card mt-4">
               <img class="card-img-top img-fluid" :src="'/uploads/' + item.honey_image" alt="">
               <div class="card-body">
                  <div class="row">
                      <div class="col-lg-6">
                          <h3 class="card-title">{{ item.honey_title }}</h3>
                          <h4>{{ item.honey_price }} лв.</h4>
                          <p class="card-text">
                              {{ item.honey_info }}
                          </p>
                      </div>
                      <div class="col-lg-6">
                          <router-link to="/order">
                              <a class="btn buy-btn" role="button">ПОРЪЧАЙ</a>
                          </router-link>
                      </div>
                  </div>
               </div>
           </div>
           <!-- /.card -->

           <div class="card card-outline-secondary my-4">
               <div class="card-header">
                   Повече информация за Пчелен мед
               </div>
               <div class="card-body">
                    <p>
                        {{ item.honey_more_info }}
                    </p>
               </div>
           </div>
           <!-- /.card -->
       </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "honey",
        data() {
            return {
                honey: []
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.readHoney;
        },
        computed: {
            readHoney() {
                axios.get('api/products/honey').then((res) => {
                    for(let item in res.data){
                        this.honey.push(res.data[item]);
                    }
                }).catch((err) => {
                    console.log(err.response.data.message);
                });
            }
        }
    }
</script>

<style scoped>
    .card img{
        max-height: 400px;
    }
</style>