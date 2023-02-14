<?php
use Carbon_Fields\Field;
use Carbon_Fields\Container;

require('inc/func.inc.php');
require('inc/endpoints.inc.php');
require('inc/callbacks.inc.php');
// require('inc/filterproducts.inc.php');
// require('inc/filter-job-offers.inc.php');

$editorCanAddAndRemovePages = true; // !!! may take 2 reloads for changes to take effect !!!
$editorCanAddAndRemovePosts = true; // !!! may take 2 reloads for changes to take effect !!!

$carbonFieldsArgs = array();
$websiteOptions = array();
// $websiteOptions[] = array('text', 'header_big', 'Website kop tekst GROOT');
// $websiteOptions[] = array('text', 'facebook', 'Facebook link');
$websiteOptions[] = array('text', 'linkedin', 'LinkedIn link');
$websiteOptions[] = array('text', 'twitter', 'Twitter link');
// $websiteOptions[] = array('text', 'instagram', 'Instagram link');
$websiteOptions[] = array('text', 'form_success', 'Formulier succes melding');
$websiteOptions[] = array('text', 'form_error', 'Formulier error melding');
// $websiteOptions[] = array('text', 'apply_success', 'Sollicitatie succes melding');
// $websiteOptions[] = array('text', 'apply_error', 'Sollicitatie error melding');
// $websiteOptions[] = array('rich_text', 'footer_menu', 'Footer menu');
// $websiteOptions[] = array('rich_text', 'inlog_menu', 'Inlog menu (in header and footer)');
$websiteOptions[] = array('text', 'phone_number', 'Telefoonnummer (algemeen, o.a. gebruikt in "Call us"-box en header)');
$websiteOptions[] = array('text', 'email_address', 'E-mail adres (algemeen, o.a. gebruikt in contact formulier en header)');
// $websiteOptions[] = array('textarea', 'wt_website_textarea1', 'Website textarea 1');
$websiteOptions[] = array('rich_text', 'footer_tekst_1', 'Footer blok 1 tekst');
$websiteOptions[] = array('rich_text', 'footer_tekst_2', 'Footer blok 2 tekst');
$websiteOptions[] = array('rich_text', 'footer_tekst_3', 'Footer blok 3 tekst');
// $websiteOptions[] = array('rich_text', 'footer_tekst_2', 'Footer tekst rechts');
// $websiteOptions[] = array('rich_text', 'wt_website_footer2', 'Footer blok 2 tekst');
// $websiteOptions[] = array('file', 'wt_algemene_voorwaarden', 'Algemene voorwaarden');
// $websiteOptions[] = array('image', 'header_image', 'Header afbeelding');
$websiteOptions[] = array('media_gallery', 'working_with', 'Partner logo\'s');
// $websiteOptions[] = array('text', 'header_title', 'Header Titel');
// $websiteOptions[] = array('text', 'header_sub', 'Header Sub-titel');
$carbonFieldsArgs['websiteOptions'] = $websiteOptions;

add_action( 'init', 'create_posttype_news' );
add_action( 'init', 'create_posttype_offices' );
add_action( 'init', 'create_posttype_professionals' );
add_action( 'init', 'create_posttype_vessels' );
// add_action( 'init', 'create_posttype_job_offer' );
// add_action( 'init', 'create_posttype_interview' );
add_action( 'init', 'register_taxonomy_vessel_type' );
// add_action( 'init', 'register_taxonomy_uren_per_week' );
// add_action( 'init', 'register_taxonomy_type_job' );
// add_action( 'init', 'register_taxonomy_locatie' );

