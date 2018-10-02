<template>
    <div>
        <div v-for="item in limets">
            <div class="card mt-4">
                <img class="card-img-top img-fluid" :src="'/uploads/' + item.limets_image" alt="">
                <div class="card-body">
                    <h3 class="card-title">{{ item.limets_title }}</h3>
                    <h4>{{ item.limets_price }} лв.</h4>
                    <p class="card-text">
                        {{ item.limets_info }}
                    </p>
                </div>
            </div>
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Повече информация за брашното от Лимец
                </div>
                <div class="card-body">
                    <p>
                        {{ item.limets_more_info }}
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
        name: "limets",
        data() {
            return {
                limets: []
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.readLimets;
        },
        computed: {
            readLimets() {
                axios.get('api/products/limets').then((res) => {
                    for(let item in res.data){
                        this.limets.push(res.data[item]);
                    }
                }).catch((err) => {
                    console.log(err.response.data.message);
                });
            }
        }
    }
</script>

<style scoped>

</style>