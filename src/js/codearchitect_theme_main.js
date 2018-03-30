/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */
import 'jquery';

//import 'jquery-ui';
//import 'jquery-ui/ui/widgets/datepicker';
import 'bootstrap-sass/assets/javascripts/bootstrap';
//import 'slick-carousel';
import Main_navigation from './modules/main_navigation.js';
import Site_footer from './modules/site_footer.js';

window.$ = window.jQuery = require("jquery");


const main_navigation = new Main_navigation();
const site_footer = new Site_footer();