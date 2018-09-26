<template>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Shop Name</h1>
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

            <div class="col-lg-9">
              <keep-alive>
                  <router-view ></router-view>
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

</style>