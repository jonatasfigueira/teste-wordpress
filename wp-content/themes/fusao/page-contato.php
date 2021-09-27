<?php
// Template Name: Contato
get_header();
?>
<?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

<section id="singlevaga">
    <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 

      <div class="row form-vaga">
        <div class="col-md-8 offset-md-4  ">
		<h2>Envie uma mensagem</h2>
		<?php echo do_shortcode( '[contact-form-7 id="9" title="Formulário de contato"]' ); ?>
        </div>
      </div>

    <?php endwhile; else: endif; ?>

    </div> 
  </section>


<?php get_footer(); ?>