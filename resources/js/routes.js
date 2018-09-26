import Home from './components/public/Home';
import Technology from './components/public/Technology';
import Products from './components/Products/Products';
import SusamovTahan from './components/Products/SusamovTahan';
import SusamovoMaslo from './components/Products/SusamovoMaslo';
import BrashnoOtLimets from './components/Products/BrashnoOtLimets';
import PchelenMed from './components/Products/PchelenMed';

export const routes = [
  { path: '', component: Home },
  { path: '/technology', component: Technology},
  { path: '/products', component: Products,
    children: [
      { path:'', component:SusamovTahan},
      { path:'/products/susamovo-maslo', component:SusamovoMaslo},
      { path:'/products/brashno-ot-limets', component:BrashnoOtLimets},
      { path:'/products/pchelen-med', component:PchelenMed},
    ]},
];