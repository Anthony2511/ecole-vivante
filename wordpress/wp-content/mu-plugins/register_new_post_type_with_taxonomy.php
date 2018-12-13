<?php


if ( !post_type_exists( 'news' ) ) {
	function register_news_type() {
		$label_singular = 'New';
		$label_plural   = 'News';
		register_post_type('news', [
			'label'         => 'News',
			'labels'        => [
				'all_items' => 'Toutes les news en base de données',
				'singular_name' => 'new',
				'add_new_item'  => 'Ajouter une nouvelle news',
				'add_new'  => 'Ajouter une nouvelle news',
			],
			'hierarchical'    => true,
			'description'   => 'Permet d’ajouter des news',
			'public'        => true,
			'menu_icon'     => 'dashicons-welcome-write-blog',
			'rewrite' => [
				'with_front' => false,
			],
			'supports' => ['title', 'thumbnail', 'custom-fields']
		]);
	}

	function news_categories_init() {
		register_taxonomy(
			'category',
			'news',
			[
				'label' => __( 'Type de news' ),
				'hierarchical'    => true,
			]
		);
	}

	add_action('init', 'register_news_type');
	add_action( 'init', 'news_categories_init' );

}
