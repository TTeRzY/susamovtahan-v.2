<template>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <h1 class="col-lg-12 mt-5 mb-5 text-center">Нашите продукти</h1>

            <div class="col-lg-4 products-page-holder">
                <div class="list-group">
                        <router-link class="list-group-item" to="/products" exact>
                            <a href="#" class="nav-item" >  Сусамов тахан </a>
                        </router-link>

                        <router-link class="list-group-item" to="/products/susamovo-maslo" >
                            <a href="#"class="nav-item"  >Сусамово масло</a>
                        </router-link>

                        <router-link   class="list-group-item" to="/products/brashno-ot-limets">
                            <a href="#" class="nav-item">Брашно от лимец</a>
                        </router-link>

                        <router-link class="list-group-item" to="/products/pchelen-med">
                            <a href="#" class="nav-item" >Пчелен мед</a>
                        </router-link>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-8">
              <keep-alive>
                  <transition name="fade">
                        <router-view ></router-view>
                  </transition>
              </keep-alive>
            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
    <!-- /.container -->
</template>

<script>
  import SusamovTahan from './SusamovTahan';
  import SusamovoMaslo from './SusamovoMaslo';
  import BrashnoOtLimets from './BrashnoOtLimets';
  import PchelenMed from './PchelenMed';

  export default {
    name: "products",
    data() {
      return {
        selectedComponent: 'appSusamovTahan'
      }
    },
    components: {
      appSusamovTahan: SusamovTahan,
      appSusamovoMaslo: SusamovoMaslo,
      appBrashnoOtLimets: BrashnoOtLimets,
      appPchelenMed: PchelenMed
    }
  }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>