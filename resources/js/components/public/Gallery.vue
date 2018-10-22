<template>
    <div class="gallery-page">
        <div class="container">
            <div class="products-title">
                <h2 class="text-center mb-5 mt-5"><span>Галерия</span></h2>
                <p class="lead text-muted text-center">
                    Галерията съдържа снимки показващи целият процес по производството на Сусамов Тахан.
                </p>
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