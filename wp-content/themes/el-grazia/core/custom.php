<?php 

//Семинары
function add_taxonomy_seminar() {		
	register_taxonomy('seminar',
		array('post'),
		array(
			'hierarchical' => true,

			'labels' => array(
				'name' => 'Семинары',
				'singular_name' => 'Категорию',
				'search_items' =>  'Найти Категорию',
				'popular_items' => 'Категорию',
				'all_items' => 'Категорию',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать категорию', 
				'update_item' => 'Обновить категорию',
				'add_new_item' => 'Добавить новую категорию',
				'new_item_name' => 'Название новой категории',
				'separate_items_with_commas' => 'Разделяйте категории запятыми',
				'add_or_remove_items' => 'Добавить или удалить категорию',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых категорий',
				'menu_name' => 'Категории'
			),
			'public' => true, 
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно 
			указать строку, которая будет использоваться в качестве 
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
			/* настройки URL пермалинков */
				'slug' => 'seminar', // ярлык
				'hierarchical' => true, // разрешить вложенность

			),
		)
	);
}
add_action( 'init', 'add_taxonomy_seminar', 100 );

function SeminarPostType() {

	$labels = array(
		'name'                  => _x( 'Семинары', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Семинары', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Семинары', 'text_domain' ),
		'name_admin_bar'        => __( 'Семинары', 'text_domain' ),
		'archives'              => __( 'Архив', 'text_domain' ),
		'attributes'            => __( 'Аттрибуты', 'text_domain' ),
		'parent_item_colon'     => __( 'Родители:', 'text_domain' ),
		'all_items'             => __( 'Все записи', 'text_domain' ),
		'add_new_item'          => __( 'Создать запись', 'text_domain' ),
		'add_new'               => __( 'Создать', 'text_domain' ),
		'new_item'              => __( 'Новая запись', 'text_domain' ),
		'edit_item'             => __( 'Редактировать запись', 'text_domain' ),
		'update_item'           => __( 'Обновить запись', 'text_domain' ),
		'view_item'             => __( 'Посмотреть запись', 'text_domain' ),
		'view_items'            => __( 'Посмотреть записи', 'text_domain' ),
		'search_items'          => __( 'Найти', 'text_domain' ),
		'not_found'             => __( 'Не найдено', 'text_domain' ),
		'not_found_in_trash'    => __( 'Не найдено', 'text_domain' ),
		'featured_image'        => __( 'Миниатюра', 'text_domain' ),
		'set_featured_image'    => __( 'Задать миниатюру', 'text_domain' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
		'use_featured_image'    => __( 'Использовать миниатюру', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Семинары', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array('seminar', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon' => 'dashicons-format-chat',
		'rewrite' => array('slug' => 'seminars','with_front' => false),
	);
	register_post_type( 'seminar', $args );
}
add_action( 'init', 'SeminarPostType', 100 );



function NewsPostType() {

	$labels = array(
		'name'                  => _x( 'Новости', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Новости', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Новости', 'text_domain' ),
		'name_admin_bar'        => __( 'Новости', 'text_domain' ),
		'archives'              => __( 'Архив', 'text_domain' ),
		'attributes'            => __( 'Аттрибуты', 'text_domain' ),
		'parent_item_colon'     => __( 'Родители:', 'text_domain' ),
		'all_items'             => __( 'Все записи', 'text_domain' ),
		'add_new_item'          => __( 'Создать запись', 'text_domain' ),
		'add_new'               => __( 'Создать', 'text_domain' ),
		'new_item'              => __( 'Новая запись', 'text_domain' ),
		'edit_item'             => __( 'Редактировать запись', 'text_domain' ),
		'update_item'           => __( 'Обновить запись', 'text_domain' ),
		'view_item'             => __( 'Посмотреть запись', 'text_domain' ),
		'view_items'            => __( 'Посмотреть записи', 'text_domain' ),
		'search_items'          => __( 'Найти', 'text_domain' ),
		'not_found'             => __( 'Не найдено', 'text_domain' ),
		'not_found_in_trash'    => __( 'Не найдено', 'text_domain' ),
		'featured_image'        => __( 'Миниатюра', 'text_domain' ),
		'set_featured_image'    => __( 'Задать миниатюру', 'text_domain' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
		'use_featured_image'    => __( 'Использовать миниатюру', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Новости', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array('news'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon' => 'dashicons-rss',
		'rewrite' => array('slug' => 'news','with_front' => false),
	);
	register_post_type( 'news', $args );
}
add_action( 'init', 'NewsPostType', 100 );


//Бренды
// function add_taxonomy_brands() {		
// 	register_taxonomy('brands',
// 		array('post'),
// 		array(
// 			'hierarchical' => true,

// 			'labels' => array(
// 				'name' => 'Бренды',
// 				'singular_name' => 'Категории',
// 				'search_items' =>  'Найти Категорию',
// 				'popular_items' => 'Категории',
// 				'all_items' => 'Категории',
// 				'parent_item' => null,
// 				'parent_item_colon' => null,
// 				'edit_item' => 'Редактировать категорию', 
// 				'update_item' => 'Обновить категорию',
// 				'add_new_item' => 'Добавить новую категорию',
// 				'new_item_name' => 'Название новой категории',
// 				'separate_items_with_commas' => 'Разделяйте категории запятыми',
// 				'add_or_remove_items' => 'Добавить или удалить категорию',
// 				'choose_from_most_used' => 'Выбрать из наиболее часто используемых категорий',
// 				'menu_name' => 'Категории'
// 			),
// 			'public' => true, 

// 			'show_in_nav_menus' => true,

// 			'show_ui' => true,

// 			'show_tagcloud' => true,

// 			'update_count_callback' => '_update_post_term_count',

// 			'query_var' => true,

// 			'rewrite' => array(
// 				'slug' => 'brands', // ярлык
// 				'hierarchical' => true, // разрешить вложенность

// 			),
// 		)
// 	);
// }
// add_action( 'init', 'add_taxonomy_brands', 100 );

function BrandsPostType() {

	$labels = array(
		'name'                  => _x( 'Бренды', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Бренды', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Бренды', 'text_domain' ),
		'name_admin_bar'        => __( 'Бренды', 'text_domain' ),
		'archives'              => __( 'Архив', 'text_domain' ),
		'attributes'            => __( 'Аттрибуты', 'text_domain' ),
		'parent_item_colon'     => __( 'Родители:', 'text_domain' ),
		'all_items'             => __( 'Все записи', 'text_domain' ),
		'add_new_item'          => __( 'Создать запись', 'text_domain' ),
		'add_new'               => __( 'Создать', 'text_domain' ),
		'new_item'              => __( 'Новая запись', 'text_domain' ),
		'edit_item'             => __( 'Редактировать запись', 'text_domain' ),
		'update_item'           => __( 'Обновить запись', 'text_domain' ),
		'view_item'             => __( 'Посмотреть запись', 'text_domain' ),
		'view_items'            => __( 'Посмотреть записи', 'text_domain' ),
		'search_items'          => __( 'Найти', 'text_domain' ),
		'not_found'             => __( 'Не найдено', 'text_domain' ),
		'not_found_in_trash'    => __( 'Не найдено', 'text_domain' ),
		'featured_image'        => __( 'Миниатюра', 'text_domain' ),
		'set_featured_image'    => __( 'Задать миниатюру', 'text_domain' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
		'use_featured_image'    => __( 'Использовать миниатюру', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Бренды', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array('brands'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon' => 'dashicons-megaphone',
		'rewrite' => array('slug' => 'brands','with_front' => false),
	);
	register_post_type( 'brands', $args );
}
add_action( 'init', 'BrandsPostType', 100 );


//Процедуры


function ProceduresPostType() {

	$labels = array(
		'name'                  => _x( 'Процедуры', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Процедуры', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Процедуры', 'text_domain' ),
		'name_admin_bar'        => __( 'Процедуры', 'text_domain' ),
		'archives'              => __( 'Архив', 'text_domain' ),
		'attributes'            => __( 'Аттрибуты', 'text_domain' ),
		'parent_item_colon'     => __( 'Родители:', 'text_domain' ),
		'all_items'             => __( 'Все записи', 'text_domain' ),
		'add_new_item'          => __( 'Создать запись', 'text_domain' ),
		'add_new'               => __( 'Создать', 'text_domain' ),
		'new_item'              => __( 'Новая запись', 'text_domain' ),
		'edit_item'             => __( 'Редактировать запись', 'text_domain' ),
		'update_item'           => __( 'Обновить запись', 'text_domain' ),
		'view_item'             => __( 'Посмотреть запись', 'text_domain' ),
		'view_items'            => __( 'Посмотреть записи', 'text_domain' ),
		'search_items'          => __( 'Найти', 'text_domain' ),
		'not_found'             => __( 'Не найдено', 'text_domain' ),
		'not_found_in_trash'    => __( 'Не найдено', 'text_domain' ),
		'featured_image'        => __( 'Миниатюра', 'text_domain' ),
		'set_featured_image'    => __( 'Задать миниатюру', 'text_domain' ),
		'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
		'use_featured_image'    => __( 'Использовать миниатюру', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Процедуры', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		// 'taxonomies'            => array('brands'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon' => 'dashicons-share-alt',
		'rewrite' => array('slug' => 'procedures','with_front' => false),
	);
	register_post_type( 'procedures', $args );
}
add_action( 'init', 'ProceduresPostType', 100 );

