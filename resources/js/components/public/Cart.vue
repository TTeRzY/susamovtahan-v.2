<template>
    <div class="container">
        <div class="row cart-holder">
            <div class="col-lg-12 top-cart-content">
                <div class="head-text">
                    <h2>КОШНИЦА</h2>
                    <!--
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.854 22.917">
                            <g id="Group_1132" data-name="Group 1132" transform="translate(-2725 -529)">
                                <g id="Group_956" data-name="Group 956" transform="translate(2725 529)">
                                    <path id="Path_22811" data-name="Path 22811" class="cls-1"
                                          d="M23.6,17.494a1.184,1.184,0,0,1,.237.947l-1,5.737a1.082,1.082,0,0,1-.408.737,1.237,1.237,0,0,1-.8.289H7.048l-.289,1.632H20.653a1.21,1.21,0,0,1,.868.355,1.239,1.239,0,0,1,0,1.763,1.21,1.21,0,0,1-.868.355H5.285a1.222,1.222,0,0,1-.947-.447,1.278,1.278,0,0,1-.289-1.026l.658-3.579-1-10.052L.864,13.31A1.164,1.164,0,0,1,.141,12.7a1.308,1.308,0,0,1-.092-.947,1.157,1.157,0,0,1,.618-.724,1.286,1.286,0,0,1,.934-.092L5.232,12.1a1.115,1.115,0,0,1,.566.395,1.376,1.376,0,0,1,.276.658l.211,2,16.473,1.842A1.171,1.171,0,0,1,23.6,17.494ZM7.154,29.994a1.887,1.887,0,0,1,1.895,1.895A1.871,1.871,0,0,1,8.5,33.244a1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Zm11.237,0a1.887,1.887,0,0,1,1.895,1.895,1.871,1.871,0,0,1-.553,1.355,1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Z"
                                          transform="translate(0 -10.893)"></path>
                                </g>
                            </g>
                        </svg>
                        ИЗПРАТЕТЕ ПОРЪЧКАТА </a>
                        -->
                </div>
            </div>
            <div class="cart-items-holder col-lg-12">
                <form name="order_form" method="POST">
                    <div
                            class="row cart-items-content"
                            v-for="(item, index) in cartProducts"
                            v-model="orderInfo.products[index] = item">
                        <div class="delete-product">
                            <a href="#" @click.prevent="deleteProductFromCart(item,index)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.037 21.905">
                                    <g id="rubbish-bin-delete-button" transform="translate(-50 5.762)">
                                        <g id="delete" transform="translate(50 -5.762)">
                                            <path id="Path_23012" data-name="Path 23012" class="cls-1"
                                                  d="M52.217,19.471a2.441,2.441,0,0,0,2.434,2.434h9.736a2.441,2.441,0,0,0,2.434-2.434V4.868h-14.6ZM68.037,1.217H63.778L62.561,0H56.476L55.259,1.217H51V3.651H68.037Z"
                                                  transform="translate(-51)"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="product-image-hold">
                            <a href="#">

                                <img class="img-fluid"
                                     :src="'/uploads/' + item.image" alt="">
                            </a>
                        </div>
                        <div class="cart-product-name">
                            <a href="#">
                                {{ item.name }}
                            </a>
                        </div>
                        <div class="cart-product-price">
                            <p>
                                {{ parseFloat(item.price).toFixed(2) }} лв.
                            </p>
                        </div>

                        <div class="add-more-items">
                            <input type="number" v-model.number="item.count">
                            <div class="quantity-nav">
                                <div class="quantity-button quantity-up"
                                     @click="plus(item,index)">+
                                </div>
                                <div class="quantity-button quantity-down"
                                     @click="minus(item, index)">-
                                </div>
                            </div>
                        </div>
                        <div class="total-price">
                            <p v-model="orderInfo.products[index]['total'] = item.price * item.count">
                                {{ parseFloat(item.price).toFixed(2) * parseFloat(item.count).toFixed(2) }} лв. </p>
                        </div>
                    </div>
                    <div class="row more-options">
                        <router-link class="nav-item" to="/order">
                            <a href="#">
                                <img src="http://angeloff.fedox.net/impacto/data/images/arrow-pointing-to-right.png"
                                     alt="Left Arrow">
                                ПРОДЪЛЖЕТЕ ДА ПАЗАРУВАТЕ </a>
                        </router-link>

                    </div>
                    <div class="col-lg-12 form-error"></div>
                    <div class="row order-details">
                        <div class="col-lg-4 invoice-info">
                            <div class="invoice-info-holder">
                                <div class="top-text">
                                    <div class="top-text-inner no-login">
                                        <div class="col-lg-12">
                                            <h5>Инфорамция за поръчка</h5>

                                            <div class="form-group">
                                                <input class="form-control"
                                                       name="names"
                                                       placeholder="Вашите имена"
                                                       required=""
                                                       type="text"
                                                       v-model="orderInfo.name">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control"
                                                       name="phone"
                                                       placeholder="Телефон"
                                                       required
                                                       type="text"
                                                       v-model="orderInfo.phone">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control"
                                                       name="email"
                                                       placeholder="Имейл"
                                                       type="email"
                                                       v-model="orderInfo.email"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control"
                                                       name="email"
                                                       placeholder="Град"
                                                       required
                                                       type="text"
                                                       v-model="orderInfo.city">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control"
                                                       name="email"
                                                       placeholder="Адрес за доставка"
                                                       required
                                                       type="text"
                                                       v-model="orderInfo.address">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 invoice-info">
                            <div class="invoice-info-holder">
                                <div class="top-text">
                                    <div class="top-text-inner no-login">
                                        <div class="col-lg-12">
                                            <h5>ИНФОРМАЦИЯ</h5>

                                            <textarea
                                                    name="message"
                                                    id="message"
                                                    placeholder="Вашето съобщение..."
                                                    v-model="orderInfo.message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 total-order-info">
                            <div class="total-order-info-holder">
                                <div class="top-text">
                                    <h5>МОЯТА ПОРЪЧКА</h5>
                                </div>
                                <div class="total-order-big">
                                    <h2 v-model="orderInfo.totalPrice = totalPrice">
                                        ОБЩО <span data-price-grandtotal="">
                                        {{ parseFloat(totalPrice).toFixed(2) }} лв.</span>
                                    </h2>
                                    <p>Всички цени са с ДДС</p>
                                </div>
                                <a href="#" class="btn send-order-btn" @click.prevent="sendOrder(orderInfo)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.854 22.917">
                                        <g id="Group_1132" data-name="Group 1132" transform="translate(-2725 -529)">
                                            <g id="Group_956" data-name="Group 956" transform="translate(2725 529)">
                                                <path id="Path_22813" data-name="Path 22813" class="cls-1"
                                                      d="M23.6,17.494a1.184,1.184,0,0,1,.237.947l-1,5.737a1.082,1.082,0,0,1-.408.737,1.237,1.237,0,0,1-.8.289H7.048l-.289,1.632H20.653a1.21,1.21,0,0,1,.868.355,1.239,1.239,0,0,1,0,1.763,1.21,1.21,0,0,1-.868.355H5.285a1.222,1.222,0,0,1-.947-.447,1.278,1.278,0,0,1-.289-1.026l.658-3.579-1-10.052L.864,13.31A1.164,1.164,0,0,1,.141,12.7a1.308,1.308,0,0,1-.092-.947,1.157,1.157,0,0,1,.618-.724,1.286,1.286,0,0,1,.934-.092L5.232,12.1a1.115,1.115,0,0,1,.566.395,1.376,1.376,0,0,1,.276.658l.211,2,16.473,1.842A1.171,1.171,0,0,1,23.6,17.494ZM7.154,29.994a1.887,1.887,0,0,1,1.895,1.895A1.871,1.871,0,0,1,8.5,33.244a1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Zm11.237,0a1.887,1.887,0,0,1,1.895,1.895,1.871,1.871,0,0,1-.553,1.355,1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Z"
                                                      transform="translate(0 -10.893)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    ИЗПРАТЕТЕ ПОРЪЧКАТА </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12" >
                <p v-if="errors.length" class="alert alert-danger">
                    <span v-for="error in errors">Моля попълнете следните полета:  <u>{{ error }}</u></span>
                </p>
                <p class="alert alert-success" v-if="success.length">
                    <span v-for="item in success"> {{ item }}</span>
                </p>
            </div>
        </div>
        {{orderInfo}}
    </div>