// Our custom post type function
function create_posttype_news() {
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' ),
                'add_new_item' => __( 'Add New News-item' ),
                'add_new' => __( 'Add New News-item' ),
                'edit_item' => __( 'Edit News-item' ),
                'update_item' => __( 'Update News-item' ),
            ),
            'public' => true,
            // 'has_archive' => true,
            // 'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
            // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'supports'            => array( 'title'),
            )
    );
}
function create_posttype_offices() {
    register_post_type( 'office',
        array(
            'labels' => array(
                'name' => __( 'Offices' ),
                'singular_name' => __( 'Office' ),
                'add_new_item' => __( 'Add New Office' ),
                'add_new' => __( 'Add New Office' ),
                'edit_item' => __( 'Edit Office' ),
                'update_item' => __( 'Update Office' ),
            ),
            'public' => true,
            // 'has_archive' => true,
            // 'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
            // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'supports'            => array( 'title'),
            )
    );
}
function create_posttype_professionals() {
    register_post_type( 'professional',
        array(
            'labels' => array(
                'name' => __( 'Professionals' ),
                'singular_name' => __( 'Professional' ),
                'add_new_item' => __( 'Add New Professional' ),
                'add_new' => __( 'Add New Professional' ),
                'edit_item' => __( 'Edit Professional' ),
                'update_item' => __( 'Update Professional' ),
            ),
            'public' => true,
            // 'has_archive' => true,
            // 'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
            // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'supports'            => array( 'title'),
            )
    );
}
function create_posttype_vessels() {
    register_post_type( 'vessel',
        array(
            'labels' => array(
                'name' => __( 'Vessels' ),
                'singular_name' => __( 'Vessel' ),
                'add_new_item' => __( 'Add New Vessel' ),
                'add_new' => __( 'Add New Vessel' ),
                'edit_item' => __( 'Edit Vessel' ),
                'update_item' => __( 'Update Vessel' ),
            ),
            'public' => true,
            // 'has_archive' => true,
            // 'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
            // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'supports'            => array( 'title'),
            )
    );
}
// function create_posttype_job_offer() {
//     register_post_type( 'job_offer',
//         array(
//             'labels' => array(
//                 'name' => __( 'Job offers' ),
//                 'singular_name' => __( 'Job offer' ),
//                 'add_new_item' => __( 'Add New Job offer' ),
//                 'add_new' => __( 'Add New Job offer' ),
//                 'edit_item' => __( 'Edit Job offer' ),
//                 'update_item' => __( 'Update Job offer' ),
//             ),
//             'public' => true,
//             // 'has_archive' => true,
//             // 'rewrite' => array('slug' => 'movies'),
//             'show_in_rest' => true,
//             // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//             'supports'            => array( 'title'),
//             )
//     );
// }
// function create_posttype_interview() {
//     register_post_type( 'interview',
//         array(
//             'labels' => array(
//                 'name' => __( 'Interviews' ),
//                 'singular_name' => __( 'Interview' ),
//                 'add_new_item' => __( 'Add New Interview' ),
//                 'add_new' => __( 'Add New Interview' ),
//                 'edit_item' => __( 'Edit Interview' ),
//                 'update_item' => __( 'Update Interview' ),
//             ),
//             'public' => true,
//             // 'has_archive' => true,
//             // 'rewrite' => array('slug' => 'movies'),
//             'show_in_rest' => true,
//             // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//             'supports'            => array( 'title'),
//             )
//     );
// }
function register_taxonomy_vessel_type() {
    $labels = array(
        'name'              => _x( 'Types', 'taxonomy general name' ),
        'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Types' ),
        'all_items'         => __( 'All Types' ),
        'parent_item'       => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item'         => __( 'Edit Type' ),
        'update_item'       => __( 'Update Type' ),
        'add_new_item'      => __( 'Add New Type' ),
        'new_item_name'     => __( 'New Type Name' ),
        'menu_name'         => __( 'Type' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'vessel_type' ],
    );
    register_taxonomy( 'vessel_type', [ 'vessel' ], $args );
}
// function register_taxonomy_uren_per_week() {
//     $labels = array(
//         'name'              => _x( 'Uren per week', 'taxonomy general name' ),
//         'singular_name'     => _x( 'Uren per week', 'taxonomy singular name' ),
//         'search_items'      => __( 'Search Uren per week' ),
//         'all_items'         => __( 'All Uren per week' ),
//         'parent_item'       => __( 'Parent Uren per week' ),
//         'parent_item_colon' => __( 'Parent Uren per week:' ),
//         'edit_item'         => __( 'Edit Uren per week' ),
//         'update_item'       => __( 'Update Uren per week' ),
//         'add_new_item'      => __( 'Add New Uren per week' ),
//         'new_item_name'     => __( 'New Uren per week Name' ),
//         'menu_name'         => __( 'Uren per week' ),
//     );
//     $args   = array(
//         'hierarchical'      => true, // make it hierarchical (like categories)
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'show_in_rest'      => true,
//         'query_var'         => true,
//         'rewrite'           => [ 'slug' => 'uren_per_week' ],
//     );
//     register_taxonomy( 'uren_per_week', [ 'job_offer' ], $args );
// }
// function register_taxonomy_type_job() {
//     $labels = array(
//         'name'              => _x( 'Type job', 'taxonomy general name' ),
//         'singular_name'     => _x( 'Type job', 'taxonomy singular name' ),
//         'search_items'      => __( 'Search Type job' ),
//         'all_items'         => __( 'All Type job' ),
//         'parent_item'       => __( 'Parent Type job' ),
//         'parent_item_colon' => __( 'Parent Type job:' ),
//         'edit_item'         => __( 'Edit Type job' ),
//         'update_item'       => __( 'Update Type job' ),
//         'add_new_item'      => __( 'Add New Type job' ),
//         'new_item_name'     => __( 'New Type job Name' ),
//         'menu_name'         => __( 'Type job' ),
//     );
//     $args   = array(
//         'hierarchical'      => true, // make it hierarchical (like categories)
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'show_in_rest'      => true,
//         'query_var'         => true,
//         'rewrite'           => [ 'slug' => 'type_job' ],
//     );
//     register_taxonomy( 'type_job', [ 'job_offer' ], $args );
// }
// function register_taxonomy_locatie() {
//     $labels = array(
//         'name'              => _x( 'Locaties', 'taxonomy general name' ),
//         'singular_name'     => _x( 'Locatie', 'taxonomy singular name' ),
//         'search_items'      => __( 'Search Locaties' ),
//         'all_items'         => __( 'All Locaties' ),
//         'parent_item'       => __( 'Parent Locatie' ),
//         'parent_item_colon' => __( 'Parent Locatie:' ),
//         'edit_item'         => __( 'Edit Locatie' ),
//         'update_item'       => __( 'Update Locatie' ),
//         'add_new_item'      => __( 'Add New Locatie' ),
//         'new_item_name'     => __( 'New Locatie Name' ),
//         'menu_name'         => __( 'Locatie' ),
//     );
//     $args   = array(
//         'hierarchical'      => true, // make it hierarchical (like categories)
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'show_in_rest'      => true,
//         'query_var'         => true,
//         'rewrite'           => [ 'slug' => 'locatie' ],
//     );
//     register_taxonomy( 'locatie', [ 'job_offer' ], $args );
// }


$editor = get_role('editor');
$capabilities_pages = array(
    'delete_others_pages',
    'delete_pages',
    'delete_private_pages',
    'delete_published_pages',
    'publish_pages',
);
$capabilities_posts = array(
    'delete_others_posts',
    'delete_posts',
    'delete_private_posts',
    'delete_published_posts',
    'publish_posts',
);
if($editorCanAddAndRemovePages && !$editor->has_cap('delete_pages')) {
    function change_editor_capabilities1($role, $caps) {
        foreach($caps as $cap) $role->add_cap($cap);
    }
    add_action( 'wt_cap_action', 'change_editor_capabilities1', 10, 2);
    do_action( 'wt_cap_action', $editor, $capabilities_pages );
}
if(!$editorCanAddAndRemovePages && $editor->has_cap('delete_pages')) {
    function change_editor_capabilities2($role, $caps) {
        foreach($caps as $cap) $role->remove_cap($cap);
    }
    add_action( 'wt_cap_action', 'change_editor_capabilities2', 10, 2);
    do_action( 'wt_cap_action', $editor, $capabilities_pages );
}


