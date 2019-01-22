<?php
/**
 * el-grazia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package el-grazia
 */

if ( ! function_exists( 'el_grazia_setup' ) ) :
	
	add_action( 'after_setup_theme', 'woocommerce_support' );

	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function el_grazia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on el-grazia, use a find and replace
		 * to change 'el-grazia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'el-grazia', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'el-grazia' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'el_grazia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		require get_template_directory() . '/core/custom.php';

		function cc_mime_types($mimes) {
		  $mimes['svg'] = 'image/svg';
		  return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');
		
		if( function_exists('acf_add_options_page') ) {
			
			acf_add_options_page(array(
				'page_title' => 'Контакты',
				'menu_title' => 'Контакты',
				'menu_slug' => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect' => false,
				'icon_url' => 'dashicons-phone',
			));	
			acf_add_options_page(array(
				'page_title' => 'Настройки меню',
				'menu_title' => 'Настройки меню',
				'menu_slug' => 'theme-general-menu',
				'capability' => 'edit_posts',
				'redirect' => false,
				// 'icon_url' => 'dashicons-phone',
			));				
			// acf_add_options_page(array(
			// 	'page_title' => 'Форма регистрации',
			// 	'menu_title' => 'Форма регистрации',
			// 	'menu_slug' => 'theme-general-form',
			// 	'capability' => 'edit_posts',
			// 	'redirect' => false,
			// 	// 'icon_url' => 'dashicons-phone',
			// ));		
		}	


		//menu custom class 
		function add_specific_menu_location_atts( $atts, $item, $args ) {
		    $atts['class'] = 'menu__link';

		    return $atts;
		}
		add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

		function atg_menu_classes($classes, $item, $args) {
			$classes[] = 'menu__item';

		  	return $classes;
		}
		add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


}
endif;
add_action( 'after_setup_theme', 'el_grazia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function el_grazia_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'el_grazia_content_width', 640 );
}
add_action( 'after_setup_theme', 'el_grazia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function el_grazia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'el-grazia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'el-grazia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'el_grazia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
// if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
}

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function returnSVGclass($key) {
	switch ($key) {
		case 0 : {
			return 'advantages__icon--estetic_kosmetolog';
			break;
		}
		case 1 : {
			return 'advantages__icon--kongress';
			break;
		}

		case 2 : {
			return 'advantages__icon--partners';
			break;
		}
		case 3 : {
			return 'advantages__icon--shops';
			break;
		}

	}
}

function returnSVGclassA($key) {
	switch ($key) {
		case 0 : {
			return 'advantages__icon--members';
			break;
		}
		case 1 : {
			return 'advantages__icon--study';
			break;
		}

		case 2 : {
			return 'advantages__icon--estetic_kosmetolog2';
			break;
		}
	}	
}

