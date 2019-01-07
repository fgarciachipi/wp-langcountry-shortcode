<?php
/*
Plugin Name: Chipi LangCountry Shortcode
Plugin URI: http://github.com/fgarciachipi/wp-langcountry-shortcode
Description: Shortcode to show language and country
Author: Fidel Garcia Chipi
Version: 1.0.0
Author URI: http://github.com/fgarciachipi
*/
if (!defined('ABSPATH')){
	exit;
}

if (!class_exists('Chipi_LangCountry_Shortcode')){
    class Chipi_LangCountry_Shortcode{
        public function __construct(){
            add_shortcode('chipi_langcountry',  array($this, 'langcountry'));
        }

        public function langcountry($atts){
            $atts = shortcode_atts(array('separator' => ''), $atts);
            $locale = get_locale();

            if(!empty($atts['separator'])){
                return str_replace('_', $atts['separator'], $locale);
            }

            return $locale;
        }
    }
}

new Chipi_LangCountry_Shortcode();

