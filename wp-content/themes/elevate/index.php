<?php
/**
 * Standard Blog Template
 */

get_header();

	$post_id = get_option( 'page_for_posts' );
	$hero = new StdClass;
	$hero->title = get_the_title($post_id);
	$hero->img = get_the_post_thumbnail_url($post_id);
	Components\View::render('content', 'hero-posts', $hero);

	Components\View::render('post', 'filter');

	global $post;
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		'category_name' => 'featured'
	);
	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			$featured = new StdClass;
			$featured->name = get_the_title();
			$featured->link = get_the_permalink();
			$featured->image = get_the_post_thumbnail_url();
			$featured->excerpt = \Setup\Helpers::custom_excerpt(get_the_excerpt(), 130);
			Components\View::render('post', 'item-featured', $featured);
		endwhile;	
		wp_reset_postdata();
	endif;

	if ( have_posts() ) :

		Components\View::render('post', 'listing');

	else :
		
		Components\View::render('post', 'empty' );

	endif;

get_footer(); ?>
