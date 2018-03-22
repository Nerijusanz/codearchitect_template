/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */
import 'jquery';

import 'jquery-ui';
import 'jquery-ui/ui/widgets/datepicker';

import 'slick-carousel';

 // Import custom modules
import App from'./modules/app.js';
import Carousel from './modules/carousel.js';

window.$ = window.jQuery = require("jquery");


const app = new App();
const carousel = new Carousel();


$( "#calendar" ).datepicker();
$("#calendar").datepicker("option", "showAnim","slideDown");

