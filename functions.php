<?php
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

class MyTheme {
    private static $instance = null;

    private function __construct() {
        // add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        // add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

MyTheme::get_instance();