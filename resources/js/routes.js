import Home from './components/public/Home';
import Technology from './components/public/Technology';
import About from './components/public/About';
import Contacts from './components/public/Contacts';
import Cart from './components/public/Cart';
import Order from './components/public/Order';
import Products from './components/Products/Products';
import Gallery from './components/public/Gallery';
import Videos from './components/public/Videos';
import SusamovTahan from './components/Products/SusamovTahan';
import SusamovoMaslo from './components/Products/SusamovoMaslo';
import BrashnoOtLimets from './components/Products/BrashnoOtLimets';
import PchelenMed from './components/Products/PchelenMed';

export const routes = [
    { path: '', component: Home },
    { path: '/technology', component: Technology },
    { path: '/about', component: About },
    { path: '/contacts', component: Contacts },
    { path: '/order', component: Order },
    { path: '/cart', component: Cart },
    { path: '/gallery', component: Gallery },
    { path: '/videos', component: Videos },
    {
        path: '/products/', component: Products,
        children: [
            { path: '', component: SusamovTahan },
            { path: '/products/susamovo-maslo', component: SusamovoMaslo },
            { path: '/products/brashno-ot-limets', component: BrashnoOtLimets },
            { path: '/products/pchelen-med', component: PchelenMed },
        ]
    },
];