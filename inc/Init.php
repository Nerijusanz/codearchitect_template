<?php
/**
 * @package codearchitect
 */

namespace CA;

class Init {

    public static function get_services()
    {

        return [
            setup\Settings::class,
            setup\Setup::class,
            setup\Enqueue::class,
            setup\Mobile_detect::class,
            setup\Body_class_setup::class,
            menu\MenuInit::class,
            shortcodes\ShortcodeInit::class

        ];
    }
    /**
     * Loop through the classes, initialize them, and call the register() method if it exists
     * @return
     */
    public static function register_services()
    {

        foreach ( self::get_services() as $class ) {
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register') ) {
                $service->register();
            }
        }
    }
    /**
     * Initialize the class
     * @param  class $class 		class from the services array
     * @return class instance 		new instance of the class
     */
    private static function instantiate( $class )
    {
        $service = new $class();

        return $service;
    }

} 