<?php 
/**
 * Plugin Name: Using Git
 */

 if (! defined('ABSPATH')) {
     die();
 }


 if (file_exists(__DIR__.'/something.php')) {
     require __DIR__.'/something.php';
 }