class Main_navigation {

    constructor() {
        this.init();
    }

    init() {

        $('.main-navigation-menu-toggle').on('click',function(){

            $('.main-navigation').toggle();

        });

        $('.main-navigation-menu-toggle-close').on('click',function(){
            $('.main-navigation').toggle();
        });

    }
}

export default Main_navigation;