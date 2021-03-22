<?php
/**
 * Standard Blog Template
 */

get_header();

	$post_id = get_option( 'page_for_posts' );
	$hero = new StdClass;
	$hero->title = get_the_title();
	$hero->img = get_the_post_thumbnail_url($post_id);
	Components\View::render('content', 'hero-posts', $hero);

	if ( have_posts() ) :

		//Components\View::render('post', 'listing');

	else :
		
		Components\View::render('post', 'empty' );

	endif;

get_footer(); ?>
