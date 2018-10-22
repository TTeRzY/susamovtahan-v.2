<template>
    <div class="technology-page">
        <section class="section section_header">
            <div class="container">
                <div class="row">
                    <div class="col products-title">

                        <h2 class="text-center mb-5 mt-5">
                            <span> Технология на производството</span>
                        </h2>
                        <p class="lead text-center">Описание на технологията на производство....</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="about-page-body">
                <div class="row technology-page-body-content" v-for="(item,index) in technologies" v-if="index % 2 === 0">
                    <div class="col-lg-7 about-page-body-text">
                        <h2>{{ item.technology_title }}</h2>
                        <p>
                            {{ item.technology_info }}
                        </p>
                    </div>
                    <div class="col-lg-5 about-page-body-image">
                        <img :src="'/uploads/' + item.technology_image" alt="">
                    </div>
                </div>
                <div class="row technology-page-body-content" v-else>
                    <div class="col-lg-5 about-page-body-image">
                        <img :src="'/uploads/' + item.technology_image" alt="">
                    </div>
                    <div class="col-lg-7 about-page-body-text">
                        <h2>{{ item.technology_title }}</h2>
                        <p>
                            {{ item.technology_info }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: "technology",
    data() {
      return {
        technologies: []
      }
    },
    created () {
      // fetch the data when the view is created and the data is
      // already being observed
      this.readTechnology;
    },
    computed: {
      readTechnology() {
        axios.get('api/technology').then((res) => {
          for(let item in res.data){
            this.technologies.push(res.data[item]);
          }
        }).catch((err) => {
          console.log(err.response.data.message);
        });
      }
    }
  }
</script>

<style scoped>

    .technology-page{
        width: 100%;
    }
    .technology-page .jumbotron{
        min-height: 350px
    }
    .vertical-line{
        font-size: 30px;
        line-height: 1;
    }
    .vertical-line span{
        content: '';
        display: block;
        width: 2px;
        color: #000000;
        height: 160px;
        background: #000000;
        margin: 10px auto;
    }

    img{
        width: 250px;
        height: 250px;
    }

    .technology-section{
        margin-bottom: 12rem;
    }
</style>