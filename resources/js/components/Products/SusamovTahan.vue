<template>
    <div>
        <div v-for="item in tahan">
            <div class="card mt-4">
                <img class="card-img-top img-fluid" :src="'/uploads/' + item.tahan_image" alt="">
                <div class="card-body">
                    <h3 class="card-title">{{ item.tahan_title}}</h3>
                    <h4>{{ item.tahan_price}} лв.</h4>
                    <p class="card-text">
                        {{ item.tahan_info}}
                    </p>
                    <!--<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    4.0 stars
                    -->
                </div>
            </div>
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Повече информация за продукта
                </div>
                <div class="card-body">
                    <p>{{ item.tahan_more_info}}</p>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Изпретете отзив</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Затвори</button>
                        <button type="button" class="btn btn-primary">Изпрати</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "susamov-tahan",
        data() {
            return {
                tahan: []
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.readTahan;
        },
        computed: {
            readTahan() {
                axios.get('api/products/tahan').then((res) => {
                    for(let item in res.data){
                        this.tahan.push(res.data[item]);
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