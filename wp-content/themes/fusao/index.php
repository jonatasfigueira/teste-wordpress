<?php
// Template Name: Home
get_header();
?>

<main>
    <!-- CARROSSEL -->
    <div class="container-fluid">
        <div id="main-slider" class="carousel slide" data-ride="carousel">

            <?php $args = array(
               'post_type' => 'post',
            );
            $slider = new WP_Query($args);
            if ($slider->have_posts()) :
                $count = $slider->found_posts;
            ?>
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < $count; $i++) { ?>
                        <li data-target="#main-slider" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
                    <?php } ?>
                </ol>
                <!--.carousel-indicators-->
                <div class="carousel-inner" role="listbox">
                    <?php $i = 0;
                    while ($slider->have_posts()) : $slider->the_post(); 
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                    ?>
                        <div class="carousel-item <?php echo ($i == 0) ? 'active' : '' ?>" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover; height:500px">
                            <div class="carousel-caption d-md-block">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_excerpt(); ?></p>
                                <a href="<?php the_permalink() ?>" class="main-btn">Leia mais</a>
                            </div>

                        </div>
                        <!--.carousel-item-->
                    <?php $i++;
                    endwhile; ?>
                </div>
                <!--.carouse-inner-->


                <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#main-slider" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            <?php endif;
            wp_reset_postdata(); ?>

        </div>
    </div>

</main>
<!-- CONTRATA -->
<section id="sec-contrata">
    <h2 class="title-section">Passo a passo para a contratação</h2>
    <p class="subtitle-section">Breve descrição sobre os passos</p>
    <div class="container">
        <div class="row">
            <div class="col-sm item-contrata">
                <span class="cicle-color">
                </span>
                <h2>Entrevista</h2>
                <p>Entrevista presencial para conhecer o candidato e apresetar a ele os valores da empresa em questão</p>
            </div>
            <div class="col-sm item-contrata">
                <span class="cicle-color"></span>
                <h2>Teste técnico</h2>
                <p>Entrevista presencial para conhecer o candidato e apresetar a ele os valores da empresa em questão</p>
            </div>
            <div class="col-sm item-contrata">
                <span class="cicle-color"></span>
                <h2>Proposta</h2>
                <p>Entrevista presencial para conhecer o candidato e apresetar a ele os valores da empresa em questão</p>
            </div>
        </div>
    </div>
</section>

<!-- TODAS AS VAGAS -->
<section id="sec-todasvagas">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7 order-md-1">
                <img class="featurette-image img-fluid mx-auto" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17bfec6fd44%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17bfec6fd44%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
            <div class="col-md-5 order-md-2 info-vagas ">
                <h2 class="featurette-heading">Confira todas as nossas vagas disponíveis.</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi odit optio non error eaque soluta neque iusto quae, aliquam possimus? Sed accusamus possimus adipisci magnam enim provident eum cumque debitis.</p>
                <a href="#" class="btn1">Ver todas as vagas</a>
            </div>
        </div>
    </div>

</section>

<!-- BLOG -->
<section id="sec-blog">
    <h2 class="title-section">Blog</h2>
    <div class="container">
    <?php query_posts('showposts=3'); ?>
     
        <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-4 ">
                <div class="card mb-4 ">
                    <?php the_post_thumbnail('blogsmall', array(
                                'class' => 'card-img-top',
                                'alt' => get_the_title()
                            )); ?>
                    <div class="card-body info-blog">
                        <h2><?php the_title() ?></h2>
                        <p class=""><?php echo get_excerpt(); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php the_permalink() ?>" class="btn1">Leia mais</a>
                            </div>
                            <small class="text-muted"><?php the_category();?></small>
                        </div>
                    </div>
                </div>
            </div> 
            <?php endwhile;?>
        </div>
    </div>
</section>
<!-- VAGAS PUBLICADAS -->
<section id="sec-vagaspub">
    <h2 class="title-section">Vagas publicadas</h2>
    <div class="container">
    <div class="row">
        <?php
            $args = array (
                    'post_type' => 'vagas',
                    'order'   => 'ASC',
                    'posts_per_page' => 2,
                );
                $the_query = new WP_Query ( $args );
        ?>
        
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-md-4 ">
                <div class="ccard mb-4  box-vagas">
                    <div class="info-vagaspub">
                        <span><?php echo get_the_term_list( $post->ID, 'categoria-vaga', '', ' '); ?></span>
                        <h2><?php the_title();?></h2>
                        <p><?php echo get_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn2">Saiba mais</a>
                    </div>
                </div>
            </div>
        
        <?php endwhile; else: endif; ?>
    </div>
    </div>
</section>

<?php get_footer(); ?>