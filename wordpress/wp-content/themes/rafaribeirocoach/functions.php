<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);



register_nav_menus( array(

    'primary' => __( 'Primary Menu', 'rafaribeirocoach'),
    'secondary' => __('Footer Menu', 'rafaribeirocoach'),

) );



function special_nav_class ($classes, $item) {

    if (in_array('current-menu-item', $classes) ){

        $classes[] = 'active ';

    }

    return $classes;

}



//aumentar o limite de upload de cada arquivo:

@ini_set( 'upload_max_size' , '64M' );

@ini_set( 'post_max_size', '64M');

@ini_set( 'max_execution_time', '300' );



add_theme_support( 'post-thumbnails' );



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

        'supports' => $supports,

        'taxonomies'          => array( 'category' )

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

        'supports' => $supports,

        'taxonomies'          => array( 'category' )

    );





    register_post_type( 'audio', $args);    

}



add_action('init', 'post_type_audios');

function theme_js() {



	global $wp_scripts;



	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );



}



add_action( 'wp_enqueue_scripts', 'theme_js');

// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

//INICIO SEÇÃO TREINAMENTOS
function rafaribeiro_treinamentos_customizer( $wp_customize ) {
 
//treinamento section panel
$wp_customize->add_panel( 'rafaribeiro_treinamento_options', array(
		'priority'       => 500,
		'capability'     => 'edit_theme_options',
		'title'      => __('Seção Treinamentos', 'Rafa Ribeiro Coach'),
	) );

	
	$wp_customize->add_section( 'treinamento_section_head' , array(
		'title'      => __('Título da seção','Rafa Ribeiro Coach'),
		'panel'  => 'rafaribeiro_treinamento_options',
		'priority'   => 50,
   	) );
	
	
	//Hide Index treinamento Section
	
	$wp_customize->add_setting(
    'treinamento_options[treinamento_section_enabled]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'treinamento_options[treinamento_section_enabled]',
    array(
        'label' => __('Ocultar esta seção','Rafa Ribeiro Coach'),
        'section' => 'treinamento_section_head',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'treinamento_options[treinamento_title]',
    array(
        'default' => __('Conheça nossos treinamentos','Rafa Ribeiro Coach'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'treinamento_options[treinamento_title]',
    array(
        'label' => __('Title','Rafa Ribeiro Coach'),
        'section' => 'treinamento_section_head',
        'type' => 'text',
    )
	);
	
	//$wp_customize->add_setting(
    //'treinamento_options[treinamento_description]',
    //array(
        //'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		//'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
		//'type' => 'option'
    //)	
	//);
	$wp_customize->add_control(
    'treinamento_options[treinamento_description]',
    array(
        'label' => __('Description','Rafa Ribeiro Coach'),
        'section' => 'treinamento_section_head',
        'type' => 'text',
		'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
    )
	);	
	
//treinamento section one
	$wp_customize->add_section( 'treinamento_section_one' , array(
		'title'      => __('Treinamento 1', 'Rafa Ribeiro Coach'),
		'panel'  => 'rafaribeiro_treinamento_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
       ) );


       
	$wp_customize->add_setting(
    'treinamento_options[treinamento_one_title]',
    array(
        'default' => __('Momento da virada','Rafa Ribeiro Coach'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'treinamento_options[treinamento_one_title]',
    array(
        'label' => __('Nome do treinamento','Rafa Ribeiro Coach'),
        'section' => 'treinamento_section_one',
        'type' => 'text',
    )
	);

//Second treinamento

$wp_customize->add_section( 'treinamento_section_two' , array(
		'title'      => __('Treinamento 2', 'Rafa Ribeiro Coach'),
		'panel'  => 'rafaribeiro_treinamento_options',
		'priority'   => 200,
   	) );

$wp_customize->add_setting(
    'treinamento_options[treinamento_two_title]',
    array(
        'default' => __('Aperte o play','Rafa Ribeiro Coach'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
		'type' => 'option',
    )	
);
$wp_customize->add_control(
    'treinamento_options[treinamento_two_title]',
    array(
        'label' => __('Nome do treinamento' ,'Rafa Ribeiro Coach'),
        'section' => 'treinamento_section_two',
        'type' => 'text',
    )
);

//Third treinamento section
$wp_customize->add_section( 'treinamento_section_three' , array(
		'title'      => __('Treinamento 3', 'Rafa Ribeiro Coach'),
		'panel'  => 'rafaribeiro_treinamento_options',
		'priority'   => 300,
   	) );

$wp_customize->add_setting(
    'treinamento_options[treinamento_three_title]',
    array(
        'default' => __('Mentoria','Rafa Ribeiro Coach'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'rafaribeiro_treinamentos_sanitize_html',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'treinamento_options[treinamento_three_title]',
    array(
        'label' => __('Nome do treinamento','Rafa Ribeiro Coach'),
        'section' => 'treinamento_section_three',
        'type' => 'text',
    )
);

class WP_treinamento_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="pro-box">
		<a href="<?php echo 'http://webriti.com/appointment/';?>" target="_blank" class="button button-primary" id="review_pro"><?php _e('Add more treinamentos. Get Pro.','Rafa Ribeiro Coach' ); ?></a>
	 
	<div>
    <?php
    }
}

function rafaribeiro_treinamentos_sanitize_html( $input ) {
    return force_balance_tags( $input );
	}


}
add_action( 'customize_register', 'rafaribeiro_treinamentos_customizer' );


//INICIO CUSTOMIZER

/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since MyTheme 1.0
 */
class MyTheme_Customize {
   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since MyTheme 1.0
    */
   public static function register ( $wp_customize ) {
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'mytheme_options', 
         array(
            'title'       => __( 'MyTheme Options', 'Rafa Ribeiro Coach' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'section'     => 'Treinamentos',
            'description' => __('Allows you to customize some example settings for MyTheme.', 'Rafa Ribeiro Coach'), //Descriptive tooltip
         ) 
      );
      
      //2. Register new settings to the WP database...
      $wp_customize->add_setting( 'treinamento_backgroundcolor-1', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '#EF4136', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
      $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'rafaribeirocoach_treinamento_backgroundcolor-1', //Set a unique ID for the control
         array(
            'label'      => __( 'Cor do Treinamento 1', 'Rafa Ribeiro Coach' ), //Admin-visible name of the control
            'settings'   => 'treinamento_backgroundcolor-1', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 10, //Determines the order this control appears in for the specified section
            'section'    => 'treinamento_section_one', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
            
      //Treinamento 2
      $wp_customize->add_setting( 'treinamento_backgroundcolor-2', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '#FFD200', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
      $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'rafaribeirocoach_treinamento_backgroundcolor-2', //Set a unique ID for the control
         array(
            'label'      => __( 'Cor do Treinamento 2', 'Rafa Ribeiro Coach' ), //Admin-visible name of the control
            'settings'   => 'treinamento_backgroundcolor-2', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 11, //Determines the order this control appears in for the specified section
            'section'    => 'treinamento_section_two', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
            
      //Treinamento 3
      $wp_customize->add_setting( 'treinamento_backgroundcolor-3', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '#01CAFF', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
      $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'rafaribeirocoach_treinamento_backgroundcolor-3', //Set a unique ID for the control
         array(
            'label'      => __( 'Cor do Treinamento 3', 'Rafa Ribeiro Coach' ), //Admin-visible name of the control
            'settings'   => 'treinamento_backgroundcolor-3', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 12, //Determines the order this control appears in for the specified section
            'section'    => 'treinamento_section_three', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      
      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
      $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
      $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
      $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head'
    * 
    * @see add_action('wp_head',$func)
    * @since MyTheme 1.0
    */
   public static function header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
           <?php self::generate_css('.cursos__item-1', 'background-color', 'treinamento_backgroundcolor-1'); ?>
           <?php self::generate_css('.cursos__item-2', 'background-color', 'treinamento_backgroundcolor-2'); ?>
           <?php self::generate_css('.cursos__item-3', 'background-color', 'treinamento_backgroundcolor-3'); ?>
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    * @since MyTheme 1.0
    */
   public static function live_preview() {
      wp_enqueue_script( 
           'mytheme-themecustomizer', // Give the script a unique ID
           get_template_directory_uri() . '/js/theme-customizer.js', // Define the path to the JS file
           array(  'jquery', 'customize-preview' ), // Define dependencies
           '', // Define a version (optional) 
           true // Specify whether to put in footer (leave this true)
      );
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     * 
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since MyTheme 1.0
     */
    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'MyTheme_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'MyTheme_Customize' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'MyTheme_Customize' , 'live_preview' ) );

function theme_setup_data()
  	{
	return $appointment_options=array(
	//treinamento section settings
	'treinamento_section_enabled' => '',
	'treinamento_title' => __('Our treinamentos','appointment'),
	//'treinamento_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	'curso_one_color'=>__('#000000','appointment'),
	'treinamento_one_icon' => 'fa-mobile',
	'treinamento_one_title'=>__('Easy to use','appointment'),
	'treinamento_one_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'treinamento_two_icon' => 'fa-bell',
	'treinamento_two_title'=>__('Easy to use','appointment'),
	'treinamento_two_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'treinamento_three_icon' => 'fa-laptop',
	'treinamento_three_title'=>__('Easy to use','appointment'),
	'treinamento_three_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'treinamento_four_icon' => 'fa-support',
	'treinamento_four_title'=>__('Easy to use','appointment'),
	'treinamento_four_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'treinamento_five_icon' => 'fa-code',
	'treinamento_five_title'=>__('Easy to use','appointment'),
	'treinamento_five_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
	'treinamento_six_icon' => 'fa-cog',
	'treinamento_six_title'=>__('Easy to use','appointment'),
	'treinamento_six_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
    );
}

?>