<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

register_nav_menus(array(

    'primary' => __('Primary Menu', 'rafaribeirocoach'),
    'secondary' => __('Footer Menu', 'rafaribeirocoach'),

));

function special_nav_class($classes, $item)
{

    if (in_array('current-menu-item', $classes)) {

        $classes[] = 'active ';

    }

    return $classes;

}

//aumentar o limite de upload de cada arquivo:

@ini_set('upload_max_size', '64M');

@ini_set('post_max_size', '64M');

@ini_set('max_execution_time', '300');

add_theme_support('post-thumbnails');

//add_action('init', 'avf_remove_media_element', 10);

function avf_remove_media_element()
{

    wp_deregister_script('wp-mediaelement');

    wp_deregister_style('wp-mediaelement');

}

function post_type_depoimentos()
{

    $nomeSingular = 'Depoimento';

    $nomePlural = 'Depoimentos';

    $description = 'Depoimentos de coachees';

    $labels = array(

        'name' => $nomePlural,

        'name_singular' => $nomeSingular,

        'add_new_item' => 'Adicionar novo ' . $nomeSingular,

        'edit_item' => 'Editar ' . $nomeSingular,

    );

    $supports = array(

        'title',

        'editor',

        'thumbnail',

    );

    $args = array(

        'labels' => $labels,

        'description' => $description,

        'public' => true,

        'menu_icon' => 'dashicons-testimonial',

        'supports' => $supports,

    );

    register_post_type('depoimento', $args);

}

add_action('init', 'post_type_depoimentos');

function post_type_videos()
{

    $nomeSingular = 'Vídeo';

    $nomePlural = 'Vídeos';

    $description = 'Vídeos do Papo Momento da Virada';

    $labels = array(

        'name' => $nomePlural,

        'name_singular' => $nomeSingular,

        'add_new_item' => 'Adicionar novo ' . $nomeSingular,

        'edit_item' => 'Editar ' . $nomeSingular,

    );

    $supports = array(

        'title',

        'editor',

        'thumbnail',

    );

    $args = array(

        'labels' => $labels,

        'description' => $description,

        'public' => true,

        'menu_icon' => 'dashicons-video-alt3',

        'supports' => $supports,

        'taxonomies' => array('category'),

    );

    register_post_type('video', $args);

}

add_action('init', 'post_type_videos');

function post_type_audios()
{

    $nomeSingular = 'Áudio';

    $nomePlural = 'Áudios';

    $description = 'Áudios do Papo Momento da Virada';

    $labels = array(

        'name' => $nomePlural,

        'name_singular' => $nomeSingular,

        'add_new_item' => 'Adicionar novo ' . $nomeSingular,

        'edit_item' => 'Editar ' . $nomeSingular,

    );

    $supports = array(

        'title',

        'editor',

        'thumbnail',

    );

    $args = array(

        'labels' => $labels,

        'description' => $description,

        'public' => true,

        'menu_icon' => 'dashicons-format-audio',

        'supports' => $supports,

        'taxonomies' => array('category'),

    );

    register_post_type('audio', $args);

}

add_action('init', 'post_type_audios');

function theme_js()
{

    global $wp_scripts;

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'theme_js');

// add tag support to pages
function tags_support_all()
{
    register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag')) {
        $wp_query->set('post_type', 'any');
    }

}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

