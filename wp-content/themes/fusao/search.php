<?php 
get_header();
?> 	

<?php if ( have_posts() ) : ?>


<section id="sec-blog">
		<div  class="intro-search">  
			<?php printf( __( 'Resultado pesquisa para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' );?>
		</div>	
    <div class="container"> 	
		<div class="row">
		<?php while ( have_posts() ) : the_post();?>	
			<div class="col-md-4 ">
				<div class="card mb-4 ">
					<?php the_post_thumbnail('blogsmall', array(
								'class' => 'card-img-top',
								'alt' => get_the_title()
							)); ?>
					<div class="card-body info-blog">
						<h2><?php the_title() ?></h2>
						<?php the_category();?>
					
						<p class=""><?php echo get_excerpt(); ?></p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<a href="<?php the_permalink() ?>" class="btn1">Leia mais</a>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<?php endwhile;?>
		</div>
        
		<div class="paginacao">
			<?php if ( minha_paginacao() ) : ?>
			<?php minha_paginacao();?>
		<?php endif; ?>
		</div>
		<?php else : ?>
			<h2>Ops! Nada foi encontrado </h2>
		<?php endif; ?>		
    </div>
</section>

<?php 
get_footer(); 
?>