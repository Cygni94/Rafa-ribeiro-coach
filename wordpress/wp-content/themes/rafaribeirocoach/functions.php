<?php
//aumentar o limite de upload de cada arquivo:
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'rafaribeirocoach' ),
) );

wp_nav_menu( array(
    'theme_location'	=> 'primary',
    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
	'container'			=> 'div',
	'container_class'	=> 'collapse navbar-collapse',
	'container_id'		=> 'bs-example-navbar-collapse-1',
	'menu_class'		=> 'navbar-nav mr-auto',
    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    'walker'			=> new WP_Bootstrap_Navwalker()
) );

//add_action('init', 'avf_remove_media_element', 10);
function avf_remove_media_element()
{	
	wp_deregister_script('wp-mediaelement');
	wp_deregister_style('wp-mediaelement');
}

function post_type_depoimentos() {

    $nomeSingular = 'Depoimento';
    $nomePlural = 'Depoimentos';
    $description = 'Depoimentos de coachees';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $description,
        'public' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => $supports
    );
    
    register_post_type( 'depoimento', $args);    
}

add_action('init', 'post_type_depoimentos');

function post_type_videos() {

    $nomeSingular = 'Vídeo';
    $nomePlural = 'Vídeos';
    $description = 'Vídeos do Papo Momento da Virada';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $description,
        'public' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => $supports
    );


    register_post_type( 'video', $args);    
}

add_action('init', 'post_type_videos');

function post_type_audios() {

    $nomeSingular = 'Áudio';
    $nomePlural = 'Áudios';
    $description = 'Áudios do Papo Momento da Virada';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $description,
        'public' => true,
        'menu_icon' => 'dashicons-format-audio',
        'supports' => $supports
    );


    register_post_type( 'audio', $args);    
}

add_action('init', 'post_type_audios');

function post_type_eventos() {

    $nomeSingular = 'Evento';
    $nomePlural = 'Eventos';
    $description = 'Eventos';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $description,
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => $supports
    );
    
    register_post_type( 'evento', $args);    
}

add_action('init', 'post_type_eventos');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/assets/js/video.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}