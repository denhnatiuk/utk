<?php
/**
* change default post type "posts" to 'news'
**/
add_action( 'admin_menu', 'utk_change_post_label' );
add_action( 'init', 'utk_change_post_object' );
function utk_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Новости';
    $submenu['edit.php'][5][0] = 'Новости';
    $submenu['edit.php'][10][0] = 'Добавить новость';
    $submenu['edit.php'][16][0] = 'Теги';
}
function utk_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Новости';
    $labels->singular_name = 'Новости';
    $labels->add_new = 'Добавить новость';
    $labels->add_new_item = 'Добавить новость';
    $labels->edit_item = 'Редактировать новость';
    $labels->new_item = 'Новости';
    $labels->view_item = 'Просмотреть';
    $labels->search_items = 'Поиск';
    $labels->not_found = 'Не найдено';
    $labels->not_found_in_trash = 'Не найдено в корзине';
    $labels->all_items = 'Все новости';
    $labels->menu_name = 'Новости';
    $labels->name_admin_bar = 'Новости';
}

/**
*  Add custom post types About Us, Features, Team
*
**/
add_action('init', 'utk_register_post_types');
function utk_register_post_types(){
	register_post_type('aboutus', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'aboutus', // основное название для типа записи
			'singular_name'      => 'aboutus', // название для одной записи этого типа
			'add_new'            => 'Добавить запись о нас', // для добавления новой записи
			'add_new_item'       => 'Добавление запись о нас', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи о нас', // для редактирования типа записи
			'new_item'           => 'Новая запись о нас', // текст новой записи
			'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
			'search_items'       => 'Искать запси о нас', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'О нас', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type('features', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'features', // основное название для типа записи
			'singular_name'      => 'feature', // название для одной записи этого типа
			'add_new'            => 'Добавить особенность', // для добавления новой записи
			'add_new_item'       => 'Добавление особенность', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование особенности', // для редактирования типа записи
			'new_item'           => 'Новая особенность', // текст новой записи
			'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
			'search_items'       => 'Искать запси о нас', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Особенности', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title', 'excerpt', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type('team', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'team', // основное название для типа записи
			'singular_name'      => 'team', // название для одной записи этого типа
			'add_new'            => 'Добавить работника', // для добавления новой записи
			'add_new_item'       => 'Добавление работника', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи о работнике', // для редактирования типа записи
			'new_item'           => 'Новая запись о работнике', // текст новой записи
			'view_item'          => 'Просмотреть', // для просмотра записи этого типа.
			'search_items'       => 'Искать запси о работнике', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Команда', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title', 'secondary-title','excerpt','editor','custom-fields','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
