<template>
    <div class="about-page">
        <section class="section section_header">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <h1 class="section__heading section_header__heading text-center">
                            About Us
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="section section_discover">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 align-self-start">
                        <p class="section_discover__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="col-md-4 align-self-start">
                        <div class="section_discover__img">

                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h2><em>Lorem ipsum</em> dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias veritatis nisi, consequatur, laborum libero a neque ducimus. Porro rem illum quo nostrum quisquam asperiores, blanditiis, consectetur. Possimus facilis velit, voluptatibus!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti non, voluptate architecto, harum suscipit dignissimos eaque voluptatibus nobis natus error iure exercitationem. Officia facilis, maiores atque delectus commodi rerum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur qui, itaque, accusantium accusamus eum voluptate ducimus eligendi laboriosam alias mollitia omnis harum et ut quaerat, minus repellendus sint. Inventore, iure.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_quote section_gray">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 ml-md-auto mr-md-auto">
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ab nobis cupiditate odit repudiandae maiores in et autem voluptate cum.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_info section_info_opposite">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section__heading text-center">
                            Behind the scenes
                        </h2>
                    </div>
                </div>
                <div class="row align-items-justify">
                    <div class="col-md-6 order-md-3">

                        <div class="section_info__img">

                        </div>

                    </div>
                    <div class="col-md-1 order-md-2"></div>
                    <div class="col-md-5 order-md-1">

                        <div class="section_info__body">
                            <p class="lead text-heading">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident sequi ratione, accusamus quo mollitia architecto, explicabo obcaecati.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim saepe aperiam eius, quam blanditiis necessitatibus dolorem dignissimos pariatur quas velit nihil tempora, libero unde molestiae! Illum, inventore. Iusto, autem!
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">
                                    Contact Us
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
  export default {
    name: "about"
  }
</script>

<style scoped>

    .about-page{
        width: 100%;
    }
    .section{
        padding:  6rem 0;
    }
    .section_gray {

        background-color: #e0f2e9;
    }

    .section_gray p{
        color: #707070;
        font-size: 26px;
    }

    .section_info__img > img {

        position: absolute;
        top: 0;
        right: -1rem;
        width: auto;
        max-width: none !important;
        height: 100% !important;
        max-height: 100%;

    }

    .section_info_opposite .section_info__img > img {

        right: auto;
        left: -1rem;

    }

    .section_info__img {

        position: relative;
        height: 100%;

    }
</style>