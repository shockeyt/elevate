<?php
/**
 * The template for displaying archive pages
 */

get_header();

	$hero = new StdClass;
	$hero->title = 'Case Studies';
	$hero->img = get_field('hero_image_case_study', 'option');
	Components\View::render('content', 'hero-archive', $hero);

	Components\View::render('post', 'tax-filter');

	$section = new StdClass;
	global $post;
	$args = array(
		'post_type' => 'case_study',
		'posts_per_page' => 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'case_study_cat',
				'field'    => 'slug',
				'terms'    => array( 'featured' )
			)
		)
	);
	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			$featured = new StdClass;
			$section->f_id = get_the_ID();
			$featured->name = get_the_title();
			$featured->link = get_the_permalink();
			$featured->image = get_the_post_thumbnail_url();
			$featured->excerpt = \Setup\Helpers::custom_excerpt(get_the_excerpt(), 130);
			Components\View::render('post', 'item-featured', $featured);
		endwhile;	
		wp_reset_postdata();
	endif;

	$prefix = 'case_study_carousel_';
	
	$section->row_index = $post_id;
	$section->items = array();
	if( have_rows($prefix.'carousel', 'option') ):
		while ( have_rows($prefix.'carousel', 'option') ) : the_row();
			$item = new StdClass;
			$item->bkgd_img = get_sub_field('background_image');
			$item->headline = get_sub_field('headline');
			$item->subheadline = get_sub_field('subheadline');
			$item->link = get_sub_field('link');
			array_push($section->items, $item);
		endwhile;
	endif;

	if ( have_posts() ) :

		Components\View::render('post', 'listing', $section);

	else :
		
		Components\View::render('post', 'empty' );

	endif;

get_footer(); ?>
