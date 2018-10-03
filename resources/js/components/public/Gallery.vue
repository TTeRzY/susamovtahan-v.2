<template>
    <div class="gallery-page">
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Галерия</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            </div>
        </div>

        <div class="col-lg-12 album ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" v-for="item in gallery">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top"
                                 style="height: 225px; width: 100%; display: block;"
                                 :src="'/uploads/' + item.gallery_image" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">
                                    {{ item.gallery_info }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: "gallery",
    data() {
      return {
        gallery: []
      }
    },
    created () {
      // fetch the data when the view is created and the data is
      // already being observed
      this.readGallery;
    },
    computed: {
      readGallery() {
        axios.get('api/gallery').then((res) => {
          for(let item in res.data){
            this.gallery.push(res.data[item]);
          }
        }).catch((err) => {
          console.log(err.response.data.message);
        });
      }
    }
  }
</script>

<style scoped>
    .gallery-page{
        width: 100%;
    }
    h2{
        font-size: 60px;
        padding: 45px 0;
        color: #707070;
    }
    .row{
        margin: 15px;
    }
</style>