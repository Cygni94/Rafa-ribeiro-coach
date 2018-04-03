<?php
function appointment_service_customizer( $wp_customize ) {
 
//Service section panel
$wp_customize->add_panel( 'appointment_service_options', array(
		'priority'       => 500,
		'capability'     => 'edit_theme_options',
		'title'      => __('Seção Treinamentos', 'appointment'),
	) );

	
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Título da seção','appointment'),
		'panel'  => 'appointment_service_options',
		'priority'   => 50,
   	) );
	
	
	//Hide Index Service Section
	
	$wp_customize->add_setting(
    'appointment_options[service_section_enabled]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'appointment_options[service_section_enabled]',
    array(
        'label' => __('Ocultar esta seção','appointment'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'appointment_options[service_title]',
    array(
        'default' => __('Our services','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_service_sanitize_html',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'appointment_options[service_title]',
    array(
        'label' => __('Title','appointment'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	//$wp_customize->add_setting(
    //'appointment_options[service_description]',
    //array(
        //'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		//'sanitize_callback' => 'appointment_service_sanitize_html',
		//'type' => 'option'
    //)	
	//);
	$wp_customize->add_control(
    'appointment_options[service_description]',
    array(
        'label' => __('Description','appointment'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'appointment_service_sanitize_html',
    )
	);	
	
//service section one
	$wp_customize->add_section( 'service_section_one' , array(
		'title'      => __('Treinamento 1', 'appointment'),
		'panel'  => 'appointment_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
       ) );

       $wp_customize->add_setting( 
        'appointment_options[curso_one_color]' , array(
        'title'      => __('Cor padrão do treinamento', 'appointment'),
        'label'   => __('Icon', 'appointment'),
        'default'   => '#000000',
        'transport' => 'refresh',
       ) );

       $wp_customize->add_control( 
        'appointment_options[curso_one_color]' , array(
        'label'      => __( 'Header Color', 'appointment' ),
        'section'    => 'treinamento-1',
    ) );

	$wp_customize->add_setting(
    'appointment_options[service_one_title]',
    array(
        'default' => __('Momento da virada','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_service_sanitize_html',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'appointment_options[service_one_title]',
    array(
        'label' => __('Nome do treinamento','appointment'),
        'section' => 'service_section_one',
        'type' => 'text',
    )
	);

//Second service

$wp_customize->add_section( 'service_section_two' , array(
		'title'      => __('Treinamento 2', 'appointment'),
		'panel'  => 'appointment_service_options',
		'priority'   => 200,
   	) );

$wp_customize->add_setting(
    'appointment_options[service_two_title]',
    array(
        'default' => __('Aperte o play','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_service_sanitize_html',
		'type' => 'option',
    )	
);
$wp_customize->add_control(
    'appointment_options[service_two_title]',
    array(
        'label' => __('Nome do treinamento' ,'appointment'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);

//Third Service section
$wp_customize->add_section( 'service_section_three' , array(
		'title'      => __('Treinamento 3', 'appointment'),
		'panel'  => 'appointment_service_options',
		'priority'   => 300,
   	) );

$wp_customize->add_setting(
    'appointment_options[service_three_title]',
    array(
        'default' => __('Mentoria','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_service_sanitize_html',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'appointment_options[service_three_title]',
    array(
        'label' => __('Nome do treinamento','appointment'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);

class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="pro-box">
		<a href="<?php echo 'http://webriti.com/appointment/';?>" target="_blank" class="button button-primary" id="review_pro"><?php _e('Add more services. Get Pro.','appointment' ); ?></a>
	 
	<div>
    <?php
    }
}

function appointment_service_sanitize_html( $input ) {
    return force_balance_tags( $input );
	}


}
add_action( 'customize_register', 'appointment_service_customizer' );
?>