<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles(){
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
}

function childhood_scripts(){
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );


//скрываем визуальный редактор для шаблона главной страницы start
function wph_hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if(!isset($post_id)) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    if($post_id == 2){ 
        remove_post_type_support('page', 'editor', 'author', 'comments', 'page-attributes');
    }
}
add_action('admin_init', 'wph_hide_editor');
//скрываем визуальный редактор для шаблона главной страницы end

?>