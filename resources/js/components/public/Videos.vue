<template>
    <div class="videos-page">
        <div class="products-title">
            <h2 class="text-center mb-5 mt-5">
                <span>
                   Секция Видео
                </span>
            </h2>
        </div>
        <!-- Heading Row -->
        <div class="container">
            <div class="row my-4" v-for="(item,index) in videos">
               <div class="row news-holder" v-if="index % 2 === 0">
                   <div class="col-lg-8">
                       <video controls="" width="100%" height="auto">
                           <source :src="'uploads/videos/' + item.video_content" type="video/mp4">
                       </video>
                   </div>
                   <!-- /.col-lg-8 -->
                   <div class="col-lg-4">
                       <h2>{{ item.video_title }}</h2>
                       <p>
                           {{ item.video_info}}
                       </p>
                   </div>
               </div>
                <div class="row" v-else>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <h2>{{ item.video_title }}</h2>
                        <p>
                            {{ item.video_info}}
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <video controls="" width="100%" height="auto">
                            <source :src="'uploads/videos/' + item.video_content" type="video/mp4">
                        </video>
                    </div>

                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>


    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "videos",
        data() {
            return {
                videos: []
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.readVideos;
        },
        computed: {
            readVideos() {
                axios.get('api/videos').then((res) => {
                    for(let item in res.data){
                        this.videos.push(res.data[item]);
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