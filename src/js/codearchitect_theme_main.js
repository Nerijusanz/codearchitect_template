/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */
import 'jquery';

//import 'jquery-ui';
//import 'jquery-ui/ui/widgets/datepicker';
import 'bootstrap-sass/assets/javascripts/bootstrap';
//import 'slick-carousel';
import Site_footer from './modules/site_footer.js';
import Main_navigation from './modules/main_navigation.js';


window.$ = window.jQuery = require("jquery");

const site_footer = new Site_footer();

const main_navigation = new Main_navigation();
