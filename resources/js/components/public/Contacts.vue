<template>
    <div class="container">

        <div class="row">
            <div class="contacts-header">
                <h1> Свържете се с нас </h1>
            </div>
            <div class="col-lg-12" id="parent">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11949.098406309664!2d26.1168047!3d41.5206679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa03ec42de417e45a!2z0JnQvtGA0LTQsNC9INCa0LDRgNCw0LrQtdGF0LDQudC-0LIg0JXQntCe0JQ!5e0!3m2!1sen!2sbg!4v1538132805176"  frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="" class="contact-form" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="nm" placeholder="Имена" required="" autofocus="">
                            </div>


                            <div class="form-group form_left">
                                <input type="email" class="form-control" id="email" name="em" placeholder="Имейл" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" placeholder="Телефон" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Вашето съобщение..." required=""></textarea>
                                <br>
                                <button class="btn primary-button"> <span class="glyphicon glyphicon-send"></span> Изпрати </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container second-portion">
            <div class="row">
                <div class="col-lg-4" v-for="item in contactsCard">
                    <div class="box">
                        <div class="icon">
                            <div class="image">
                                <img class="img-fluid" :src="'/uploads/' + item.contacts_image" alt="">
                            </div>
                            <div class="info">
                                <h3 class="title">{{ item.contacts_title}}</h3>
                                <p>
                                    {{ item.contacts_paragraph}}
                                </p>
                                <p>
                                    {{ item.contacts_info}}
                                </p>

                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: "contacts",
    data() {
      return {
        contactsCard: []
      }
    },
    created () {
      // fetch the data when the view is created and the data is
      // already being observed
      this.readContacts;
    },
    computed: {
      readContacts() {
        axios.get('api/contacts').then((res) => {
          for(let item in res.data){
            this.contactsCard.push(res.data[item]);
          }
        }).catch((err) => {
          console.log(err.response.data.message);
        });
      }
    }
  }
</script>

<style scoped>


    .contacts-header{
        padding-top: 60px;
        padding-bottom: 40px;
        text-align: center;
        width: 100%;
    }

    .contacts-header h1{
        text-transform: uppercase;
    }

    .form-control
    {
        border-radius: 0;
        border:1px solid #EDEDED;
    }

    .form-control:focus
    {
        border:1px solid #00bfff;
    }

    .textarea-contact
    {
        resize:none;
    }

    .second-portion
    {
        margin-top:50px;
    }

    .box > .icon {
        text-align: center;
        position: relative;
    }
    .box > .icon > .image {
        position: relative;
        z-index: 2;
        margin: auto;
        width: 88px;
        height: 88px;
        border: 8px solid #ddd;
        line-height: 48px;
        border-radius: 50%;
        background-color: #ddd;
        vertical-align: middle;
    }

    .box > .icon > .image img{
        max-height: 45px;
    }
    .box > .icon:hover > .image {
        opacity: 0.8;
    }
    .box > .icon > .image > i {
        font-size: 36px !important;
        color: #fff !important;
    }
    .box > .icon:hover > .image > i {
        color: white !important;
    }
    .box > .icon > .info {
        margin-top: -24px;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.03);
        padding: 15px 0 10px 0;
        min-height:163px;
        box-shadow: 02px 3px 3px rgba(0,0,0,0.3);

    }
    .box > .icon:hover > .info {
        background: rgba(0, 0, 0, 0.04);
        border-color: #e0e0e0;
        color: white;
    }
    .box > .icon > .info > h3.title {
        padding-top: 15px;
        font-family: "Robot",sans-serif !important;
        font-size: 16px;
        color: #6c757d !important;
        font-weight: 700;
    }
    .box > .icon > .info > p {
        font-family: "Robot",sans-serif !important;
        font-size: 13px;
        color: #6c757d !important;
        font-weight: 700;
        line-height: 1.5em;
        margin: 20px;
    }
    .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a {
        color: #707070;
    }
    .box > .icon > .info > .more a {
        font-family: "Robot",sans-serif !important;
        font-size: 12px;
        color: #222;
        line-height: 12px;
        text-transform: uppercase;
        text-decoration: none;
    }
    .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
    .box .space {
        height: 30px;
    }

    @media only screen and (max-width: 768px)
    {
        .contact-form
        {
            margin-top:25px;
        }

        .btn-send
        {
            width: 100%;
            padding:10px;
        }

        .second-portion
        {
            margin-top:25px;
        }
    }
</style>