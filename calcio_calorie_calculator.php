<?php
/*
Plugin Name: Calorie Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/calorie-calculator/
Description: This calorie calculator computes how many calories are required daily to maintain, decrease, or gain weight. Learn about the different types of calories and how they affect you.
Version: 1.0.0
Author: www.calculator.io / Calorie Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_calorie_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Calorie Calculator by www.calculator.io";

function calcio_calorie_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Calorie Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_calorie_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_calorie_calculator', 'calcio_calorie_calculator_shortcode' );