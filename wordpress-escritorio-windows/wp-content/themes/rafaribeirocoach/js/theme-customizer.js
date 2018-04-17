
/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	//treinamentos
	wp.customize( 'treinamento_backgroundcolor-1', function( value ) {
		value.bind( function( newval ) {
			$('.cursos__item-1').css('background-color', newval );
		} );
	} );

	wp.customize( 'treinamento_backgroundcolor-2', function( value ) {
		value.bind( function( newval ) {
			$('.cursos__item-2').css('background-color', newval );
		} );
	} );
	
	wp.customize( 'treinamento_backgroundcolor-3', function( value ) {
		value.bind( function( newval ) {
			$('.cursos__item-3').css('background-color', newval );
		} );
	} );


	//depoimentos


} )( jQuery );