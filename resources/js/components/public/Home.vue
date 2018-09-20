<template>
    <div class="home-content">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item" v-for="(item,index) in carousels" :class="{'active': index === 0}">
                    <img class="first-slide img-fluid" :src="'/uploads/' + item.carousel_image" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{ item.carousel_title }}</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
                            </p>
                        </div>
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
                <h2 class="text-center">Нашите продукти</h2>
            </div>

            <!-- Three columns of text below the carousel -->
            <div class="row producs-holder">
                <div class="col-lg-3" v-for="item in products">
                    <div class="rounded-circle">
                        <img class="img-fluid" :src="'/uploads/' + item.product_image" alt="Generic placeholder image">
                    </div>
                    <h2>{{ item.product_title}}</h2>
                    <p>{{ item.product_info }}</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Научи повече &raquo;</a></p>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette-holder" v-for="sec in sections">
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

        <div class="parallax-background">
            <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
            </div>
            <h2 class="text-center">Lorem Ipsum?</h2>
            <p class="text-center">Please provide any document. </p>
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

    .home-content {
        width: 100%;
    }
    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */
    /* Carousel base class */
    .carousel {
        margin-bottom: 4rem;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }
    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
        background-color: #777;
    }
    .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
    }
    /* MARKETING CONTENT
    -------------------------------------------------- */
    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-3 {
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .marketing h2 {
        font-weight: 400;
    }
    .marketing .col-lg-3 p {
        margin-right: .75rem;
        margin-left: .75rem;
    }
    /* Featurettes
    ------------------------- */
    .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
    }
    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
    }
    /* RESPONSIVE CSS
    -------------------------------------------------- */
    @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }
        .featurette-heading {
            font-size: 50px;
        }
    }
    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }
    .rounded-circle img {
        margin: auto;
        display: block;
        max-height: 80px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    .rounded-circle {
        border-radius: 50% !important;
        display: block;
        background: #fff;
        width: 140px;
        height: 140px;
        margin: auto;
        box-shadow: 0 2px 4px #ddd;
        position: relative;
    }

    .products-title h2{
        font-size: 60px;
        padding: 27px 0 80px;
    }
</style>