if($editorCanAddAndRemovePosts && !$editor->has_cap('delete_posts')) {
    function change_editor_capabilities3($role, $caps) {
        foreach($caps as $cap) $role->add_cap($cap);
    }
    add_action( 'wt_cap_action', 'change_editor_capabilities3', 10, 2);
    do_action( 'wt_cap_action', $editor, $capabilities_posts );
}
if(!$editorCanAddAndRemovePosts && $editor->has_cap('delete_posts')) {
    function change_editor_capabilities4($role, $caps) {
        foreach($caps as $cap) $role->remove_cap($cap);
    }
    add_action( 'wt_cap_action', 'change_editor_capabilities4', 10, 2);
    do_action( 'wt_cap_action', $editor, $capabilities_posts );
}



if (!current_user_can('administrator')) {

    if(!$editor->has_cap('delete_pages')) add_action('admin_footer', 'removePageActionsEditorRole');
    if(!$editor->has_cap('delete_posts')) add_action('admin_footer', 'removePostActionsEditorRole');

    

    add_filter('bulk_actions-edit-page', 'remove_from_bulk_actions');
    // add_filter('page_row_actions', 'remove_page_row_actions', 10, 2);
    // add_action('admin_head', 'customBackendStyles');
    add_action('admin_footer', 'customBackendScriptsEditorRol');
    add_filter('carbon_fields_theme_options_container_admin_only_access', '__return_false');
    add_filter('wp_rest_cache/settings_capability', 'wprc_change_settings_capability', 10, 1);

    add_action('admin_menu', 'remove_admin_menus' );
    add_action('init', 'remove_comment_support', 100);
    add_action('wp_before_admin_bar_render', 'remove_admin_bar_menus' );

    add_filter('contextual_help_list','contextual_help_list_remove');
    add_filter('screen_options_show_screen', 'remove_screen_options');
}


add_action('admin_footer', 'customBackendScripts');

add_action('add_meta_boxes', 'set_default_page_template', 1);
add_action('init', 'remove_editor_init');
add_action('carbon_fields_register_fields', function() use ( $carbonFieldsArgs ) { crbRegisterFields( $carbonFieldsArgs ); });
add_action('carbon_fields_theme_options_container_saved', 'deleteWebsiteOptionsRestCache');

add_action('add_attachment', 'deleteSimpleMediaRestCache');
add_action('delete_attachment', 'deleteSimpleMediaRestCache');

add_action('create_term', 'deleteSimpleTaxonomiesRestCache');
add_action('edit_term', 'deleteSimpleTaxonomiesRestCache');
add_action('delete_term', 'deleteSimpleTaxonomiesRestCache');

