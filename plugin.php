<?php
/**
 * Plugin Name: Boutique UI
 * Plugin URI: http://wp-boutique.org/
 * Description: Admin UI for Boutique shop
 * Version: 1.0.0
 * Author: Thomas Kjaergaard
 * Author URI: http://twitter.com/t_kjaergaard
 * License: MIT
 */

add_action('admin_menu', function()
{
    add_menu_page( 'Boutique', 'Boutique', 'edit_pages', 'boutique', function()
    {
        return 'Foo';
    }, null, null );
});