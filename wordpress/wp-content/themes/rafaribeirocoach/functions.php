<?php
//aumentar o limite de upload de cada arquivo:
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );

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
        'description' => $descricao,
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
        'description' => $descricao,
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
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-format-audio',
        'supports' => $supports
    );


    register_post_type( 'audio', $args);    
}

add_action('init', 'post_type_audios');