// add_action('admin_head', 'loadAxios');
// function loadAxios() {
//     echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
// }
function crbRegisterFields($args) {
    Container::make( 'post_meta', __( 'Section Options' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'template-section-based.php' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_sections', 'Sections' )->set_visible_in_rest_api($visible = true)
                ->set_layout( 'tabbed-vertical' )
                ->add_fields( 'hero', 'Hero (big header)', array(
                    Field::make( 'separator', 'separator1', __( 'Hero (big header)' ) ),
                    Field::make( 'media_gallery', 'crb_media_gallery', __( 'Media Gallery' ) )
                        ->set_type( array( 'image' ) )->set_duplicates_allowed( false ),
                    Field::make( 'text', 'big_header', __( 'Big header text' ) ),
                    Field::make( 'text', 'small_header', __( 'Small header text' ) ),
                    Field::make( 'textarea', 'text', __( 'Text' ) ),

                        // Field::make( 'image', 'image', 'Afbeelding' )->set_value_type( 'url' ),
                    // Field::make( 'text', 'writing_letters_header', __( 'Writing letters header (gold)' ) ),
                    // Field::make( 'text', 'block_letters_header', __( 'Block letters header' ) ),
                    // Field::make( 'select', 'color', __( 'Choose block letters color' ) )
                    // ->set_options( array(
                        // 'white' => __( 'White' ),
                        // 'black' => __( 'Black' ),
                    // ) ),
                    // Field::make( 'checkbox', 'show_reserve_button', __( 'Show reserve button' ) ),
                    // Field::make( 'image', 'image', 'Afbeelding' ),
                    // Field::make( 'rich_text', 'text', 'Tekst' ),
                ) )
                // ->add_fields( 'banner', 'Banner', array(
                    // Field::make( 'image', 'image', 'Afbeelding' ),
                //     Field::make( 'select', 'image_opacity', __( 'Choose image transparancy' ) )
                //         ->set_options( array(
                //             'none' => __( 'None' ),
                //             'black' => __( 'Black transparancy' ),
                //             'white' => __( 'White transparancy' ),
                //         ) ),
                //     Field::make( 'checkbox', 'extra_padding', __( 'Add extra padding' ) ),
                // Field::make( 'text', 'banner_title', __( 'Banner title' ) ),
                // Field::make( 'text', 'banner_sub', __( 'Banner sub-text' ) ),
                //     Field::make( 'rich_text', 'text', 'Tekst (on top of image)' ),
                //     Field::make( 'select', 'text_align', __( 'Choose text alignment' ) )
                //         ->set_options( array(
                //             'left' => __( 'Left' ),
                //             'center' => __( 'Center' ),
                //         ) ),
                //     Field::make( 'select', 'text_color', __( 'Choose text color' ) )
                //         ->set_options( array(
                //             'white' => __( 'White' ),
                //             'black' => __( 'Black' ),
                //         ) ),

                //     Field::make( 'complex', 'links', __( 'Add Links' ) )
                //         ->add_fields( array(
                //             Field::make( 'text', 'button_text', __( 'Button text' ) ),
                //             Field::make( 'select', 'button_color', __( 'Button color' ) )
                //                 ->set_options( array(
                //                     'pink' => __( 'Pink' ),
                //                     'black' => __( 'Black' ),
                //                     'white' => __( 'White' ),
                //                 ) ),
                //             Field::make( 'association', 'links', __( 'Select page for button link (custom button link must be left empty)' ))
                //                 ->set_types( array(
                //                     array(
                //                         'type' => 'post',
                //                         'taxonomy' => 'page',
                //                     ),
                //                 ) ),
                //             Field::make( 'text', 'custom_link', __( 'Custom button link' ) ),
                //         )),

                // ) )
                ->add_fields( 'text', 'Tekst', array(
                    // Field::make( 'select', 'background_color', __( 'Background color' ) )
                    //     ->set_options( array(
                    //         'white' => __( 'White' ),
                    //         'grey' => __( 'Grey' ),
                    //         'pink' => __( 'Pink' ),
                    //     ) ),
                    // Field::make( 'select', 'color', __( 'Choose background color' ) )
                    // ->set_options( array(
                    //     '' => __( 'White' ),
                    //     'blue' => __( 'Blue' ),
                    //     'gold' => __( 'Gold' ),
                    // ) ),
                    Field::make( 'separator', 'separator1', __( 'Section 1' ) ),

                    Field::make( 'text', 'header', __( 'Header' ) ),
                    Field::make( 'textarea', 'text', __( 'Text' ) ),
                    Field::make( 'image', 'image', __( 'Image' ) ),
                    Field::make( 'text', 'btn_orange_text', __( 'Orange button text' ) ),
                    Field::make( 'text', 'btn_orange_url', __( 'Orange button URL' ) ),
                    Field::make( 'text', 'btn_transparent_text', __( 'Transparent button text' ) ),
                    Field::make( 'text', 'btn_transparent_url', __( 'Transparent button URL' ) ),

                    Field::make( 'separator', 'separator2', __( 'Section 2 (optional)' ) ),

                    Field::make( 'text', 'header_2', __( 'Header (for second section, optional)' ) ),
                    Field::make( 'textarea', 'text_2', __( 'Text (for second section, optional)' ) ),
                    Field::make( 'image', 'image_2', __( 'Image (for second section, optional)' ) ),
                    Field::make( 'text', 'btn_orange_text_2', __( 'Orange button text (for second section, optional)' ) ),
                    Field::make( 'text', 'btn_orange_url_2', __( 'Orange button URL (for second section, optional)' ) ),
                    Field::make( 'text', 'btn_transparent_text_2', __( 'Transparent button text (for second section, optional)' ) ),
                    Field::make( 'text', 'btn_transparent_url_2', __( 'Transparent button URL (for second section, optional)' ) ),

                    // Field::make( 'select', 'margin', __( 'Choose block letters top-margin' ) )
                    // ->set_options( array(
                    //     '0' => __( '0 pixels' ),
                    //     '10' => __( '10 pixels' ),
                    //     '20' => __( '20 pixels' ),
                    //     '30' => __( '30 pixels' ),
                    //     '-10' => __( '-10 pixels' ),
                    //     '-20' => __( '-20 pixels' ),
                    //     '-30' => __( '-30 pixels' ),
                    // ) ),
                    // Field::make( 'rich_text', 'text', 'Text' ),
                    // Field::make( 'checkbox', 'vertical_align_center', 'Align text to center (vertically)' ),
                    // Field::make( 'image', 'image', 'Afbeelding' )->set_value_type( 'url' ),
                    // Field::make( 'select', 'orientation', __( 'Choose orientation' ) )
                    // ->set_options( array(
                    //     // '' => __( 'White' ),
                    //     // 'blue' => __( 'Blue' ),
                    //     'text_left' => __( 'Text left, image right' ),
                    //     'text_right' => __( 'Text right, image left' ),
                    // ) ),
                    // Field::make( 'association', 'crb_association', __( 'Select page for link' ))
                    // ->set_types( array(
                    //     array(
                    //         'type' => 'post',
                    //         'taxonomy' => 'page',
                    //     ),
                    // ) )
                    // Field::make( 'media_gallery', 'crb_media_gallery', __( 'Images' ) . ' (' . __( 'optional' ) . ')' )
                    //     ->set_type( array( 'image', ) ),
                    //     ->set_value_type( 'url' ),
                ) )
                ->add_fields( 'office_boxes', 'Offices', array(
                    Field::make( 'separator', 'separator1', __( 'Offices' ) ),
                    Field::make( 'association', 'office_associations', __( 'Select offices' ))
                    ->set_types( array(
                        array(
                            'type' => 'post',
                            'post_type' => 'office',
                        ),
                    ) )
                ) )
                ->add_fields( 'professional_boxes', 'Professionals', array(
                    Field::make( 'separator', 'separator1', __( 'Professionals' ) ),
                    Field::make( 'association', 'professional_associations', __( 'Select professionals' ))
                    ->set_types( array(
                        array(
                            'type' => 'post',
                            'post_type' => 'professional',
                        ),
                    ) )
                ) )
                ->add_fields( 'news_boxes', 'News', array(
                    Field::make( 'separator', 'separator1', __( 'News' ) ),
                    Field::make( 'association', 'news_associations', __( 'Select news (max 3)' ))
                    ->set_types( array(
                        array(
                            'type' => 'post',
                            'post_type' => 'news',
                        ),
                    ) )
                ) )
                ->add_fields( 'vessel_boxes', 'Vessels', array(
                    Field::make( 'separator', 'separator1', __( 'Vessels' ) ),
                    Field::make( 'association', 'vessels_associations', __( 'Select vessels' ))
                    ->set_types( array(
                        array(
                            'type' => 'post',
                            'post_type' => 'vessel',
                        ),
                    ) )
                ) )
                ->add_fields( 'working_with', 'Working with', array(
                    Field::make( 'separator', 'separator1', __( 'Working with' ) ),
                    Field::make( 'checkbox', 'show_working_with', __( 'Show "Working with" section' ) ),
                ) )
                ->add_fields( 'get_in_touch', 'Get in touch', array(
                    Field::make( 'separator', 'separator1', __( 'Get in touch' ) ),
                    Field::make( 'checkbox', 'show_get_in_touch', __( 'Show "Get in touch" section' ) ),
                ) )
                ->add_fields( 'statistics', 'Statistics', array(
                    Field::make( 'separator', 'separator1', __( 'Statistics' ) ),
                    Field::make( 'complex', 'stats', __( 'Add statistic' ) )
                        ->add_fields( array(
                            Field::make( 'select', 'icon', __( 'Icon' ) )
                            ->set_options( array(
                                'icon_world' => __( 'World' ),
                                'icon_crew' => __( 'Crew' ),
                                'icon_calendar' => __( 'Calendar' ),
                                'icon_thumb' => __( 'Thumb' ),
                                'icon_recycle' => __( 'Recycle' ),
                                'icon_wind' => __( 'Wind' ),
                                'icon_building' => __( 'Building' ),
                            ) ),
                            Field::make( 'text', 'number', __( 'Number' ) ),
                            Field::make( 'text', 'headline', __( 'Headline' ) ),
                            Field::make( 'text', 'subline', __( 'Subline' ) ),
                    ) )
                ) )
                    // ->add_fields( 'text_flex', 'Tekst (2-column)', array(
                //     Field::make( 'text', 'header', __( 'Header' ) ),
                    // Field::make( 'rich_text', 'text_left', 'Text left' ),
                //     Field::make( 'complex', 'links_left', __( 'Add links' ) )
                //         ->add_fields( array(
                //             Field::make( 'text', 'button_text', __( 'Button text' ) ),
                //             Field::make( 'select', 'button_color', __( 'Button color' ) )
                //                 ->set_options( array(
                //                     'pink' => __( 'Pink' ),
                //                     'black' => __( 'Black' ),
                //                     'white' => __( 'White' ),
                //                 ) ),
                //             Field::make( 'association', 'links', __( 'Select page for button link (custom button link must be left empty)' ))
                //                 ->set_types( array(
                //                     array(
                //                         'type' => 'post',
                //                         'taxonomy' => 'page',
                //                     ),
                //                 ) ),
                //             Field::make( 'text', 'custom_link', __( 'Custom button link' ) ),
                //         )),

                    // Field::make( 'rich_text', 'text_right', 'Text right' ),
                //     Field::make( 'complex', 'links_right', __( 'Add links' ) )
                //         ->add_fields( array(
                //             Field::make( 'text', 'button_text', __( 'Button text' ) ),
                //             Field::make( 'select', 'button_color', __( 'Button color' ) )
                //                 ->set_options( array(
                //                     'pink' => __( 'Pink' ),
                //                     'black' => __( 'Black' ),
                //                     'white' => __( 'White' ),
                //                 ) ),
                //             Field::make( 'association', 'links', __( 'Select page for button link (custom button link must be left empty)' ))
                //                 ->set_types( array(
                //                     array(
                //                         'type' => 'post',
                //                         'taxonomy' => 'page',
                //                     ),
                //                 ) ),
                //             Field::make( 'text', 'custom_link', __( 'Custom button link' ) ),
                //         )),

                //     Field::make( 'select', 'background_color', __( 'Background color' ) )
                //         ->set_options( array(
                //             'white' => __( 'White' ),
                //             'pink' => __( 'Pink' ),
                //         ) ),
                //     Field::make( 'select', 'stretch', __( 'Left or right stretch' ) )
                //         ->set_options( array(
                //             'equal' => __( 'Equal width columns' ),
                //             'left' => __( 'Left column wider' ),
                //             'right' => __( 'Right column wider' ),
                //         ) ),
                // ) )
                // ->add_fields( 'text_grid', 'Tekst (grid)', array(
                //     Field::make( 'complex', 'crb_media_item' )
                //         ->add_fields( 'text', array(
                //             Field::make( 'rich_text', 'text', 'Text' ),
                //             Field::make( 'select', 'cell_color', __( 'Cell color' ) )
                //                 ->set_options( array(
                //                     'white' => __( 'White' ),
                //                     'pink' => __( 'Pink' ),
                //                     'grey' => __( 'Grey' ),
                //                     'black' => __( 'Black' ),
                //                 ) ),
                //         ) )
                //         ->add_fields( 'afbeelding', array(
                //             Field::make( 'image', 'image', 'Afbeelding' ),
                //         ) )
                // ) )
                // ->add_fields( 'text_green', 'Tekst (Groene achtergrond)', array(
                //     Field::make( 'rich_text', 'text', 'Text' ),
                // ) )
                // ->add_fields( 'text_gold', 'Tekst (Gouden achtergrond)', array(
                //     Field::make( 'rich_text', 'text', 'Text' ),
                // ) )
                // ->add_fields( 'images', 'Afbeeldingen', array(
                //     Field::make( 'image', 'image1', 'Afbeelding 1' )->set_value_type( 'url' ),
                //     Field::make( 'image', 'image2', 'Afbeelding 2' )->set_value_type( 'url' ),
                //     Field::make( 'image', 'image3', 'Afbeelding 3' )->set_value_type( 'url' ),
                // ) )
                // ->add_fields( 'info_icons', 'Info icons', array(
                //     Field::make( 'complex', 'info_icons', 'Info icons' )
                //         ->add_fields( array(
                //             Field::make( 'image', 'image', 'Afbeelding' ),
                //             Field::make( 'rich_text', 'text', 'Tekst' ),
                //         ))
                // ) )
                // ->add_fields( 'testimonials', 'Testimonials', array(
                //     Field::make( 'complex', 'testimonials', 'Testimonials' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'header', __( 'Header' ) ),
                //             Field::make( 'textarea', 'message', __( 'Message' ) ),
                //             Field::make( 'text', 'name', __( 'Name' ) ),
                //         ))
                // ) )
                // ->add_fields( 'solutions', __( 'Solutions' ) . ' (full-width blue background, icon + text)', array(
                //     Field::make( 'complex', 'icon_boxes', 'Text and an icon from fontawesome.com (use the icon \'name\')' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'icon', __( 'Icon' ) ),
                //             Field::make( 'rich_text', 'text' , __( 'Text' )),
                //         )),
                // ))
                // ->add_fields( 'activities', __( 'Activities' ) . ' (blue text fields)', array(
                //     Field::make( 'complex', 'activity_fields', 'Activity Text' )
                //         ->add_fields( array(
                //             Field::make( 'rich_text', 'text' , __( 'Text' )),
                //         )),
                // ))
                // ->add_fields( 'services', __( 'Services' ) . ' (full-width background, icon + text)', array(
                //     Field::make( 'select', 'background', __( 'Choose background' ) )
                //     ->set_options( array(
                //         // '' => __( 'White' ),
                //         // 'blue' => __( 'Blue' ),
                //         'gold' => __( 'Gold' ),
                //         'black' => __( 'Black' ),
                //     ) ),
                //     Field::make( 'complex', 'icon_boxes', 'Text and an icon from fontawesome.com (use the icon \'name\') OR icon from an image-file' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'icon', __( 'Icon' ) ),
                //             Field::make( 'image', 'image', __( 'Image icon' ) ),
                //             Field::make( 'rich_text', 'text' , __( 'Text' )),
                //         )),
                // ))
                // ->add_fields( 'featured_products', __( 'Featured products' ), array(
                //     Field::make( 'association', 'crb_association', 'Select shop category')
                //     ->set_types( array(
                //         array(
                //             'type' => 'term',
                //             'taxonomy' => 'product_cat',
                //         ),
                //     ) )
                // ))
                // ->add_fields( 'reserve_form', 'Reserveer formulier', array(
                    // Field::make( 'checkbox', 'show_reserve_form', 'Reserveer formulier weergeven' ),
                // ) )
                // ->add_fields( 'cta_afspraak_maken', 'Afspraak maken button', array(
                //     Field::make( 'checkbox', 'show_afspraak_maken', 'Afspraak maken button weergeven' ),
                // ) )
                // ->add_fields( 'media_picture_gallery', 'Media gallery', array(
                //     Field::make( 'media_gallery', 'crb_media_gallery', __( 'Media Gallery' ) )
                //         ->set_type( array( 'image' ) )->set_duplicates_allowed( false )
                // ) )
                // ->add_fields( 'information_blocks_holder', 'Informatie blokken', array(
                //     Field::make( 'complex', 'information_blocks', 'Informatie blokken' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'title', __( 'Title' ) ),
                //             Field::make( 'textarea', 'text', __( 'Text' ) ),
                //             Field::make( 'image', 'image', __( 'Image' ) ),
                //             Field::make( 'association', 'crb_association', __( 'Select page for link' ))
                //             ->set_types( array(
                //                 array(
                //                     'type' => 'post',
                //                     'taxonomy' => 'page',
                //                 ),
                //             ) )
                //          )),
                // ) )
                // ->add_fields( 'people_holder', 'Persoon blokken', array(
                //     Field::make( 'complex', 'people_blocks', 'Persoon blokken' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'name', __( 'Name' ) ),
                //             Field::make( 'text', 'role', __( 'Role' ) ),
                //             Field::make( 'text', 'email', __( 'E-mail' ) ),
                //             Field::make( 'text', 'phone', __( 'Phone' ) ),
                //             Field::make( 'image', 'image', __( 'Image' ) ),
                //             // Field::make( 'rich_text', 'text' , __( 'Text' )),
                //         )),
                // ) )
                // ->add_fields( 'colleagues', __( 'People' ), array(
                //     Field::make( 'association', 'colleague_associations', __( 'Select colleagues' ))
                //     ->set_types( array(
                //         array(
                //             'type' => 'post',
                //             'post_type' => 'staff',
                //         ),
                //     ) )
                // ) )
                // ->add_fields( 'joboffers', __( 'Job offers' ), array(
                //     Field::make( 'association', 'job_offer_associations3', __( 'Select job offers' ))
                //     ->set_types( array(
                //         array(
                //             'type' => 'post',
                //             'post_type' => 'job_offer',
                //         ),
                //     ) )
                // ) )
                // ->add_fields( 'advantages_and_testimonials', 'Voordelen en klantervaringen', array(
                //     Field::make( 'complex', 'advantages', 'Onze voordelen' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'icon', __( 'Icon' ) ),
                //             Field::make( 'text', 'title', __( 'Title' ) ),
                //             Field::make( 'rich_text', 'message', __( 'Message' ) ),
                //         )),
                //     Field::make( 'complex', 'testimonials', 'Klantervaringen' )
                //         ->add_fields( array(
                //             Field::make( 'text', 'name', __( 'Name' ) ),
                //             Field::make( 'text', 'item', __( 'Item bought' ) ),
                //             Field::make( 'rich_text', 'text', __( 'Text' ) ),
                //             Field::make( 'image', 'image', __( 'Image' ) ),
                //         )),
                // ) )
                
                // ->add_fields( 'file_list', 'Downloads', array(
                //     Field::make( 'complex', 'files', 'Downloads' )
                //     ->add_fields('1111', array(
                //         Field::make( 'file', 'file', 'Bestand' ),
                //         Field::make( 'text', 'name', 'Titel' ),
                //     ) )
                //     ->add_fields('2222', array(
                //         Field::make( 'file', 'file2', 'Bestand2' ),
                //         Field::make( 'text', 'name2', 'Titel2' ),
                //     ) )
                // ) )






                // ->add_fields( '1column', 'Content', array(
                //     Field::make( 'complex', 'fullwidth', 'Content' )
                //         ->add_fields('tekst', array(
                //             Field::make( 'rich_text', 'text', 'Tekst' ),
                //         ) )
                //         ->add_fields('afbeelding', array(
                //             Field::make( 'image', 'image', 'Afbeelding' ),
                //         ) )
                //         ->add_fields('bestand', array(
                //             Field::make( 'file', 'file', 'Bestand' ),
                //             Field::make( 'text', 'title', 'Titel' ),
                //         ) )
                //         ->add_fields('nieuws-items', array(
                //             Field::make( 'association', 'news_associations', __( 'Select news items' ))
                //             ->set_types( array(
                //                 array(
                //                     'type' => 'post',
                //                     'post_type' => 'news',
                //                 ),
                //             ) )
                //         ) ),
                // ) )

                // ->add_fields( '2column', 'Content (2 kolommen)', array(
                //     Field::make( 'complex', 'left', 'Linker kolom' )
                //         ->add_fields('tekst', array(
                //             Field::make( 'rich_text', 'text', 'Tekst' ),
                //         ) )
                //         ->add_fields('afbeelding', array(
                //             Field::make( 'image', 'image', 'Afbeelding' ),
                //         ) )
                //         ->add_fields('bestand', array(
                //             Field::make( 'file', 'file', 'Bestand' ),
                //             Field::make( 'text', 'title', 'Titel' ),
                //         ) )
                //         ->add_fields('nieuws-items', array(
                //             Field::make( 'association', 'news_associations', __( 'Select news items' ))
                //             ->set_types( array(
                //                 array(
                //                     'type' => 'post',
                //                     'post_type' => 'news',
                //                 ),
                //             ) )
                //         ) ),
                //     Field::make( 'complex', 'right', 'Rechter kolom' )
                //         ->add_fields('tekst', array(
                //             Field::make( 'rich_text', 'text', 'Tekst' ),
                //         ) )
                //         ->add_fields('afbeelding', array(
                //             Field::make( 'image', 'image', 'Afbeelding' ),
                //         ) )
                //         ->add_fields('bestand', array(
                //             Field::make( 'file', 'file', 'Bestand' ),
                //             Field::make( 'text', 'title', 'Titel' ),
                //         ) )
                //         ->add_fields('nieuws-items', array(
                //             Field::make( 'association', 'news_associations', __( 'Select news items' ))
                //             ->set_types( array(
                //                 array(
                //                     'type' => 'post',
                //                     'post_type' => 'news',
                //                 ),
                //             ) )
                //         ) )
                // ) )





                // // Third group will be a list of manually selected posts
                // // used as a simple curated "Related posts" listing
                // ->add_fields( 'related_posts', 'Related Posts', array(
                //     Field::make( 'association', 'posts', 'Posts' )
                //         ->set_types( array(
                //             array(
                //                 'type' => 'post',
                //                 'post_type' => 'post',
                //             ),
                //         ) ),
                // ) ),
                ) );

    // Container::make( 'post_meta', __( 'Page options' ) )
    //     ->where( 'post_type', '=', 'page' )
    //     // ->where( 'post_template', '=', 'template-section-based.php' )
    //     ->add_fields( array(Field::make( 'text', 'crb_alt_url', __( 'Alternative URL' ))) );
    Container::make( 'post_meta', __( 'Information' ) )
        ->where( 'post_type', '=', 'news' )
        ->add_fields(array(
            // Field::make( 'text', 'title', __( 'Title' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'textarea', 'card_text', __( 'Card text' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'rich_text', 'text', __( 'Text' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'image', 'small_image', __( 'Card image' ) )->set_visible_in_rest_api($visible = true),
            Field::make( 'image', 'large_image', __( 'Hero image' ) )->set_visible_in_rest_api($visible = true),
            )
        );
        Container::make( 'post_meta', __( 'Information' ) )
        ->where( 'post_type', '=', 'office' )
        ->add_fields(array(
            Field::make( 'text', 'country', __( 'Country' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'phone', __( 'Phone number' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'email', __( 'E-mail address' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'address1', __( 'Address line 1' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'address2', __( 'Address line 2' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'address3', __( 'Address line 3' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'address4', __( 'Address line 4' ))->set_visible_in_rest_api($visible = true),
            )
        );
        Container::make( 'post_meta', __( 'Information' ) )
        ->where( 'post_type', '=', 'professional' )
        ->add_fields(array(
            // Field::make( 'text', 'name', __( 'Name' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'function', __( 'Function' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'image', 'image', __( 'Image' ) )->set_visible_in_rest_api($visible = true),
            )
        );
    Container::make( 'post_meta', __( 'Information' ) )
        ->where( 'post_type', '=', 'vessel' )
        ->add_fields(array(
            Field::make( 'image', 'small_image', __( 'Card image' ) )->set_visible_in_rest_api($visible = true),
            Field::make( 'image', 'large_image', __( 'Hero image' ) )->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'type_text', __( 'Type' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'class', __( 'Class' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'flag', __( 'Flag' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'built', __( 'Built' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'rebuilt', __( 'Rebuilt' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'call-sign', __( 'Call Sign' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'length', __( 'Length' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'breadth', __( 'Breadth' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'draft', __( 'Draft' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'depth', __( 'Depth' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'gt', __( 'GT' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'nt', __( 'NT' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'bollard-pull', __( 'Bollard Pull' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'max-speed-fuel-consumption', __( 'Max Speed + Fuel Consumption' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'cruise-economic-speed-fuel-consumption', __( 'Cruise/Economic Speed + Fuel Consumption' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'standby-fuel-consumption', __( 'Standby Fuel Consumption' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'main-engine', __( 'Main Engine' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'gearbox', __( 'Gearbox' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'propellor-shafts', __( 'Propellor & shafts' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'auxiliary-engines', __( 'Auxiliary Engines' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'harbor-generator', __( 'Harbor generator' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'azimuth-thruster', __( 'Azimuth Thruster' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'sewage-plant', __( 'Sewage plant' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'engine-room-fire-protection', __( 'Engine room fire protection' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'bilge-water-separator', __( 'Bilge water separator' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'fuel-oil-separator', __( 'Fuel oil separator' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'electrical-installation', __( 'Electrical installation' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'total-fresh-water-tank', __( 'Total Fresh Water Tank' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'total-ballast-water-tank', __( 'Total Ballast Water Tank' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'total-fuel-tank', __( 'Total Fuel Tank' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'deck-area', __( 'Deck Area' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'deckcrane-ps', __( 'Deckcrane PS' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'safe-working-load', __( 'Safe Working Load' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'steel-wire-1', __( 'Steel Wire' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'davit-sb', __( 'Davit SB' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'working-load-limit', __( 'Working Load Limit' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'steel-wire-2', __( 'Steel Wire' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'fast-rescue-craft', __( 'Fast Rescue Craft' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'compass', __( 'Compass' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'radar', __( 'Radar' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'gmdss', __( 'GMDSS' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'epirb', __( 'EPIRB' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'sart', __( 'SART' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'ais', __( 'AIS' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'lrit', __( 'LRIT' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'text', 'total-accommodation', __( 'Total Accommodation (Berths)' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'cabins', __( 'Cabins' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'single-cabins', __( 'Single Cabins' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'double-cabins', __( 'Double Cabins' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'three-bed-cabins', __( 'Three Bed Cabins' ))->set_visible_in_rest_api($visible = true),
            Field::make( 'text', 'six-bed-cabins', __( 'Six Bed Cabins' ))->set_visible_in_rest_api($visible = true),

            Field::make( 'file', 'pdf-sheet', __( 'PDF Sheet' ) )->set_visible_in_rest_api($visible = true),

            // Field::make( 'text', 'function', __( 'Function' ))->set_visible_in_rest_api($visible = true),
            // Field::make( 'image', 'image', __( 'Image' ) )->set_visible_in_rest_api($visible = true),
            )
        );
    // Container::make( 'post_meta', __( 'Information' ) )
    //     ->where( 'post_type', '=', 'job_offer' )
    //     // ->where( 'post_template', '=', 'template-section-based.php' )
    //     ->add_fields(array(
    //             Field::make( 'textarea', 'intro', __( 'Introduction text. Used in overview.' ))->set_visible_in_rest_api($visible = true),
    //             Field::make( 'rich_text', 'text', __( 'Text' ))->set_visible_in_rest_api($visible = true),
    //             // Field::make( 'text', 'board_email', __( 'E-mail' ))->set_visible_in_rest_api($visible = true),
    //             // Field::make( 'text', 'board_phone', __( 'Phone' ))->set_visible_in_rest_api($visible = true),
    //             Field::make( 'image', 'image', __( 'Image' ) )->set_visible_in_rest_api($visible = true),
    //         )
    //     );
    // Container::make( 'post_meta', __( 'Information' ) )
    //     ->where( 'post_type', '=', 'interview' )
    //     ->add_fields(array(
    //             Field::make( 'textarea', 'intro', __( 'Introduction text. Used in overview.' ))->set_visible_in_rest_api($visible = true),
    //             Field::make( 'rich_text', 'text', __( 'Text' ))->set_visible_in_rest_api($visible = true),
    //             Field::make( 'image', 'image', __( 'Image' ) )->set_visible_in_rest_api($visible = true),
    //         )
    //     );

    // Container::make('term_meta', 'Woo Category Options')
    //     ->where('term_taxonomy', '=', 'product_cat')
    //     // ->add_tab( __( 'Profile' ), array(
    //     ->add_fields( array(
    //         Field::make( 'radio', 'crb_catalogus_type', __( 'Choose catalogus type' ) )->set_visible_in_rest_api($visible = true)
    //         ->set_options( array(
    //             'shop' => 'Shop',
    //             'list' => 'List',
    //         ) ),
    //         Field::make( 'rich_text', 'crb_category_text', __( 'Text' ) )->set_visible_in_rest_api($visible = true),
    //     ));

    // Container::make('post_meta', 'Product Options')
    //     ->where('post_type', '=', 'product')
    //     ->add_fields( array(
    //         // Field::make( 'rich_text', 'crb_extra_product_text', __( 'Product text for testing' ) )->set_visible_in_rest_api($visible = true),
    //         Field::make('checkbox', 'is_featured', __('Is featured product?'))->set_option_value('yes')->set_visible_in_rest_api($visible = true),
    //         Field::make('text', 'min_pk', __( 'Minimum pk' ))->set_visible_in_rest_api($visible = true),
    //         Field::make('text', 'max_pk', __( 'Maximum pk' ))->set_visible_in_rest_api($visible = true),
    //     ));

    $fieldsToAdd = array();
    foreach($args['websiteOptions'] as $opt) {
        if($opt[0] == 'media_gallery') {
            $fieldsToAdd[] = Field::make($opt[0], $opt[1], __($opt[2]))->set_type( array( 'image' ) )->set_duplicates_allowed( false );
            // $fieldsToAdd[] = Field::make($opt[0], $opt[1], __($opt[2]));
        } else {
            $fieldsToAdd[] = Field::make($opt[0], $opt[1], __($opt[2]));
        }
    }
    Container::make('theme_options', 'Website Options')->add_fields($fieldsToAdd );

    // Container::make('theme_options', 'Reserveringen')->add_fields(array(
        // Field::make( 'html', 'file_download')->set_html('<p><a href="/event_files/aanmeldingen.csv">Download Excel bestand</a></p>')
        // )
    // );
}
?>