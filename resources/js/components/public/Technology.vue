<template>
<div class="technology-page">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">Технология на производството</h1>
            <p class="lead text-center">Описание на технологията на производство....</p>
        </div>
    </div>
    <div class="col-lg-10 ml-auto mr-auto text-center technology-section" v-for="item in technologies">
        <img class="rounded-circle img-fluid d-block mx-auto" :src="'/uploads/' + item.technology_image" alt="">
        <div class="vertical-line">
            .
            <span></span>
        </div>
        <div class="info-container">
            <h3>
                {{ item.technology_title }}
            </h3>
            <p>
                {{ item.technology_info }}
            </p>
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
        font-size: 50px;
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

    .info-container{
        background-color: #f3ffbd;
    }
</style>