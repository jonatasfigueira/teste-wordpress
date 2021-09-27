<?php
// Template Name: Single Vagas
get_header();
?> 
 
 <?php include(TEMPLATEPATH . "/inc/introvaga.php"); ?>
  
  <section id="singlevaga">
    <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 

      <div class="row">
        <div class="col-md-10 offset-md-1 content-single"> 
          <?php echo get_the_content(); ?>

        </div>
      </div>

      <div class="row form-vaga">
        <div class="col-md-8 offset-md-4  ">
		<h2>Formulário de Inscrição</h2>
		<?php echo do_shortcode( '[contact-form-7 id="115" title="Formulário de inscrição"]' ); ?>
        </div>
      </div>

    <?php endwhile; else: endif; ?>

    </div> 
  </section>

<?php get_footer(); ?>