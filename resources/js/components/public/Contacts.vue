<template>
    <div class="container">

        <div class="row">
            <div class="contacts-header">
               <div class="products-title">
                   <h2>
                       <span>Свържете се с нас</span>
                   </h2>
               </div>
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

</style>