//INICIO SEÇÃO TREINAMENTOS
function rafaribeiro_treinamentos_customizer($wp_customize)
{

    //treinamento section panel
    $wp_customize->add_panel('rafaribeiro_treinamento_options', array(
        'priority' => 200,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Treinamentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('treinamento_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 50,
    ));

    //Hide Index treinamento Section
    $wp_customize->add_setting(
        'treinamento_options[treinamento_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'treinamento_options[treinamento_title]',
        array(
            'default' => __('Conheça nossos treinamentos', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_title]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_head',
            'type' => 'text',
        )
    );

    $wp_customize->add_control(
        'treinamento_options[treinamento_description]',
        array(
            'label' => __('Description', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_head',
            'type' => 'text',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
        )
    );

    //treinamento section one
    $wp_customize->add_section('treinamento_section_one', array(
        'title' => __('Treinamento 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting(
        'treinamento_options[treinamento_one_title]',
        array(
            'default' => __('Momento da virada', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_one_title]',
        array(
            'label' => __('Nome do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_one',
            'type' => 'text',
        )
    );

    //Second treinamento

    $wp_customize->add_section('treinamento_section_two', array(
        'title' => __('Treinamento 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting(
        'treinamento_options[treinamento_two_title]',
        array(
            'default' => __('Aperte o play', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_two_title]',
        array(
            'label' => __('Nome do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_two',
            'type' => 'text',
        )
    );

    //Third treinamento section
    $wp_customize->add_section('treinamento_section_three', array(
        'title' => __('Treinamento 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_treinamento_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting(
        'treinamento_options[treinamento_three_title]',
        array(
            'default' => __('Mentoria', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'treinamento_options[treinamento_three_title]',
        array(
            'label' => __('Nome do treinamento', 'Rafa Ribeiro Coach'),
            'section' => 'treinamento_section_three',
            'type' => 'text',
        )
    );

    function rafaribeiro_treinamentos_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_treinamentos_customizer');

//INICIO CUSTOMIZER
class Treinamento_Customize
{
    public static function register($wp_customize)
    {
        //1. Define a new section (if desired) to the Theme Customizer
        $wp_customize->add_section('mytheme_options',
            array(
                'title' => __('MyTheme Options', 'Rafa Ribeiro Coach'), //Visible title of section
                'priority' => 35, //Determines what order this appears in
                'capability' => 'edit_theme_options', //Capability needed to tweak
                'section' => 'Treinamentos',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'Rafa Ribeiro Coach'), //Descriptive tooltip
            )
        );

        //2. Register new settings to the WP database...
        $wp_customize->add_setting('treinamento_backgroundcolor-1', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
            array(
                'default' => '#EF4136', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            )
        );

        //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
        $wp_customize->add_control(new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'rafaribeirocoach_treinamento_backgroundcolor-1', //Set a unique ID for the control
            array(
                'label' => __('Cor do Treinamento 1', 'Rafa Ribeiro Coach'), //Admin-visible name of the control
                'settings' => 'treinamento_backgroundcolor-1', //Which setting to load and manipulate (serialized is okay)
                'priority' => 10, //Determines the order this control appears in for the specified section
                'section' => 'treinamento_section_one', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            )
        ));

        //Treinamento 2
        $wp_customize->add_setting('treinamento_backgroundcolor-2', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
            array(
                'default' => '#FFD200', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            )
        );

        //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
        $wp_customize->add_control(new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'rafaribeirocoach_treinamento_backgroundcolor-2', //Set a unique ID for the control
            array(
                'label' => __('Cor do Treinamento 2', 'Rafa Ribeiro Coach'), //Admin-visible name of the control
                'settings' => 'treinamento_backgroundcolor-2', //Which setting to load and manipulate (serialized is okay)
                'priority' => 11, //Determines the order this control appears in for the specified section
                'section' => 'treinamento_section_two', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            )
        ));

        //Treinamento 3
        $wp_customize->add_setting('treinamento_backgroundcolor-3', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
            array(
                'default' => '#01CAFF', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            )
        );

        //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
        $wp_customize->add_control(new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'rafaribeirocoach_treinamento_backgroundcolor-3', //Set a unique ID for the control
            array(
                'label' => __('Cor do Treinamento 3', 'Rafa Ribeiro Coach'), //Admin-visible name of the control
                'settings' => 'treinamento_backgroundcolor-3', //Which setting to load and manipulate (serialized is okay)
                'priority' => 12, //Determines the order this control appears in for the specified section
                'section' => 'treinamento_section_three', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            )
        ));

        //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
        $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
        $wp_customize->get_setting('background_color')->transport = 'postMessage';
    }

    public static function header_output()
    {
        ?>
      <!--Customizer CSS-->
      <style type="text/css">
           <?php self::generate_css('.cursos__item-1', 'background-color', 'treinamento_backgroundcolor-1');?>
           <?php self::generate_css('.cursos__item-2', 'background-color', 'treinamento_backgroundcolor-2');?>
           <?php self::generate_css('.cursos__item-3', 'background-color', 'treinamento_backgroundcolor-3');?>
      </style>
      <!--/Customizer CSS-->
      <?php
    }

    public static function live_preview()
    {
        wp_enqueue_script(
            'mytheme-themecustomizer', // Give the script a unique ID
            get_template_directory_uri() . '/js/theme-customizer.js', // Define the path to the JS file
            array('jquery', 'customize-preview'), // Define dependencies
            '', // Define a version (optional)
            true// Specify whether to put in footer (leave this true)
        );
    }

    public static function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true)
    {
        $return = '';
        $mod = get_theme_mod($mod_name);
        if (!empty($mod)) {
            $return = sprintf('%s { %s:%s; }',
                $selector,
                $style,
                $prefix . $mod . $postfix
            );
            if ($echo) {
                echo $return;
            }
        }
        return $return;
    }
}

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('Treinamento_Customize', 'register'));

// Output custom CSS to live site
add_action('wp_head', array('Treinamento_Customize', 'header_output'));

// Enqueue live preview javascript in Theme Customizer admin screen
add_action('customize_preview_init', array('Treinamento_Customize', 'live_preview'));

function treinamentos_setup_data()
{
    return $treinamentos_options = array(
    //treinamento section settings
        'treinamento_section_enabled' => '',
        'treinamento_title' => __('Conheça nossos treinamentos', 'Rafa Ribeiro Coach'),
        'treinamento_one_title' => __('Momento da Virada', 'Rafa Ribeiro Coach'),
        'treinamento_two_title' => __('Aperte o Play', 'Rafa Ribeiro Coach'),
        'treinamento_three_title' => __('Mentoria', 'Rafa Ribeiro Coach'),
    );
}

//INICIO SEÇÃO DEPOIMENTOS
function rafaribeiro_depoimentos_customizer($wp_customize)
{

    //depoimento section panel
    $wp_customize->add_panel('rafaribeiro_depoimento_options', array(
        'priority' => 200,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Depoimentos', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('depoimento_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 50,
    ));

    //Hide Index depoimento Section
    $wp_customize->add_setting(
        'depoimento_options[depoimento_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'depoimento_options[depoimento_title]',
        array(
            'default' => __('depoimentos', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_title]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_head',
            'type' => 'text',
        )
    );

    //depoimento section one
    $wp_customize->add_section('depoimento_section_one', array(
        'title' => __('Depoimento 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting(
        'depoimento_options[depoimento_one_title]',
        array(
            'default' => __('XANDE BASTOS', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_one_title]',
        array(
            'label' => __('Nome do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_one',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'depoimento_options[depoimento_one_text]',
        array(
            'default' => __('O resultado foi incrível, pois consegui entender as minhas maiores dificuldades e potencializar as minhas qualidades. Hoje sou uma pessoa melhor e com foco na solução.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_one_text]',
        array(
            'label' => __('Texto do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_one',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('depoimento_options[depoimento_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/depoimentos/depoimento_xande_bastos.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'depoimento_options[depoimento_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do depoimento 1', 'Rafa Ribeiro Coach'),
                'section' => 'depoimento_section_one',
                'settings' => 'depoimento_options[depoimento_one_image]',
            )
        )
    );

    //Second depoimento

    $wp_customize->add_section('depoimento_section_two', array(
        'title' => __('Depoimento 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting(
        'depoimento_options[depoimento_two_title]',
        array(
            'default' => __('ÁGATHA TOMMASI', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_two_title]',
        array(
            'label' => __('Nome do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_two',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'depoimento_options[depoimento_two_text]',
        array(
            'default' => __('Foi um processo de autodescoberta. Aprendi quais eram os meus limites e a julgar se devia respeitá-los ou ultrapassá-los. Aprendi a equilibrar minha energia e hierarquizar minhas prioridades.'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_two_text]',
        array(
            'label' => __('Texto do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_two',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('depoimento_options[depoimento_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/depoimentos/depoimento_agatha.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'depoimento_options[depoimento_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do depoimento 2', 'Rafa Ribeiro Coach'),
                'section' => 'depoimento_section_two',
                'settings' => 'depoimento_options[depoimento_two_image]',
            )
        )
    );

    //Third depoimento section
    $wp_customize->add_section('depoimento_section_three', array(
        'title' => __('Depoimento 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_depoimento_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting(
        'depoimento_options[depoimento_three_title]',
        array(
            'default' => __('RAFAEL, DABÁ', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_three_title]',
        array(
            'label' => __('Autor do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_three',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'depoimento_options[depoimento_three_text]',
        array(
            'default' => __('Vou levar para a vida inteira o que aprendi com o coaching. Se eu pudesse teria esse acompanhamento a vida toda!!!', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_depoimentos_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'depoimento_options[depoimento_three_text]',
        array(
            'label' => __('Texto do depoimento', 'Rafa Ribeiro Coach'),
            'section' => 'depoimento_section_three',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting('depoimento_options[depoimento_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/depoimentos/depoimento_rafael.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'depoimento_options[depoimento_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do depoimento 3', 'Rafa Ribeiro Coach'),
                'section' => 'depoimento_section_three',
                'settings' => 'depoimento_options[depoimento_three_image]',
            )
        )
    );

    function rafaribeiro_depoimentos_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_depoimentos_customizer');

function depoimentos_setup_data()
{
    return $depoimentos_options = array(
        //depoimento section settings
        'depoimento_section_enabled' => '',
        'depoimento_title' => __('depoimentos', 'Rafa Ribeiro Coach'),
        'depoimento_one_title' => __('XANDE BASTOS', 'Rafa Ribeiro Coach'),
        'depoimento_one_text' => __('O resultado foi incrível, pois consegui entender as minhas maiores dificuldades e potencializar as minhas qualidades. Hoje sou uma pessoa melhor e com foco na solução.', 'Rafa Ribeiro Coach'),
        'depoimento_one_image' => __('', 'Rafa Ribeiro Coach'),
        'depoimento_two_title' => __('AGATHA TOMMASI', 'Rafa Ribeiro Coach'),
        'depoimento_two_text' => __('Foi um processo de autodescoberta. Aprendi quais eram os meus limites e a julgar se devia respeitá-los ou ultrapassá-los. Aprendi a equilibrar minha energia e hierarquizar minhas prioridades.', 'Rafa Ribeiro Coach'),
        'depoimento_two_image' => __('', 'Rafa Ribeiro Coach'),
        'depoimento_three_title' => __('RAFAEL, DABÁ', 'Rafa Ribeiro Coach'),
        'depoimento_three_text' => __('Vou levar para a vida inteira o que aprendi com o coaching. Se eu pudesse teria esse acompanhamento a vida toda!!!', 'Rafa Ribeiro Coach'),
        'depoimento_three_image' => __('', 'Rafa Ribeiro Coach'),
    );
}

//INICIO SEÇÃO BENEFICIOS
//INICIO Aperte o play - Benefícios
function rafaribeiro_beneficios_customizer($wp_customize)
{

    //beneficio section panel
    $wp_customize->add_panel('rafaribeiro_beneficio_options', array(
        'priority' => 200,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Beneficios', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('beneficio_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 50,
    ));

    //Hide Index beneficio Section
    $wp_customize->add_setting(
        'beneficio_options[beneficio_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_label]',
        array(
            'default' => __('beneficios', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_label]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_section_head',
            'type' => 'text',
        )
    );

    //beneficio section one
    $wp_customize->add_section('beneficio_item_one', array(
        'title' => __('beneficio 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting('beneficio_options[beneficio_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/01---icone-coracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 1', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_one',
                'settings' => 'beneficio_options[beneficio_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'beneficio_options[beneficio_one_label]',
        array(
            'default' => __('você ame e acredite.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_one_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_one',
            'type' => 'text',
        )
    );

    //Second beneficio
    $wp_customize->add_section('beneficio_item_two', array(
        'title' => __('beneficio 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/02---icone-estrela.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 2', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_two',
                'settings' => 'beneficio_options[beneficio_two_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_two_label]',
        array(
            'default' => __('você utilize seus talentos.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_two_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_two',
            'type' => 'text',
        )
    );

    //Third beneficio section
    $wp_customize->add_section('beneficio_item_three', array(
        'title' => __('beneficio 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/03---icone-familia.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 3', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_three',
                'settings' => 'beneficio_options[beneficio_three_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_three_label]',
        array(
            'default' => __('traga mais tempo para você e sua família.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_three_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_three',
            'type' => 'text',
        )
    );
    //Fourth beneficio section
    $wp_customize->add_section('beneficio_item_four', array(
        'title' => __('beneficio 4', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_four_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/04---icone-dinheiro.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_four_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 4', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_four',
                'settings' => 'beneficio_options[beneficio_four_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_four_label]',
        array(
            'default' => __('traga o retorno financeiro merecido.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_four_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_four',
            'type' => 'text',
        )
    );
    //Fifth beneficio section
    $wp_customize->add_section('beneficio_item_five', array(
        'title' => __('beneficio 5', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_five_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/05---icone-personas.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_five_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 5', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_five',
                'settings' => 'beneficio_options[beneficio_five_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_five_label]',
        array(
            'default' => __('transforme a vida de milhares de pessoas.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_five_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_five',
            'type' => 'text',
        )
    );
    //Sixth beneficio section
    $wp_customize->add_section('beneficio_item_six', array(
        'title' => __('beneficio 6', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_beneficio_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('beneficio_options[beneficio_six_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/06---icone-borboleta.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'beneficio_options[beneficio_six_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do beneficio 6', 'Rafa Ribeiro Coach'),
                'section' => 'beneficio_item_six',
                'settings' => 'beneficio_options[beneficio_six_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'beneficio_options[beneficio_six_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_beneficios_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'beneficio_options[beneficio_six_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'beneficio_item_six',
            'type' => 'text',
        )
    );

    function rafaribeiro_beneficios_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_beneficios_customizer');

function beneficios_setup_data()
{
    return $beneficios_options = array(
        'beneficio_section_enabled' => '',
        'beneficio_label' => __('beneficios', 'Rafa Ribeiro Coach'),
        'beneficio_one_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_one_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_two_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_two_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_three_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_three_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_four_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_four_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_five_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_five_image' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_six_label' => __('', 'Rafa Ribeiro Coach'),
        'beneficio_six_image' => __('', 'Rafa Ribeiro Coach'),
    );
}
//INICIO SEÇÃO FASES
//INICIO Aperte o play - Fases
function rafaribeiro_fases_customizer($wp_customize)
{

    //fase section panel
    $wp_customize->add_panel('rafaribeiro_fase_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Fases', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('fase_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 50,
    ));

    //Hide Index fase Section
    $wp_customize->add_setting(
        'fase_options[fase_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'fase_section_head',
            'type' => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_label]',
        array(
            'default' => __('fases', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_label]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'fase_section_head',
            'type' => 'text',
        )
    );

    //fase section one
    $wp_customize->add_section('fase_item_one', array(
        'title' => __('fase 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting('fase_options[fase_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/07---icone-play.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 1', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_one',
                'settings' => 'fase_options[fase_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'fase_options[fase_one_label]',
        array(
            'default' => __('você ame e acredite.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_one_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_one',
            'type' => 'text',
        )
    );

    //Second fase
    $wp_customize->add_section('fase_item_two', array(
        'title' => __('fase 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 200,
    ));

    $wp_customize->add_setting('fase_options[fase_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/08---icone-coracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 2', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_two',
                'settings' => 'fase_options[fase_two_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_two_label]',
        array(
            'default' => __('você utilize seus talentos.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_two_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_two',
            'type' => 'text',
        )
    );

    //Third fase section
    $wp_customize->add_section('fase_item_three', array(
        'title' => __('fase 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/09---icone-visao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 3', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_three',
                'settings' => 'fase_options[fase_three_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_three_label]',
        array(
            'default' => __('traga mais tempo para você e sua família.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_three_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_three',
            'type' => 'text',
        )
    );
    //Fourth fase section
    $wp_customize->add_section('fase_item_four', array(
        'title' => __('fase 4', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_four_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/10---icone-maos.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_four_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 4', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_four',
                'settings' => 'fase_options[fase_four_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_four_label]',
        array(
            'default' => __('traga o retorno financeiro merecido.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_four_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_four',
            'type' => 'text',
        )
    );
    //Fifth fase section
    $wp_customize->add_section('fase_item_five', array(
        'title' => __('fase 5', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_five_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/11---icone-aquarela.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_five_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 5', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_five',
                'settings' => 'fase_options[fase_five_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_five_label]',
        array(
            'default' => __('transforme a vida de milhares de pessoas.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_five_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_five',
            'type' => 'text',
        )
    );
    //Sixth fase section
    $wp_customize->add_section('fase_item_six', array(
        'title' => __('fase 6', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_six_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/12---icone-anotacao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_six_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 6', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_six',
                'settings' => 'fase_options[fase_six_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_six_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_six_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_six',
            'type' => 'text',
        )
    );

    //seventh fase section
    $wp_customize->add_section('fase_item_seven', array(
        'title' => __('fase 7', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_seven_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/13---icone-retorno.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_seven_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase 7', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_seven',
                'settings' => 'fase_options[fase_seven_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_seven_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_seven_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_seven',
            'type' => 'text',
        )
    );

    //eighth fase section
    $wp_customize->add_section('fase_item_eight', array(
        'title' => __('fase final', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_fase_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('fase_options[fase_eight_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/14---icone-celebracao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fase_options[fase_eight_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem da fase final', 'Rafa Ribeiro Coach'),
                'section' => 'fase_item_eight',
                'settings' => 'fase_options[fase_eight_image]',
            )
        )
    );

    $wp_customize->add_setting(
        'fase_options[fase_eight_label]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_fases_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'fase_options[fase_eight_label]',
        array(
            'label' => __('Legenda', 'Rafa Ribeiro Coach'),
            'section' => 'fase_item_eight',
            'type' => 'text',
        )
    );

    function rafaribeiro_fases_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_fases_customizer');

function fases_setup_data()
{
    return $fases_options = array(
        //fase section settings
        'fase_section_enabled' => '',
        'fase_label' => __('fases', 'Rafa Ribeiro Coach'),
        'fase_one_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_one_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_two_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_two_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_three_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_three_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_four_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_four_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_five_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_five_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_six_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_six_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_seven_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_seven_image' => __('', 'Rafa Ribeiro Coach'),
        'fase_eight_label' => __('', 'Rafa Ribeiro Coach'),
        'fase_eight_image' => __('', 'Rafa Ribeiro Coach'),
    );
}
//INICIO SEÇÃO BÔNUS
//INICIO Aperte o play - Bônus
function rafaribeiro_bonus_customizer($wp_customize)
{
    //bonus section panel
    $wp_customize->add_panel('rafaribeiro_bonus_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Bônus', 'Rafa Ribeiro Coach'),
    ));
    $wp_customize->add_section('bonus_section_head', array(
        'title' => __('Título da seção', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 50,
    ));
    //Hide Index bonus Section
    $wp_customize->add_setting(
        'bonus_options[bonus_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_section_head',
            'type' => 'checkbox',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_title]',
        array(
            'default' => __('bonus', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_title]',
        array(
            'label' => __('Title', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_section_head',
            'type' => 'text',
        )
    );
    //bonus section one
    $wp_customize->add_section('bonus_item_one', array(
        'title' => __('bonus 1', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting('bonus_options[bonus_one_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/15---icone-computador.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_one_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 1', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_one',
                'settings' => 'bonus_options[bonus_one_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_one_title]',
        array(
            'default' => __('SITE PROFISSIONAL', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_one_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_one',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_one_subtitle]',
        array(
            'default' => __('como construir seu site em apenas 01 hora', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_one_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_one',
            'type' => 'textarea',
        )
    );
    //Second bonus
    $wp_customize->add_section('bonus_item_two', array(
        'title' => __('bonus 2', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 200,
    ));
    $wp_customize->add_setting('bonus_options[bonus_two_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/16---icone-dinheiro.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_two_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 2', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_two',
                'settings' => 'bonus_options[bonus_two_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_two_title]',
        array(
            'default' => __('CONTROLE FINANCEIRO', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_two_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_two',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_two_subtitle]',
        array(
            'default' => __('receba planilhas prontas para controlar suas finanças de forma prática', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_two_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_two',
            'type' => 'textarea',
        )
    );
    //Third bonus section
    $wp_customize->add_section('bonus_item_three', array(
        'title' => __('bonus 3', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_three_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/17---icone-pincel.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_three_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 3', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_three',
                'settings' => 'bonus_options[bonus_three_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_three_title]',
        array(
            'default' => __('IDENTIDADE VISUAL', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_three_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_three',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_three_subtitle]',
        array(
            'default' => __('crie suas artes de forma gratuita e fácil', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_three_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_three',
            'type' => 'textarea',
        )
    );
    //Fourth bonus section
    $wp_customize->add_section('bonus_item_four', array(
        'title' => __('bonus 4', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_four_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/18---icone-videos.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_four_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 4', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_four',
                'settings' => 'bonus_options[bonus_four_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_four_title]',
        array(
            'default' => __('VÍDEOS DE QUALIDADE', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_four_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_four',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_four_subtitle]',
        array(
            'default' => __('aprenda a editar vídeos para suas redes sociais', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_four_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_four',
            'type' => 'textarea',
        )
    );
    //Fifth bonus section
    $wp_customize->add_section('bonus_item_five', array(
        'title' => __('bonus 5', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('bonus_options[bonus_five_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/19---icone-anotacao.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_five_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 5', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_five',
                'settings' => 'bonus_options[bonus_five_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_five_title]',
        array(
            'default' => __('TAREFAS EM DIA', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_five_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_five',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_five_subtitle]',
        array(
            'default' => __('aprenda como gerenciar suas tarefas e aumentar a sua produtividade', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_five_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_five',
            'type' => 'textarea',
        )
    );
    //Sixth bonus section
    $wp_customize->add_section('bonus_item_six', array(
        'title' => __('bonus 6', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_six_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/20---icone-calculadora.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_six_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 6', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_six',
                'settings' => 'bonus_options[bonus_six_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_six_title]',
        array(
            'default' => __('DESMISTIFICANDO A CONTABILIDADE', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_six_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_six',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_six_subtitle]',
        array(
            'default' => __('o que você precisa saber nessa fase inicial', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_six_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_six',
            'type' => 'textarea',
        )
    );
    //seventh bonus section
    $wp_customize->add_section('bonus_item_seven', array(
        'title' => __('bonus 7', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));

    $wp_customize->add_setting('bonus_options[bonus_seven_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/21---icone-livro.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_seven_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 7', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_seven',
                'settings' => 'bonus_options[bonus_seven_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_seven_title]',
        array(
            'default' => __('BIBLIOGRAFIA DO CURSO', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_seven_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_seven',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_seven_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_seven_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_seven',
            'type' => 'textarea',
        )
    );
    //eighth bonus section
    $wp_customize->add_section('bonus_item_eight', array(
        'title' => __('bonus 8', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_eight_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/22---icone-mapa.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_eight_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 8', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_eight',
                'settings' => 'bonus_options[bonus_eight_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_eight_title]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_eight_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_eight',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_eight_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_eight_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_eight',
            'type' => 'textarea',
        )
    );
    //nineth bonus section
    $wp_customize->add_section('bonus_item_nine', array(
        'title' => __('bonus 9', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_nine_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/23---icone-som.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_nine_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 9', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_nine',
                'settings' => 'bonus_options[bonus_nine_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_nine_title]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_nine_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_nine',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_nine_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_nine_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_nine',
            'type' => 'textarea',
        )
    );
    //tenth bonus section
    $wp_customize->add_section('bonus_item_ten', array(
        'title' => __('bonus 10', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_bonus_options',
        'priority' => 300,
    ));
    $wp_customize->add_setting('bonus_options[bonus_ten_image]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/24---icone-trofeu.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bonus_options[bonus_ten_image]',
            array(
                'type' => 'upload',
                'label' => __('Imagem do bonus 10', 'Rafa Ribeiro Coach'),
                'section' => 'bonus_item_ten',
                'settings' => 'bonus_options[bonus_ten_image]',
            )
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_ten_title]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_ten_title]',
        array(
            'label' => __('Título', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_ten',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'bonus_options[bonus_ten_subtitle]',
        array(
            'default' => __('traga liberdade e autonomia.', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_bonus_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'bonus_options[bonus_ten_subtitle]',
        array(
            'label' => __('Subtítulo', 'Rafa Ribeiro Coach'),
            'section' => 'bonus_item_ten',
            'type' => 'textarea',
        )
    );

    function rafaribeiro_bonus_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_bonus_customizer');

function bonus_setup_data()
{
    return $bonus_options = array(
        //bonus section settings
        'bonus_section_enabled' => '',
        'bonus_title' => __('bonus', 'Rafa Ribeiro Coach'),
        'bonus_one_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_one_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_one_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_two_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_two_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_two_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_three_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_three_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_three_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_four_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_four_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_four_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_five_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_five_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_five_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_six_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_six_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_six_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_seven_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_seven_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_seven_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_eight_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_eight_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_eight_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_nine_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_nine_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_nine_image' => __('', 'Rafa Ribeiro Coach'),
        'bonus_ten_title' => __('', 'Rafa Ribeiro Coach'),
        'bonus_ten_subtitle' => __('', 'Rafa Ribeiro Coach'),
        'bonus_ten_image' => __('', 'Rafa Ribeiro Coach'),
    );
}


//INICIO Aperte o play - Datas
function rafaribeiro_datasAperteOPlay_customizer($wp_customize)
{

    //datas section panel
    $wp_customize->add_panel('rafaribeiro_datasAperteOPlay_options', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'title' => __('Seção Datas', 'Rafa Ribeiro Coach'),
    ));

    $wp_customize->add_section('datas_dos_treinamentos_aperteOPlay', array(
        'title' => __('Datas dos treinamentos', 'Rafa Ribeiro Coach'),
        'panel' => 'rafaribeiro_datasAperteOPlay_options',
        'priority' => 50,
    ));

    //Hide Index datas Section
    $wp_customize->add_setting(
        'datas_options[datas_section_enabled]',
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'datas_options[datas_section_enabled]',
        array(
            'label' => __('Ocultar esta seção', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'checkbox',
        )
    );
    $wp_customize->add_setting('datas_options[icone_datas_aperteOPlay]',
        array(
            'default' => get_template_directory_uri() . '/assets/img/icon/aperte-o-play/25---icone-calendario.png',
            'type' => 'option', 'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'datas_options[icone_datas_aperteOPlay]',
            array(
                'type' => 'upload',
                'label' => __('Ícone', 'Rafa Ribeiro Coach'),
                'section' => 'datas_dos_treinamentos_aperteOPlay',
                'settings' => 'datas_options[icone_datas_aperteOPlay]',
            )
        )
    );
    $wp_customize->add_setting(
        'datas_options[datas_label]',
        array(
            'default' => __('Datas dos treinamentos', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'datas_options[datas_label]',
        array(
            'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'datas_options[datas_dos_treinamentos_aperteOPlay_one]',
        array(
            'default' => __('', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'datas_options[datas_dos_treinamentos_aperteOPlay_one]',
        array(
            'label' => __('Datas', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'date',
        )
    );
    $wp_customize->add_setting(
        'datas_options[datas_dos_treinamentos_aperteOPlay_two]',
        array(
            'default' => __('', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'datas_options[datas_dos_treinamentos_aperteOPlay_two]',
        array(
            'label' => __('', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'date',
        )
    );
    $wp_customize->add_setting(
        'horarios_options[horarios_label]',
        array(
            'default' => __('Horário:', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_label]',
        array(
            'label' => __('Cabeçalho', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
        array(
            'default' => __('', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_one]',
        array(
            'label' => __('Horários', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'time',
        )
    );
    $wp_customize->add_setting(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
        array(
            'default' => __('', 'Rafa Ribeiro Coach'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'rafaribeiro_datasAperteOPlay_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'horarios_options[horarios_dos_treinamentos_aperteOPlay_two]',
        array(
            'label' => __('', 'Rafa Ribeiro Coach'),
            'section' => 'datas_dos_treinamentos_aperteOPlay',
            'type' => 'time',
        )
    );
    
    function rafaribeiro_datasAperteOPlay_sanitize_html($input)
    {
        return force_balance_tags($input);
    }
}
add_action('customize_register', 'rafaribeiro_datasAperteOPlay_customizer');

function datasAperteOPlay_setup_data()
{
    return $datasAperteOPlay_options = array(
        //datas section settings
        'datas_section_enabled' => '',
        'datas_label' => __('', 'Rafa Ribeiro Coach'),
        'icone_datas_aperteOPlay' => __('', 'Rafa Ribeiro Coach'),
        'datas_dos_treinamentos_aperteOPlay_one' => __('', 'Rafa Ribeiro Coach'),
        'datas_dos_treinamentos_aperteOPlay_two' => __('', 'Rafa Ribeiro Coach'),     
        'horarios_dos_treinamentos_aperteOPlay_one' => __('', 'Rafa Ribeiro Coach'),
        'horarios_dos_treinamentos_aperteOPlay_two' => __('', 'Rafa Ribeiro Coach'),       
    );
}