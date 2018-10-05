<template>
    <div>
        <nav class="navbar navbar-expand-lg">
            <router-link class="navbar-brand" to="/">
                <a class="nav-link">Сусамов Тахан</a>
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <router-link class="nav-item" tag="li" to="/order">
                        <a class="nav-link">Поръчай</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/about">
                        <a class="nav-link">За Нас</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/products">
                        <a class="nav-link">Продукти</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/contacts">
                        <a class="nav-link">Контакти</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/technology">
                        <a class="nav-link">Технология</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/gallery">
                        <a class="nav-link">Галерия</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/videos">
                        <a class="nav-link">Видео</a>
                    </router-link>
                    <router-link class="nav-item cart" tag="li" to="/cart">
                        <a class="nav-link" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.854 22.917">
                                <g id="Group_1132" data-name="Group 1132" transform="translate(-2725 -529)">
                                    <g id="Group_956" data-name="Group 956" transform="translate(2725 529)">
                                        <path @click="saveOrderToStorage" id="Path_228" data-name="Path 228" class="cls-1"
                                              d="M23.6,17.494a1.184,1.184,0,0,1,.237.947l-1,5.737a1.082,1.082,0,0,1-.408.737,1.237,1.237,0,0,1-.8.289H7.048l-.289,1.632H20.653a1.21,1.21,0,0,1,.868.355,1.239,1.239,0,0,1,0,1.763,1.21,1.21,0,0,1-.868.355H5.285a1.222,1.222,0,0,1-.947-.447,1.278,1.278,0,0,1-.289-1.026l.658-3.579-1-10.052L.864,13.31A1.164,1.164,0,0,1,.141,12.7a1.308,1.308,0,0,1-.092-.947,1.157,1.157,0,0,1,.618-.724,1.286,1.286,0,0,1,.934-.092L5.232,12.1a1.115,1.115,0,0,1,.566.395,1.376,1.376,0,0,1,.276.658l.211,2,16.473,1.842A1.171,1.171,0,0,1,23.6,17.494ZM7.154,29.994a1.887,1.887,0,0,1,1.895,1.895A1.871,1.871,0,0,1,8.5,33.244a1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Zm11.237,0a1.887,1.887,0,0,1,1.895,1.895,1.871,1.871,0,0,1-.553,1.355,1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Z"
                                              transform="translate(0 -10.893)"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="added-items" data-cart-items="">{{ cartItems.length }}</span>
                        </a>
                    </router-link>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <router-view></router-view>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row footer-top">
                    <div class="footer-logo">
                        <img src="" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="row company-info">
                            <div class="col-lg-6">
                                <ul>
                                    <li><span>Адрес:</span></li>
                                    <li>
                                        София, ж.к. Хаджи Димитър,
                                        ул. Спас Гинев 30
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><span>Телефон</span>: 0888 307069</li>
                                    <li><span>Email</span>: office@quickup.bg</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom d-flex align-items-center">

                    <div class="col-lg-8">
                        <nav class="navbar navbar-expand-sm">

                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                                <router-link class="nav-item" tag="li" to="/order">
                                    <a class="nav-link">Поръчай</a>
                                </router-link>
                                <router-link class="nav-item" tag="li" to="/about">
                                    <a class="nav-link">За Нас</a>
                                </router-link>
                                <router-link class="nav-item" tag="li" to="/products">
                                    <a class="nav-link">Продукти</a>
                                </router-link>
                                <router-link class="nav-item" tag="li" to="/contacts">
                                    <a class="nav-link">Контакти</a>
                                </router-link>
                                <router-link class="nav-item" tag="li" to="/technology">
                                    <a class="nav-link">Технология</a>
                                </router-link>
                                <router-link class="nav-item" tag="li" to="/gallery">
                                    <a class="nav-link">Галерия</a>
                                </router-link>
                                <router-link class="nav-item" tag="li" to="/videos">
                                    <a class="nav-link">Видео</a>
                                </router-link>
                            </ul>

                        </nav>
                    </div>
                    <div class="col-lg-4 developer-name">

                        <a href="https://github.com/TTeRzY" target="_blank">
                            <u>Designed by &copy;Terziyski</u>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    import EventBus from '../eventBus.js';

    export default {
        data () {
            return{
                cartItems: []
            }
        },
        mounted() {
            // You should use arrow function if you want to get parameteres outside mounted function!
            EventBus.$on('orderProducts', (data) => {
                this.cartItems.push(data);
            });

            EventBus.$on('clearCart', (data) => {
                this.cartItems = data;
            });

        },
        methods: {
            saveOrderToStorage(){
                localStorage.setItem('storageProducts', JSON.stringify(this.cartItems));
            }
        }
    }
</script>

<style scoped>


</style>