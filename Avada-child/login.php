<?php
// Template Name: Login Page
wp_enqueue_style ( 'smart-form', get_stylesheet_directory_uri () . "/css/smart-forms.css" );
wp_enqueue_style ( 'smart-form-fontawesome', get_stylesheet_directory_uri () . "/css/font-awesome.min.css" );
get_header ();
if(have_posts()) {
	the_post();
	the_content();
}
get_footer(); ?>