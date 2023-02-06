<?php
// Navbar For Website :
require get_theme_file_path('/inc/bootstrap_5_wp_nav_menu_walker.php');
require get_theme_file_path('/inc/gallery.php');
require get_theme_file_path('/inc/newsroom.php');
require get_theme_file_path('/inc/sample-papers.php');
require get_theme_file_path('/inc/entrance-exam.php');
// require get_theme_file_path('/inc/courses.php');

// Register Website Menu in Wordpress
register_nav_menu('main-menu', 'Main menu');


// Carbon Field Setting

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options()
{
    require get_theme_file_path('/inc/theme_options/slider.php');
    require get_theme_file_path('/inc/theme_options/theme_options.php');
    require get_theme_file_path('/inc/theme_options/homepage.php');
    require get_theme_file_path('/inc/theme_options/gallery.php');
    require get_theme_file_path('/inc/theme_options/countrypage.php');

    Container::make('post_meta', __('Add Header Image', 'crb'))
        ->where('post_type', '=', 'page')
        ->add_fields(
            array(
                Field::make('image', 'country_thumb', 'Advantage Icon')->set_width(100)->set_value_type('url'),
                Field::make('html', 'crb_information_text')
                    ->set_html('<span><b>Please Select image that is showin in Header Left, right and Bottom only. </b><br>  [ Image Resolution are 300*300 px (For Left and Right Image) | For Bottom Image Resolution is 500*200 px.</span> ]'),
                Field::make('image', 'left', 'Left Image for Header')->set_width(33)->set_value_type('url'),
                Field::make('image', 'right', 'Right Image for Header')->set_width(33)->set_value_type('url'),
                Field::make('image', 'bottom', 'bottom Image for Headet')->set_width(34)->set_value_type('url'),
            )
        );

    $template_path = 'galleries.php';

    // Advantge Section
    Container::make('post_meta', __('Section 1 : Events Gallery Images', 'crb'))
        ->show_on_template($template_path)
        ->add_fields(
            array(
                Field::make('checkbox', 'enable_gallery_sec_1', 'Enable'),
                Field::make('text', 'gallery_sec_1_title', 'Title'),
                Field::make('textarea', 'gallery_sec_1_description', 'Description'),
            )
        );

}




// Adding a custom color to the links
function add_catgory_in_page()
{
    // register_taxonomy_for_object_type('post_tag', 'page');
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'add_catgory_in_page');





// exclud ipod from is mobile function
function allenprefix_exclude_ipad($is_mobile)
{
    static $is_mobile;

    if (isset($is_mobile))
        return $is_mobile;

    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
    ) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}
add_filter('wp_is_mobile', 'allenprefix_exclude_ipad');

