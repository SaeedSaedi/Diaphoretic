<?php

	add_theme_support('menus');

	register_nav_menu('mainmenu', "Main Manu");


	add_theme_support('post-thumbnails');


	add_action('init', 'product_init'); // add init event

	function product_init (){

		$labels = array(
			'name' => _x('Diaphoretic', 'post type general name'),
			'singular_name' => _x('Diaphoretic work', 'post type singular name'),
			'add_new' => _x('New work', 'product'),
			'add_new_item' => __('Add New Work'),
			'edit_item' => __('Edit Work'),
			'new_item' => __('New Work'),
			'view_item' => __('View Work'),
			'search_items' => __('Search Works'),
			'not_found' =>  __('No Work found'),
			'not_found_in_trash' => __('No Work found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Diaphoretic'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','excerpt'),
			'taxonomies' => array('category', 'post_tag')
		);

		register_post_type ('product',$args);

		register_taxonomy_for_object_type('category', 'product');
	}

	add_action('add_meta_boxes', 'product_add_custom_box');

	function product_add_custom_box(){
		add_meta_box('product_priceid', 'Price', 'product_price_box', 'product', 'side');
		add_meta_box('product_nameid', 'Name', 'product_name_box', 'product', 'side');
		add_meta_box('product_authorid', 'Designer Name', 'product_author_box', 'product', 'side');
		add_meta_box('product_groupid', 'Group', 'product_group_box', 'product', 'side');
	}

	function product_price_box(){
		$price = 0;
		if ( isset($_REQUEST['post']) ) {
			$price = get_post_meta((int)$_REQUEST['post'],'product_price',true);
		}
		echo "<label for='product_price_text'>Price</label>";
		echo "<input id='product_price_text' class='widefat' name='product_price_text' size='20' type='text' value='$price' />";
	}
	function product_name_box(){
		$name = "";
		if ( isset($_REQUEST['post']) ) {
			$name = get_post_meta((int)$_REQUEST['post'],'product_name',true);
		}
		echo "<label for='product_name_text'>Name</label>";
		echo "<input id='product_name_text' class='widefat' name='product_name_text' size='20' type='text' value='$name' />";
	}
	function product_author_box(){
		$author = "";
		if ( isset($_REQUEST['post']) ) {
			$author = get_post_meta((int)$_REQUEST['post'],'product_author',true);
		}
		echo "<label for='product_author_text'>Designer</label>";
		echo "<input id='product_author_text' class='widefat' name='product_author_text' size='20' type='text' value='$author' />";
	}
	function product_group_box(){
		$group = "";
		if ( isset($_REQUEST['post']) ) {
			$group = get_post_meta((int)$_REQUEST['post'],'product_group',true);
		}
		echo "<label for='product_group_text'>Group</label>";
		echo "<input id='product_group_text' class='widefat' name='product_group_text' size='20' type='text' value='$group' />";
	}

	add_action('save_post','product_save_meta');

	function product_save_meta($post_id){
		if ( is_admin() ) {
			if ( isset($_POST['product_price_text']) ) {
				update_post_meta($post_id,'product_price',$_POST['product_price_text']);
			}
			if ( isset($_POST['product_name_text']) ) {
				update_post_meta($post_id,'product_name',$_POST['product_name_text']);
			}
			if ( isset($_POST['product_author_text']) ) {
				update_post_meta($post_id,'product_author',$_POST['product_author_text']);
			}
			if ( isset($_POST['product_group_text']) ) {
				update_post_meta($post_id,'product_group',$_POST['product_group_text']);
			}
		}
	}