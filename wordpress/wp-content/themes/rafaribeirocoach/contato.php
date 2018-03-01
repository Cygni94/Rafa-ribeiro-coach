<?php /* Template Name: Contato */?>
<?php get_header();?>

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/contato.css">

<section class="contact-form">

<h1>Compartilhe conosco suas sugestões, dúvidas e idéias</h1>

<?php echo do_shortcode( '[contact-form-7 id="23" title="Formulário de Contato"]' ); ?>

</section>

<?php get_footer();?>