<?php
/*
Plugin Name: WP Sample Plugin
Plugin URI: http://github.com/remiprev/wp-sample-plugin/
Version: 0.1
Description: A small sample OOP WordPress plugin
Author: Rémi Prévost
Author URI: http://remiprevost.com
*/

/**
* @classname WP_Sample_Plugin
* @author remi (exomel.com)
* @version 20100119
*/
class WP_Sample_Plugin {

    /**
    * @constructor
    */
    function WP_Sample_Plugin() {
        $this->set_hooks();
    }

    /**
     * Set actions and filters
     * @return void
     */
    function set_hooks() {
        add_action( 'parse_request', array( $this, 'parse_request' ) );
    }

    /**
     * A sample action
     * @return WP_Query
     */
    function parse_request( $wp ) {
        return $wp;
    }

}

$WP_Sample_Plugin = new WP_Sample_Plugin();

// vim: ft=php expandtab
