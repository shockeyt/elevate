<?php
/**
 * The Single Template
 */

get_header();
	
	$hero = new StdClass;
	$hero->title = get_the_title();
	$hero->img = get_the_post_thumbnail_url();
	Components\View::render('content', 'hero-posts', $hero);
	
	while ( have_posts() ) : the_post();

		$activate = get_field('gate_content');

		$crumbs = new StdClass;
		$crumbs->link = '/articles';
		$crumbs->title = 'All Articles';
		$crumbs->date = get_the_date();
		$crumbs->cats = get_the_category();
		$crumbs->gate = ($activate)? 'gate' : '';
		Components\View::render('post', 'breadcrumbs', $crumbs);
		
		if ($activate) {
			$message = get_field('gate_message');
			if ($message) {
				$gate = new StdClass;
				$gate->title = $message['title'];
				$gate->subtitle = $message['subtitle'];
				$gate->form = $message['form_code'];
			}
			Components\View::render('post', 'gate', $gate);

		} else {

			Components\View::render('post', 'container' );

			$section = new StdClass;
			$section->row_index = get_the_ID();
			$section->title = get_field('embedded_form_title');
			$section->form = get_field('embedded_form_code');
			if (!empty($section->form)) {
				Components\View::render('content', 'form', $section);
			}

		}	

	endwhile;

	if (!$activate){
		//related posts
		$related = array();
		global $post;
		$args = array(
			'post_type'              => 'post',
			'posts_per_page'         => 3,
			'post_status'            => 'publish',
			'post__not_in'			 => array( get_the_ID() )
		);
		$query = new WP_Query( $args );
		if( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$item = new StdClass;
				$item->img = get_the_post_thumbnail_url();
				$item->title = get_the_title();
				$item->link = get_the_permalink();
				array_push($related, $item);
			}
			wp_reset_postdata();
		}
		Components\View::render('post', 'related', $related);
	}
	
get_footer(); ?>