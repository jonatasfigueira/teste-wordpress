<?php get_header(); ?>
  
  <section id="singlepost">
    <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="box-autor">
            <img class="avatar-autor rounded-circle" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ),   ); ?>" alt="<?php the_author(); ?>">
            <div class="title-autor">
              <h5 class=""><?php the_author(); ?></h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row"> 
        <div class="col-md-6 offset-md-3 img-single"> 
        <img class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" >
 
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3 content-single">
          <h2><?php the_title();?></h2> 

          <div class="d-flex justify-content-between ">
              <small><?php the_category();?></small>
              <small><?php the_time('j \d\e F \d\e Y'); ?></small>
          </div>
          
          <?php echo get_the_content(); ?>
          <span><?php the_tags(); ?></span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3 comment-single">
          <?php comments_template(); ?>
        </div>
      </div>

    <?php endwhile; else: endif; ?>

    </div> 
  </section>

<?php get_footer(); ?>