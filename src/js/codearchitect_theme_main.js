import 'jquery';

//import 'jquery-ui';
//import 'jquery-ui/ui/widgets/datepicker';
import 'bootstrap-sass/assets/javascripts/bootstrap';

import Bootstrap from './modules/bootstrap.js';
import Main_navigation from './modules/main_navigation.js';
import Site_footer from './modules/site_footer.js';



window.$ = window.jQuery = require("jquery");

const bootstrap = new Bootstrap();
const main_navigation = new Main_navigation();
const site_footer = new Site_footer();

