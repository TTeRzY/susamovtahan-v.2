<template>
    <div>
        <div v-for="item in susamovoMaslo">
            <div class="card">
                <img class="card-img-top img-fluid" :src="'uploads/' + item.sesame_oil_image" alt="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="card-title">{{ item.sesame_oil_title}}</h3>
                            <h4>{{ item.sesame_oil_price}} лв.</h4>
                            <p class="card-text">
                                {{ item.sesame_oil_info}}
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
                    Повече информация за Сусамовото масло
                </div>
                <div class="card-body">
                    <p>
                        {{ item.sesame_oil_more_info}}
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
        name: "susamovo-maslo",
        data() {
            return {
                susamovoMaslo: []
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.readSusamovoMaslo;
        },
        computed: {
            readSusamovoMaslo() {
                axios.get('api/products/sesame_oil').then((res) => {
                    for(let item in res.data){
                        this.susamovoMaslo.push(res.data[item]);
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