<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>" />
    <meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <!-- Inicio Wordpress Header -->
    <?php wp_head(); ?>
    <!-- Final Wordpress Header -->
</head>

<body>
    <header>
        <!-- NAV -->
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="<?php bloginfo('url'); ?>" class="navbar-brand">
                    <img id="brand" src="<?php echo get_template_directory_uri(); ?>/images/brand-fusaoonline.png" alt="Fusão Online - Marketing Digital">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbar-links">


                    <div class="navbar-nav ">
                        <?php
                        $args = array(
                            'theme_location' => 'menu-header',
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <form action="<?php echo get_home_url(); ?>/"  class="d-flex" role="search">
                        <div class="input-group">
                            <input type="text" name="s" class="form-control" placeholder="o que está procurando?">
                            <div class="input-group-append">
                                <button type="reset" class="btn btn-light closed-search">
                                    <i class="fa fa-times-circle"></i>
                                </button>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="searchButton btn">
                                    <span class="fas fa-search btn-search">
                                        <span class="sr-only">Ok</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>


                    
                </div>
            </nav>
        </div>
    </header>