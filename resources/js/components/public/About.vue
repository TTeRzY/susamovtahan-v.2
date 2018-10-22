<template>
    <div class="about-page">
        <section class="section section_header">
            <div class="container">
                <div class="row">
                    <div class="col products-title">

                        <h2 class="text-center mb-5 mt-5">
                           <span> Нашата история</span>
                        </h2>

                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="about-page-body">
                <div class="row about-page-body-content" v-for="(item,index) in about" v-if="index % 2 === 0">
                    <div class="col-lg-7 about-page-body-text">
                        <h2>{{ item.about_title }}</h2>
                        <img src="" alt="">
                        <p>
                           {{ item.about_info }}
                        </p>
                    </div>
                    <div class="col-lg-5 about-page-body-image">
                        <img :src="'/uploads/' + item.about_image" alt="">
                    </div>
                </div>
                <div class="row about-page-body-content" v-else>
                    <div class="col-lg-5 about-page-body-image">
                        <img :src="'/uploads/' + item.about_image" alt="">
                    </div>
                    <div class="col-lg-7 about-page-body-text">
                        <h2>{{ item.about_title }}</h2>
                        <img src="" alt="">
                        <p>
                            {{ item.about_info }}
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
    name: "about",
    data() {
      return {
        about: []
      }
    },
    created () {
      // fetch the data when the view is created and the data is
      // already being observed
      this.readAbout;
    },
    computed: {
      readAbout() {
        axios.get('api/about').then((res) => {
          for(let item in res.data){
            this.about.push(res.data[item]);
          }
        }).catch((err) => {
          console.log(err.response.data.message);
        });
      }
    }
  }
</script>

<style scoped>

    .about-page{
        width: 100%;
    }

    .section_gray p{
        color: #707070;
        font-size: 26px;
    }

</style>