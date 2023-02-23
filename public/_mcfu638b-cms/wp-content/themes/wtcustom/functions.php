<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function my_theme_load_theme_textdomain() {
    load_theme_textdomain( 'wt-custom-lang', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_load_theme_textdomain' );


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Something to translate', 'wt-custom-lang' ) . ' * ' . __( 'tl2' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}
?>
