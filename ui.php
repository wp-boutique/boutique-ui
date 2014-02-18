<?php

require_once(__DIR__."/vendor/autoload.php");

add_action('admin_menu', function()
{
    add_menu_page( 'Boutique', 'Boutique', 'edit_pages', 'boutique', function()
    {
        return 'Foo';
    }, null, null );
});