</template>

<script>
  import Vue from 'vue';
  import axios from 'axios';

  export default {
    name: "cart",
    data() {
      return {
        get totalPrice() {
          let sum = null;
          if (this.localStorage.cartProducts.length) {
            for (let i = 0; i < this.localStorage.cartProducts.length; i++) {
              sum += (this.localStorage.cartProducts[i].price * this.localStorage.cartProducts[i].count)
            }
          }

          return sum;
        },
        counter: 0,
        total: null,
        cartProducts: [],
        orderInfo: {
          products: [],
          name: '',
          phone: '',
          email: '',
          city: '',
          address: '',
          message: '',
          totalPrice: null
        },
        errors: [],
        success: []
      }
    },
    mounted: function () {
      let readJSON = this.localStorage.cartProducts;
      this.cartProducts = readJSON;

    },
    methods: {
      validEmail: function (email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      },
      plus(data, index) {
        let found = false;
        let setCartProducts = this.localStorage.cartProducts;
        for (let i = 0; i < setCartProducts.length; i++) {

          if (setCartProducts[i].id === data.id) {
            let newProduct = setCartProducts[i];
            newProduct.count = newProduct.count + 1;
            Vue.set(setCartProducts, index, newProduct);

            found = true;
            break;
          }
        }
      },
      minus(data, index) {
        let found = false;
        let setCartProducts = this.localStorage.cartProducts;
        for (let i = 0; i < setCartProducts.length; i++) {

          if (data.count < 1) {
            if (setCartProducts[i].id === data.id) {
              setCartProducts[i].count = 0;
            }
          } else {
            if (setCartProducts[i].id === data.id) {
              let newProduct = setCartProducts[i];
              newProduct.count = newProduct.count - 1;
              Vue.set(setCartProducts, index, newProduct);

              found = true;
              break;
            }
          }
        }
      },
      sendOrder(data) {
        console.log()
        if (data.products.length) {
          this.errors = [];
          if (data.name && data.phone && data.city && data.address && data.message) {
            if(!this.validEmail(data.email)){
              this.errors.push('Моля попълнете коректен имейл адрес!');
            }else{
              this.errors = [];
              this.success.push('Вашата поръчка е изпратена успешно, очаквайте имейл за потвърждение.');
              axios.post('admin/clientsOrders/store', data, {headers: this.headers}).then((res) => {
                this.$router.push("/order")
              }).catch((err) => {
                console.log(err.response.status);
              })
            }
          } else {
            this.errors.push('Моля попълнете всички полета!');
          }
        }
      },
      deleteProductFromCart(data, index) {
        let setCartProducts = this.localStorage.cartProducts;
        let getOrder = this.orderInfo.products;

        for (let i = 0; i < getOrder.length; i++) {

          if (data.id === getOrder[i].id) {
            getOrder.splice(index, 1);
          }
        }

        for (let i = 0; i < setCartProducts.length; i++) {

          if (data.id === setCartProducts[i].id) {
            setCartProducts.splice(index, 1);
          }
        }
      }
    }
  }
</script>

<style scoped>
    .delete-product a {
        display: block;
        z-index: 9;
        position: relative;
    }
</style>