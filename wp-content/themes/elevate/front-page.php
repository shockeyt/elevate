<?php
/**
 * The Front Page
 */

get_header();

	while ( have_posts() ) : the_post();

	if( have_rows('flex_components') ) {
		while ( have_rows('flex_components') ) : the_row();
			Components\View::render('content', 'flex-index');
		endwhile;
	};

	endwhile;

get_footer(); ?>