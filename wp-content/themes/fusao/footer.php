
    <!-- FOOTER -->
    <footer class="  border-top">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <img id="brand-footer" src="<?php echo get_template_directory_uri(); ?>/images/brand-fusaoonline.png" alt="Fusão Online - Marketing Digital">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi doloremque laboriosam est amet, magnam aspernatur ipsa error distinctio illum, odit aliquid molestiae? </p>
                </div>
                <div class="col-md">
                    <h2>Mapa do Site</h2> 
                        <?php
                            $args = array( 
                                'theme_location' => 'menu-footer',
                                'menu_class'     => 'm-0 p-0',
                            );
                            wp_nav_menu( $args );
                        ?>
                </div>
                <div class="col-md">
                    <h2>Redes Sociais</h2>
                    <a href="#" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>

                </div>
            </div>
        </div>
        <div class="copyright">
            <span>&copy; 2021 Todos os direitos reservados - Fusão Online</span>
        </div>
    </footer>
	<!-- Inicio Wordpress Footer -->
	<?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->

	</body>
</html>