function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {

// Определяем массив style_formats

	$style_formats = array(
		array(
			'title' => 'Блок с рамкой',
			'block' => 'div',
			'classes' => 'listBox',
			'wrapper' => true,

		),
	);
	// Вставляем массив, JSON ENCODED, в 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Прикрепляем вызов к 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function my_theme_add_editor_styles() {
    add_editor_style( 'article.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<div class="pagination %1$s" role="navigation">
		%3$s
	</div>    
	';
}


// add_filter('wpcf7_form_elements', function($content) {
// 	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
// 	return $content;
// });

function getAdvSVGClass($index) {
	switch($index) {
		case 0 : {
			return 'icon-advantages2';
			break;
		}
		case 1 : {
			return 'icon-advantages1';
			break;
		}
		case 2 : {
			return 'icon-advantages3';
			break;
		}
		case 3 : {
			return 'icon-advantages4';
			break;
		}
		case 4 : {
			return 'icon-advantages5';
			break;
		}
		case 5 : {
			return 'icon-advantages6';
			break;
		}
		case 6 : {
			return 'icon-advantages7';
			break;
		}


	}
}

function toolset_fix_custom_posts_per_page( $query_string ){
    if( is_admin() || ! is_array( $query_string ) )
        return $query_string;
 
    $post_types_to_fix = array(
        array(
            'post_type' => 'news',
            'posts_per_page' => 12
        ),
    );
 
    foreach( $post_types_to_fix as $fix ) {
        if( array_key_exists( 'post_type', $query_string )
            && $query_string['post_type'] == $fix['post_type']
        ) {
            $query_string['posts_per_page'] = $fix['posts_per_page'];
            return $query_string;
        }
    }
 
    return $query_string;
}
 
add_filter( 'request', 'toolset_fix_custom_posts_per_page' , 999);


function edit_admin_menus() {
	global $menu;
	$menu[5][0] = 'Статьи';
}
add_action( 'admin_menu', 'edit_admin_menus' );

		

add_action('admin_menu','set_admin_menu');

function set_admin_menu() {
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=seminar' );
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=brands' );
	remove_submenu_page( 'edit.php', 'edit.php?post_type=shop_order' );
	remove_menu_page( 'edit.php?post_type=acf-field-group');
	remove_menu_page( 'edit-comments.php' ); 
	remove_menu_page( 'tools.php' ); 
	remove_menu_page( 'themes.php' ); 
	remove_menu_page( 'plugins.php' ); 
	remove_menu_page('edit.php?post_type=shop_order'); 
}





add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {

  $cols = 6;
  return $cols;
}

function change_post_menu_label() {
    global $menu;
    unset($menu['55.5']);
}

add_action( 'admin_menu', 'change_post_menu_label' );


add_action( 'wp_ajax_nopriv_load_more', 'load_more');
add_action( 'wp_ajax_load_more', 'load_more');

function load_more() {

	$current = $_POST['current'];

	$category = $_POST['term_id'];

    $args = array(
	    'post_type'             => 'product',
	    'posts_per_page'  		=> 6,
	    'offset' 				=> $current * 6,
	    'paged' 				=> $current + 1,
	    'tax_query'				=> array(
	        array(
	            'taxonomy'      => 'product_cat',
	            'field' 		=> 'term_id',
	            'terms'         => $category,
	            'operator'      => 'IN'
	        ),
	    ),
	);



	$posts = query_posts($args);
	$html ='';
	$count = 0;

	if ( have_posts() ) : while ( have_posts() ) :
		the_post();
		// $terms = get_the_terms( get_the_ID(), 'product_cat' );
		global $product;
		$html .= '<div class="grid__item">';
			$html .= '<div class="card card--good">';
				$html .= '<a href="'. get_the_permalink() .'" class="card__link"></a>';
				$html .= '<div class="card__photo">';
				$html .= woocommerce_get_product_thumbnail('medium');
				$html .= '</div>';
				$html .= '<div class="card__body">';
				$html .= ' <div class="card__title">'. get_the_title() .'</div>';
				$html .= '<div class="card__subtitle">'. get_field('subtitle') .'</div>';
				$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		$count ++;
	endwhile; endif;
	wp_reset_query();

	exit(json_encode(array(
		'html' => $html,
		'count' => $count
	)));
}

add_action( 'wp_ajax_nopriv_load_category', 'load_category');
add_action( 'wp_ajax_load_category', 'load_category');

function load_category() {
	$category = $_POST['term_id'];
	$current_cat = get_term_by('term_taxonomy_id', $category);
	$current_cat->count > 6 ? $next_page = 1 : $next_page = 0 ;

	$data = array(
		'title_category'   => $current_cat->name,
		'id_category'      => $category,
		'url_category'     => get_term_link($current_cat),
		'counter_category' => $current_cat->count,
		'nextPage'         => $next_page,
	);

    $args = array(
	    'post_type'             => 'product',
	    'posts_per_page'  		=> 6,
	    'tax_query' 			=> array(
	        array(
	            'taxonomy'      => 'product_cat',
	            'field'			=> 'term_id',
	            'terms'         => $category,
	            'operator'      => 'IN'
	        ),
	    )
	);
	$posts = query_posts($args);

	$count = 0;
	if ( have_posts() ) : while ( have_posts() ) :
		the_post();
		// $terms = get_the_terms( get_the_ID(), 'product_cat' );
		global $product;
		$data['body'][$count]['photo'] = get_the_post_thumbnail_url();
		$data['body'][$count]['title'] = get_the_title();
		$data['body'][$count]['subtitle'] = get_field('subtitle');
		$data['body'][$count]['link'] =  get_the_permalink();



		$count ++;
	endwhile; endif;
	wp_reset_query();

	

	exit(json_encode($data));
}


function getProductCatTree($id, $data = array()){
	$counter = 0;
	$data[] = $id;
	$parent = get_term_by('term_taxonomy_id', $id);

	if ($parent->parent) {
		$data = getProductCatTree($parent->parent, $data);
		
	} 

	return $data;
}

function get_h1() 
{
	if (get_field('seo_h1')) {
		the_field('seo_h1');
	} else {
		the_title();
	}
}

add_action( 'wp_ajax_nopriv_send_form', 'send_form');
add_action( 'wp_ajax_send_form', 'send_form');

function send_form()
{
	if ($_POST['role'] == '1' || $_POST['role'] == '2') {
		$to = "center@eliagrazia.ru";
		$message = "
			Заявка с формы обратной связи <br>
			Имя - " . $_POST['name'] ." <br>
			Телефон - " . $_POST['phone'] ." <br>
			Email - " . $_POST['email'] ." <br>
			Роль - " . $_POST['roleName'] ." <br>
			Семинар - " . $_POST['seminar'] ." <br>
			Как узнали - " . $_POST['about'] ." <br>
			Комментарий - " . $_POST['comment'] ." <br>
			Дата - " . date("Y-m-d H:i:s") ." <br>
		";	

	} elseif ($_POST['role'] == '3') {
		$to = "zhdanova@eliagrazia.ru";
		$message = "
			Заявка с формы обратной связи <br>
			Имя - " . $_POST['name'] ." <br>
			Телефон - " . $_POST['phone'] ." <br>
			Email - " . $_POST['email'] ." <br>
			Роль - " . $_POST['roleName'] ." <br>
			Бренд - " . $_POST['brand'] ." <br>
			Как узнали - " . $_POST['about'] ." <br>
			Комментарий - " . $_POST['comment'] ." <br>
			Дата - " . date("Y-m-d H:i:s") ." <br>
		";
	} else {
		$to = "zhdanova@eliagrazia.ru";
		$message = "
			Заявка с формы обратной связи <br>
			Имя - " . $_POST['name'] ." <br>
			Телефон - " . $_POST['phone'] ." <br>
			Email - " . $_POST['email'] ." <br>
			Роль - " . $_POST['roleName'] ." <br>
			Как узнали - " . $_POST['about'] ." <br>
			Комментарий - " . $_POST['comment'] ." <br>
			Дата - " . date("Y-m-d H:i:s") ." <br>
		";
		// $message = "
		// 	Заявка с формы обратной связи <br>
		// 	Имя - " . $_POST['name'] ." <br>
		// 	Телефон - " . $_POST['phone'] ." <br>
		// 	Город - " . $_POST['city'] ." <br>
		// 	Email - " . $_POST['email'] ." <br>
		// 	Роль - " . $_POST['roleName'] ." <br>
		// 	Как узнали - " . $_POST['about'] ." <br>
		// 	Комментарий - " . $_POST['comment'] ." <br>
		// 	Дата - " . date("Y-m-d H:i:s") ." <br>
		// ";
	}

	// $role = $_POST['role'] - 1;
	// $role_map = get_field('roles', 'option');
	// $to1 = $role_map[$role]['mail'];


	$subject = "Заявка с формы обратной связи";

	$headers .= 'From: <info@eliagrazia.ru>' . "\r\n";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$res = wp_mail($to,$subject,$message,$headers);

	$data = array(
		'cfdb7_status' => 'unread',
		'menu-581' => $_POST['roleName'], 
		'fio' => $_POST['name'], 
		'tel-573' => $_POST['phone'], 
		'email-868' => $_POST['email'], 
	);

	global $wpdb;
	$wpdb->insert( 
	    'wp_db7_forms', 
	    array( 
	        'form_post_id' => '299',
	        'form_value'   => serialize($data),
	        'form_date'      => date("Y-m-d H:i:s")
	    )
	);

	$record_id = $wpdb->insert_id;

	exit(json_encode($record_id));
}

