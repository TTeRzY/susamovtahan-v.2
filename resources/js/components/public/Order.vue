<template>
    <div class="container">
        <h2 class="text-center mb-5 mt-5">Изберете продукти</h2>
        <div class="row justify-content-center">

            <div class="card" v-for="(item, index) in products">
                <div class="card-body top-card-content">
                    <div class="id-body">
                        <a href="#" class="">Цена</a>
                    </div>
                    <div class="price-body">
                        <a href="#" class="">{{ item.price}}</a>
                    </div>
                </div>
                <div class="badge-img">
                    <a href="#" class="">
                        <img class="card-img-top img-fluid" :src="'/uploads/' + item.image" alt="">
                        <span>{{ item.name }}</span>
                    </a>
                </div>
                <div class="card-body plus-minus">
                    <div class="add-section">
                        <a class="subtraction" href="#" data-badge-count-minus="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-15457 1091 25 25">
                                <g id="minus_ico" transform="translate(-16565 -906)">
                                    <rect id="Rectangle_1146" data-name="Rectangle 1146" class="cls-1" width="25" height="25" transform="translate(1108 1997)"></rect>
                                    <rect id="Rectangle_1148" data-name="Rectangle 1148" class="cls-2" width="10" height="5" transform="translate(1115 2007)"></rect>
                                </g>
                            </svg>
                        </a>
                        <input value="1" class="number-of-badges" data-badge-count="" data-badge-id="65" data-badge-price="1.79" style="width: 50px;">
                        <a class="addition" href="#" data-badge-count-plus="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                <g id="plus_ico" transform="translate(-1245 -1994)">
                                    <rect id="Rectangle_1147" data-name="Rectangle 1147" class="cls-1" width="35" height="35" transform="translate(1245 1994)"></rect>
                                    <g id="Group_774" data-name="Group 774" transform="translate(303 -162)">
                                        <rect class="cls-2" id="Rectangle_1149" data-name="Rectangle 1149" width="20" height="6" transform="translate(950 2171)"></rect>
                                        <rect class="cls-2" id="Rectangle_1150" data-name="Rectangle 1150" width="20" height="6" transform="translate(963 2164) rotate(90)"></rect>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="card-body holder-add-to-cart">
                    <div class="card-btn-holder">
                        <a class="btn medium-button" data-badge-add-to-cart="" href="#" @click.prevent="addToCart(item)">
                            <svg data-v-332fccf4="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.854 22.917"><g data-v-332fccf4="" id="Group_1132" data-name="Group 1132" transform="translate(-2725 -529)"><g data-v-332fccf4="" id="Group_956" data-name="Group 956" transform="translate(2725 529)"><path data-v-332fccf4="" id="Path_228" data-name="Path 228" d="M23.6,17.494a1.184,1.184,0,0,1,.237.947l-1,5.737a1.082,1.082,0,0,1-.408.737,1.237,1.237,0,0,1-.8.289H7.048l-.289,1.632H20.653a1.21,1.21,0,0,1,.868.355,1.239,1.239,0,0,1,0,1.763,1.21,1.21,0,0,1-.868.355H5.285a1.222,1.222,0,0,1-.947-.447,1.278,1.278,0,0,1-.289-1.026l.658-3.579-1-10.052L.864,13.31A1.164,1.164,0,0,1,.141,12.7a1.308,1.308,0,0,1-.092-.947,1.157,1.157,0,0,1,.618-.724,1.286,1.286,0,0,1,.934-.092L5.232,12.1a1.115,1.115,0,0,1,.566.395,1.376,1.376,0,0,1,.276.658l.211,2,16.473,1.842A1.171,1.171,0,0,1,23.6,17.494ZM7.154,29.994a1.887,1.887,0,0,1,1.895,1.895A1.871,1.871,0,0,1,8.5,33.244a1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Zm11.237,0a1.887,1.887,0,0,1,1.895,1.895,1.871,1.871,0,0,1-.553,1.355,1.875,1.875,0,0,1-2.684,0,1.871,1.871,0,0,1-.553-1.355,1.887,1.887,0,0,1,1.895-1.895Z" transform="translate(0 -10.893)" class="cls-1"></path></g></g></svg>
                            <span class="buy-me">КУПИ МЕ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../../eventBus.js';
    import axios from 'axios';
    export default {
        name: "order",
        cart: [],
        data() {
            return {
                products: []
            }
        },
        created () {
            // fetch the data when the view is created and the data is
            // already being observed
            this.readOrder;
        },
        computed: {
            readOrder() {
                axios.get('api/order').then((res) => {
                    for(let item in res.data){
                        this.products.push(res.data[item]);
                    }
                }).catch((err) => {
                    console.log(err.response.data.message);
                });
            }
        },
        methods: {
            addToCart(event) {
                const cart = event;
                EventBus.$emit('orderProducts', cart);
            },

        }
    }
</script>

<style scoped>

</style>