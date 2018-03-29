/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */
import 'jquery';

//import 'jquery-ui';
//import 'jquery-ui/ui/widgets/datepicker';
import 'bootstrap-sass/assets/javascripts/bootstrap';
//import 'slick-carousel';

window.$ = window.jQuery = require("jquery");

$('.menu-toggle').on('click',function(){

    $('.main-navigation').toggle();

});

$('.menu-toggle-close').on('click',function(){
    $('.main-navigation').toggle();
});