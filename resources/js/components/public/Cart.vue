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
                <form name="order_form">
                    <div class="row cart-items-content">
                        <div class="delete-product">
                            <a href="javascript:;" data-remove-from-cart="356">
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
                                     src="../../../assets/img/tahan720.png" alt="">
                            </a>
                        </div>
                        <div class="cart-product-name">
                            <a href="#">
                                P3520
                            </a>
                        </div>
                        <div class="cart-product-price">
                            <p>
                                120<sup>00</sup>лв.
                            </p>
                        </div>
                        <div class="add-more-items" data-product-id="356">
                            <input min="1" max="9" step="1" value="1" type="number">
                            <div class="quantity-nav">
                                <div class="quantity-button quantity-up">+</div>
                                <div class="quantity-button quantity-down">-</div>
                            </div>
                        </div>
                        <div class="total-price">
                            <p>
                                120<sup>00</sup> лв. </p>
                        </div>
                    </div>
                    <div class="row more-options">
                        <a href="#">
                            <img src="http://angeloff.fedox.net/impacto/data/images/arrow-pointing-to-right.png"
                                 alt="Left Arrow">
                            ПРОДЪЛЖЕТЕ ДА ПАЗАРУВАТЕ </a>
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
                                                <input class="form-control" name="names" placeholder="Вашите имена" onblur="this.placeholder='Вашите имена'" onfocus="this.placeholder=''" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="phone" placeholder="Телефон" onblur="this.placeholder='Телефон'" onfocus="this.placeholder=''" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="email" placeholder="Имейл" onblur="this.placeholder='Имейл'" onfocus="this.placeholder=''" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="email" placeholder="Град" onblur="this.placeholder='Град'" onfocus="this.placeholder=''" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="email" placeholder="Адрес за доставка" onblur="this.placeholder='Адрес за доставка'" onfocus="this.placeholder=''" required="" type="text">
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

                                            <textarea name="message" id="message" placeholder="Вашето съобщение..."></textarea>
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
                                <div class="order">
                                    <p>поръчка
                                        <span data-price-total="">120<sup>00</sup> лв.</span>
                                    </p>
                                </div>
                                <div class="delivery-cost">
                                    <p>
                                        доставка <span data-price-delivery="">0<sup>00</sup>лв.</span>
                                    </p>
                                </div>
                                <div class="total-order-big">
                                    <h2>
                                        ОБЩО <span data-price-grandtotal="">120<sup>00</sup>лв.</span>
                                    </h2>
                                    <p>Всички цени са с ДДС</p>
                                </div>
                                <a href="#" class="btn send-order-btn">
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


        </div>
    </div>
</template>

<script>
  export default {
    name: "cart"
  }
</script>

<style scoped>

</style>