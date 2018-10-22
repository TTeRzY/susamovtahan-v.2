<template>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-4 products-page-holder">
                <h1 class="my-4">Нашите продукти</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <router-link class="nav-item" to="/products">
                            Сусамов тахан
                        </router-link>
                    </a>
                    <a href="#" class="list-group-item">
                        <router-link class="nav-item" to="/products/susamovo-maslo">
                            Сусамово масло
                        </router-link>
                    </a>
                    <a href="#" class="list-group-item">
                        <router-link class="nav-item"  to="/products/brashno-ot-limets">
                            Брашно от лимец
                        </router-link>
                    </a>
                    <a href="#" class="list-group-item">
                        <router-link class="nav-item" to="/products/pchelen-med">
                            Пчелен мед
                        </router-link>
                    </a>
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