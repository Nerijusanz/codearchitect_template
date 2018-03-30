class Site_footer {

    constructor() {
        this.init();
        this.check_footer_position();
    }

    init() {

         //look function end of file //for first time loaded content, depend on window height to detect footer position: relative or fixed;
        var self=this;
        $(window).resize(function(){    //on resize window make check footer position;

            self.check_footer_position();
        });

    }

    check_footer_position(){

        var content = $('.site-content');
        var content_height = content.height();
        var content_top = content.offset().top;
        var content_bottom = (content_top+content_height+40); //content bottom line //40 is .site-content padding-bottom:40px;

        var footer = $('.site-footer');
        var footer_height = footer.height();
        var window_height = $(window).height();


        if(window_height >= (content_bottom+footer_height) ){

            footer.addClass('footer-fixed');

        }else{

            footer.removeClass('footer-fixed');
        }

    }// check_footer_position()

}

export default Site_footer;