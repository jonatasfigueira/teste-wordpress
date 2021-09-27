<?php
 
  function jf_scripts() {
    // Desregistra o jQuery do Wordpress
    wp_deregister_script('jquery');

    // Registrar outros scripts
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], '3.6', true ); 

    wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), false, false );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, false );
    wp_register_script('fontawesome', get_template_directory_uri() . '/assets/js/fontawesome.js');

    wp_enqueue_style('animatecss', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', 'all');

    // Script main
    wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false , true );
  
    // Carrega o Script
    wp_enqueue_script( 'popper' );
    wp_enqueue_script( 'bootstrap' );	
    wp_enqueue_script( 'fontawesome' );	
    wp_enqueue_script( 'main' );	
  }
  add_action( 'wp_enqueue_scripts', 'jf_scripts' );

  
  function jf_css() {
    wp_register_style( 'jf-style', get_template_directory_uri() . '/style.css', array(), false, false );
    wp_enqueue_style( 'jf-style' );
  }
  add_action( 'wp_enqueue_scripts', 'jf_css' );
  
  // Funções para Limpar o Header
  function my_function_admin_bar(){
    return false;
    }
    add_filter( 'show_admin_bar' , 'my_function_admin_bar');

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  // Habilitar Menus
  add_theme_support('menus');

  // Registrar Menu
  function register_my_menu() {
    register_nav_menu('menu-header',__( 'Menu Header' ));
    register_nav_menu('menu-footer',__( 'Menu Footer' ));
  }
  add_action( 'init', 'register_my_menu' );

  // Custom Images Sizes
  function my_custom_sizes() {
    add_image_size('slidehome', 1400, 500, true);
    add_image_size('blogsmall', 348, 225, true);
    add_image_size('singleimg', 550, 400, true);
  }
  add_action('after_setup_theme', 'my_custom_sizes');

  // Resumo
  function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 80);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    return $excerpt;
  }


  // Paginação
  function minha_paginacao() {
    global $wp_query;
    
    echo paginate_links( array(
        'base' => str_replace( 9999999999999, '%#%', esc_url( get_pagenum_link( 9999999999999 ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var( 'paged' ) ),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'prev_next' => true,
        'prev_text' => '<i class="fas fa-chevron-left"></i>',
        'next_text' => '<i class="fas fa-chevron-right"></i>',
        'before_page_number' => '',
        'after_page_number' => '',
        'show_all' => false,
        'mid_size' => 3,
        'end_size' => 1,
    ) );
  }

  function minha_paginacao_busca( $query ) {
    if ( $query->is_search() ) {
    $query->set( 'posts_per_page', '2' );
    }

    if ( $query->is_category() ) {
      $query->set( 'posts_per_page', '1' );
      }
 
    }
    

// Custom Post Type

function custom_post_type_vagas() {
	register_post_type('vagas', array(
		'label' => 'Vagas',
		'description' => 'Vagas',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'vagas', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Vagas',
			'singular_name' => 'Vagas',
			'menu_name' => 'Vagas',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Vaga',
			'edit' => 'Editar',
			'edit_item' => 'Editar Vagas',
			'new_item' => 'Novo Vagas',
			'view' => 'Ver Vagas',
			'view_item' => 'Ver Vagas',
			'search_items' => 'Procurar Vagas',
			'not_found' => 'Nenhuma Vagas Encontrada',
			'not_found_in_trash' => 'Nenhuma Vagas Encontrada no Lixo',
    ),
    // 'public' => true,
    //     'show_ui' => true,
    //     'supports' => array( 'title', 'editor', 'thumbnail' ), 
    //     'taxonomies' => array('category'),

	));
}
add_action('init', 'custom_post_type_vagas');

// Custom Post Type Taxonomia
function taxonomia_vagas(){
    $custom_tax_vagas = 'categoria-vaga';
    $custom_post_type_vagas = 'vagas';
    $args = array(
        'label' => __('Categoria da Vaga'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'categoria')
    );
    register_taxonomy( $custom_tax_vagas, $custom_post_type_vagas, $args );
}
add_action( 'init', 'taxonomia_vagas' );

?>