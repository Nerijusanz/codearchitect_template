<?php
/**
 * @package codearchitect
 */

namespace CA\setup;


class Settings {

    public static $plugin;
    public static $login_logo_url;  //login page logo url;

    public function __construct(){

        $this->init();

    }

    public function init(){

        self::$plugin = \CA_Inc\setup\Settings::$plugin; //plugin
        define('TEMPLATE_DOMAIN',self::$plugin);
        self::$login_logo_url = get_template_directory_uri() . '/assets/images/logo.png'; //usage: Setup::site_login_logo();    login page logo url.

    }

} 