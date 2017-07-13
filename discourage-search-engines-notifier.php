<?php
/*
   Plugin Name: Discourage Search Engines Notifier
   Plugin URI: http://wordpress.org/extend/plugins/discourage-search-engines-notifier/
   Version: 1.0
   Author: <a href="http://ragu.cz">Ragu.cz</a>
   Description: This plugin simply displays notification in admin bar that will show the state of Discourage Search Engines functionality.
   Text Domain: discourage
   License: GPLv3
  */

    function discourage_engines_check_9879($bar)
    {
        if (get_option('blog_public') == 0) {
            $icon = '"\f530"';
            $icon_color = 'red';
        } else {
            $icon = '"\f177"';
            $icon_color = 'green';
        }
        echo
            '<style>#wpadminbar #wp-admin-bar-discourage_check_9879 .ab-icon:before {content: ' . $icon . '; color: ' . $icon_color . ';}</style>';
        $bar->add_menu(array(
            'id' => 'discourage_check_9879',
            'title' => '<span class="ab-icon"></span>',
            'href' => 'options-reading.php',
            'meta' => array(
                'target' => '_self',
                'title' => 'Discourage search engines from indexing this site',
            ),
        ));
    }

    add_action('admin_bar_menu', 'discourage_engines_check_9879', 999);