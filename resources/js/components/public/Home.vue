<template>
    <div class="container-fluid">
        <div class="row">
            <div class="home-content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item" v-for="(item,index) in carousels" :class="{'active': index === 0}">
                            <img class="d-block w-100" :src="'/uploads/' + item.carousel_image" alt="Carousel">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>{{ item.carousel_title }}</h1>
                                <p>
                                    {{ item.carousel_text }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <!-- Marketing messaging and featurettes
                ================================================== -->
                <!-- Wrap the rest of the page in another container to center all the content. -->

                <div class="container marketing">
                    <div class="products-title">
                        <h2 class="text-center"><span>Нашите продукти</span></h2>
                    </div>

                    <!-- Three columns of text below the carousel -->
                    <div class="row products-holder justify-content-around">
                        <div class="col-lg-5" v-for="item in products">
                            <div class="silver-background-box"></div>
                            <div class="rounded-circle">
                                <img class="img-fluid" :src="'/uploads/' + item.product_image" alt="Generic placeholder image">
                            </div>
                            <h2>{{ item.product_title}}</h2>
                            <p>{{ item.product_info }}</p>
                            <router-link to="/products/">
                                <a class="btn btn-secondary" role="button">Научи повече &raquo;</a>
                            </router-link>
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div>


                    <div class="parallax-background">
                        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
                        </div>
                        <h2 class="text-center">„Йордан Каракехайов”ЕООД</h2>
                        <p class="text-center">Първата частна Tаханджийница, която използва автентична технология на производство.</p>
                    </div>
            <div class="container marketing">
                    <!-- START THE FEATURETTES -->

                    <hr class="featurette-divider">

                    <div class="row featurette-holder" v-for="(sec, index) in sections" v-if="index === 0">
                        <div class="row featurette">
                            <div class="col-md-7">
                                <h2 class="featurette-heading">
                                    <span class="text-muted">{{ sec.section_title}}</span>
                                </h2>
                                <p class="lead">
                                    {{ sec.section_info}}
                                </p>
                            </div>
                            <div class="col-md-5">
                                <img class="featurette-image img-fluid mx-auto" :src="'/uploads/' + sec.section_image"
                                     alt="Generic placeholder image">
                            </div>
                        </div>
                    </div>
                    <!-- /END THE FEATURETTES -->
                </div><!-- /.container -->


            </div>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: "home",
    data() {
      return {
        products: [],
        carousels: [],
        sections:[]
      }
    },
    created () {
      // fetch the data when the view is created and the data is
      // already being observed
      this.readProducts;
      this.readCarouselInfo;
      this.readSections;
    },
    computed: {
      readProducts() {
        axios.get('api/tasks').then((res) => {
          console.log(res.data);
          for(let item in res.data){
            this.products.push(res.data[item]);
          }
        }).catch((err) => {
          console.log(err.response.data.message);
        });
      },
      readCarouselInfo(){
        axios.get('api/carousels').then((res) => {
          for(let item in res.data){
            this.carousels.push(res.data[item]);
          }
        }).catch((err) => {
          console.log(err.response.data.message);
        });
      },
      readSections(){
        axios.get('api/sections').then((res) => {
          for(let item in res.data){
            this.sections.push(res.data[item]);
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