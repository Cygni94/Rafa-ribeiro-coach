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


//INÍCIO APPOINTMENT
/**Theme Name	: Appointment
 * Theme Core Functions and Codes
*/
	/**Includes reqired resources here**/
	define('WEBRITI_TEMPLATE_DIR_URI', get_template_directory_uri());
    define('WEBRITI_TEMPLATE_DIR' , get_template_directory());
    define('WEBRITI_THEME_FUNCTIONS_PATH' , WEBRITI_TEMPLATE_DIR.'/functions');
	require( WEBRITI_THEME_FUNCTIONS_PATH .'/scripts/script.php');
    require( WEBRITI_THEME_FUNCTIONS_PATH .'/menu/default_menu_walker.php');
    require( WEBRITI_THEME_FUNCTIONS_PATH .'/menu/appoinment_nav_walker.php');
    require( WEBRITI_THEME_FUNCTIONS_PATH .'/widgets/sidebars.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH .'/widgets/appointment_info_widget.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/template-tag.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/breadcrumbs/breadcrumbs.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/font/font.php');
	//Customizer
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_theme_style.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-callout.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-slider.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-copyright.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-header.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-news.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-service.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-pro.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-project.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-testimonial.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-client.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-footer-callout.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-template.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-emailcourse.php');
	
	// Appointment Info Page
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/appointment-info/welcome-screen.php');
	
	// Custom Category control 
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/custom-controls/select/category-dropdown-custom-control.php');
	/* Theme Setup Function */
	add_action( 'after_setup_theme', 'appointment_setup' );
	
	function appointment_setup()
	{	
	// Load text domain for translation-ready
    load_theme_textdomain( 'appointment', WEBRITI_THEME_FUNCTIONS_PATH . '/lang' );

	$header_args = array(
				 'flex-height' => true,
				 'height' => 200,
				 'flex-width' => true,
				 'width' => 1600,
				 'admin-head-callback' => 'mytheme_admin_header_style',
				 );
				 
				 add_theme_support( 'custom-header', $header_args );
    add_theme_support( 'post-thumbnails' ); //supports featured image
	// Register primary menu 
    register_nav_menu( 'primary', __('Primary Menu', 'appointment' ) );
	
	//Add Theme Support Title Tag
	add_theme_support( "title-tag" );
	
	// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
	// Set the content_width with 900
    if ( ! isset( $content_width ) ) $content_width = 900;
	require_once('theme_setup_data.php');
	}
// set appointment page title       
function appointment_title( $title, $sep )
{	
    global $paged, $page;
		
	if ( is_feed() )
        return $title;
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page', 'appointment' ), max( $paged, $page ) );
		return $title;
}	
add_filter( 'wp_title', 'appointment_title', 10,2 );

add_filter('get_avatar','appointment_add_gravatar_class');

function appointment_add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='img-responsive img-circle", $class);
    return $class;
}
function appointment_add_to_author_profile( $contactmethods ) {
		$contactmethods['facebook_profile'] = __('Facebook URL','appointment');
		$contactmethods['twitter_profile'] = __('Twitter URL','appointment');
		$contactmethods['linkedin_profile'] = __('LinkedIn URL','appointment');
		$contactmethods['google_profile'] = __('GooglePlus URL','appointment');
		return $contactmethods;
		}
		add_filter( 'user_contactmethods', 'appointment_add_to_author_profile', 10, 1);
	
	
	    add_filter('get_the_excerpt','appointment_post_slider_excerpt');
	    function appointment_post_slider_excerpt($output){
		$output = strip_tags(preg_replace(" (\[.*?\])",'',$output));
		$output = strip_shortcodes($output);		
		$original_len = strlen($output);
		$output = substr($output, 0, 155);		
		$len=strlen($output);	 
		if($original_len>155) {
		$output = $output;
		return  '<div class="slide-text-bg2">' .'<span>'.$output.'</span>'.'</div>'.
	                       '<div class="slide-btn-area-sm"><a href="' . get_permalink() . '" class="slide-btn-sm">'
						   .__("Read More","appointment").'</a></div>';
		}
		else
		{ return '<div class="slide-text-bg2">' .'<span>'.$output.'</span>'.'</div>'; }   
        }
						
	function get_home_blog_excerpt()
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 145);		
		$len=strlen($excerpt);	 
		if($original_len>275) {
		$excerpt = $excerpt;
		return $excerpt . '<div class="blog-btn-area-sm"><a href="' . get_permalink() . '" class="blog-btn-sm">'.__("Read More","appointment").'</a></div>';
		}
		else
		{ return $excerpt; }
	}
	
	function appointment_import_files() {
  return array(
    array(
      'import_file_name'           => 'Demo Import 1',
      'categories'                 => array( 'Category 1', 'Category 2' ),
      'import_file_url'            => 'https://webriti.com/themes/dummydata/appointment/lite/appointment-content.xml',
      'import_widget_file_url'     => 'https://webriti.com/themes/dummydata/appointment/lite/appointment-widget.json',
      'import_customizer_file_url' => 'https://webriti.com/themes/dummydata/appointment/lite/appointment-customize.dat',
      'import_notice'              => sprintf(__( 'Click the large blue button to start the dummy data import process.</br></br>Please be patient while WordPress imports all the content.</br></br>
			<h3>Recommended Plugins</h3> Appointment theme supports the following plugins:</br> </br><li> <a href="https://wordpress.org/plugins/contact-form-7/"> Contact form 7</a> </l1> </br></br> <li> <a href="https://wordpress.org/plugins/bootstrap-3-shortcodes/"> Bootstrap Shortcodes</a> </l1>','appointment' )),
			),
    	
    	
    	
	);
}
add_filter( 'pt-ocdi/import_files', 'appointment_import_files' );


function appointment_after_import_setup() {

	// Menus to assign after import.
	$main_menu   = get_term_by( 'name', 'Menu 1', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'primary'   => $main_menu->term_id,
	));
	
	// Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );	
	
	
}
add_action( 'pt-ocdi/after_import', 'appointment_after_import_setup' );
?>